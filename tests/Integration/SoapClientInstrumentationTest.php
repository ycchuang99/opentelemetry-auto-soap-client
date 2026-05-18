<?php

declare(strict_types=1);

namespace Tests\Integration;

use ArrayObject;
use OpenTelemetry\API\Instrumentation\Configurator;
use OpenTelemetry\API\Trace\SpanKind;
use OpenTelemetry\API\Trace\StatusCode;
use OpenTelemetry\Context\ScopeInterface;
use OpenTelemetry\Contrib\Instrumentation\SoapClient\SoapClientAttributes;
use OpenTelemetry\SDK\Trace\ImmutableSpan;
use OpenTelemetry\SDK\Trace\SpanExporter\InMemoryExporter;
use OpenTelemetry\SDK\Trace\SpanProcessor\SimpleSpanProcessor;
use OpenTelemetry\SDK\Trace\TracerProvider;
use OpenTelemetry\SemConv\Attributes\HttpAttributes;
use OpenTelemetry\SemConv\Attributes\NetworkAttributes;
use OpenTelemetry\SemConv\Attributes\ServerAttributes;
use OpenTelemetry\SemConv\Attributes\UrlAttributes;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use SoapClient;
use SoapFault;

class SoapClientInstrumentationTest extends TestCase
{
    private ?ScopeInterface $scope = null;

    /** @var ArrayObject<int, ImmutableSpan> */
    private ArrayObject $storage;

    private const WSDL_URL = 'http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso';

    private const WSDL_URL_WITH_QUERY = self::WSDL_URL . '?WSDL';

    private const REQUEST_HEADERS = "Content-Type: application/soap+xml; charset=utf-8\nContent-Length: 1234\n";

    private const RESPONSE_HEADERS = "HTTP/1.1 200 OK\nContent-Type: application/soap+xml; charset=utf-8\nContent-Length: 36748\n";

    #[\Override]
    protected function setUp(): void
    {
        if (!extension_loaded('opentelemetry')) {
            $this->markTestSkipped('The opentelemetry extension is required for integration tests.');
        }

        $this->storage = new ArrayObject();
        $tracerProvider = new TracerProvider(
            new SimpleSpanProcessor(new InMemoryExporter($this->storage))
        );

        $this->scope = Configurator::create()
            ->withTracerProvider($tracerProvider)
            ->activate();
    }

    public function testSoapClientDoRequestCapturesHappyPathAttributes(): void
    {
        $client = $this->createMockSoapClient();
        $client->method('__doRequest')
            ->willReturn($this->fixtureResponse());
        $client->method('__getLastRequestHeaders')
            ->willReturn(self::REQUEST_HEADERS);
        $client->method('__getLastResponseHeaders')
            ->willReturn(self::RESPONSE_HEADERS);

        $client->__soapCall('ListOfCountryNamesByName', []);

        $this->assertCount(1, $this->storage);
        $span = $this->spanAt(0);

        $this->assertEquals(SpanKind::KIND_CLIENT, $span->getKind());
        $this->assertEquals(StatusCode::STATUS_UNSET, $span->getStatus()->getCode());
        $this->assertEquals('http', $span->getAttributes()->get(UrlAttributes::URL_SCHEME));
        $this->assertEquals('/websamples.countryinfo/CountryInfoService.wso', $span->getAttributes()->get(UrlAttributes::URL_PATH));
        $this->assertEquals('webservices.oorsprong.org', $span->getAttributes()->get(ServerAttributes::SERVER_ADDRESS));
        $this->assertEquals(SOAP_1_2, $span->getAttributes()->get(SoapClientAttributes::SOAP_VERSION));
        $this->assertEquals(self::REQUEST_HEADERS, $span->getAttributes()->get(HttpAttributes::HTTP_REQUEST_HEADER));
        $this->assertEquals('1.1', $span->getAttributes()->get(NetworkAttributes::NETWORK_PROTOCOL_VERSION));
        $this->assertEquals(200, $span->getAttributes()->get(HttpAttributes::HTTP_RESPONSE_STATUS_CODE));
    }

    public function testSoapClientDoRequestRecordsExceptionAndErrorStatus(): void
    {
        $client = $this->createMockSoapClient();
        $client->method('__doRequest')
            ->willThrowException(new SoapFault('Server', 'SOAP transport failed'));
        $client->method('__getLastRequestHeaders')
            ->willReturn(self::REQUEST_HEADERS);
        $client->method('__getLastResponseHeaders')
            ->willReturn('');

        try {
            $client->__soapCall('ListOfCountryNamesByName', []);
            $this->fail('Expected SOAP fault to be thrown.');
        } catch (SoapFault $exception) {
            $this->assertSame('SOAP transport failed', $exception->getMessage());
        }

        $this->assertCount(1, $this->storage);
        $span = $this->spanAt(0);
        $events = $span->getEvents();

        $this->assertEquals(StatusCode::STATUS_ERROR, $span->getStatus()->getCode());
        $this->assertEquals(self::REQUEST_HEADERS, $span->getAttributes()->get(HttpAttributes::HTTP_REQUEST_HEADER));
        $this->assertNotEmpty($events);
        $this->assertSame('exception', $events[0]->getName());
        $eventAttributes = $events[0]->getAttributes()->toArray();

        $this->assertSame('SoapFault', $eventAttributes['exception.type'] ?? null);
        $this->assertSame('SOAP transport failed', $eventAttributes['exception.message'] ?? null);
    }

    public function testSoapClientDoRequestHandlesMissingHeadersSafely(): void
    {
        $client = $this->createMockSoapClient();
        $client->method('__doRequest')
            ->willReturn($this->fixtureResponse());
        $client->method('__getLastRequestHeaders')
            ->willReturn('');
        $client->method('__getLastResponseHeaders')
            ->willReturn('');

        $client->__soapCall('ListOfCountryNamesByName', []);

        $this->assertCount(1, $this->storage);
        $span = $this->spanAt(0);

        $this->assertNull($span->getAttributes()->get(HttpAttributes::HTTP_REQUEST_HEADER));
        $this->assertNull($span->getAttributes()->get(NetworkAttributes::NETWORK_PROTOCOL_VERSION));
        $this->assertNull($span->getAttributes()->get(HttpAttributes::HTTP_RESPONSE_STATUS_CODE));
        $this->assertEquals(StatusCode::STATUS_UNSET, $span->getStatus()->getCode());
    }

    public function testSoapClientDoRequestCapturesOneWaySoap11Requests(): void
    {
        $client = $this->createMockSoapClient(soapVersion: SOAP_1_1);
        $client->method('__doRequest')
            ->willReturn(null);
        $client->method('__getLastRequestHeaders')
            ->willReturn("Content-Type: text/xml; charset=utf-8\nContent-Length: 42\n");
        $client->method('__getLastResponseHeaders')
            ->willReturn('');

        $client->__doRequest('<Envelope/>', self::WSDL_URL, 'urn:test-action', SOAP_1_1, true);

        $this->assertCount(1, $this->storage);
        $span = $this->spanAt(0);

        $this->assertEquals(SOAP_1_1, $span->getAttributes()->get(SoapClientAttributes::SOAP_VERSION));
        $this->assertTrue($span->getAttributes()->get(SoapClientAttributes::SOAP_ONE_WAY));
        $this->assertSame('urn:test-action', $span->getAttributes()->get(SoapClientAttributes::SOAP_ACTION));
        $this->assertNull($span->getAttributes()->get(HttpAttributes::HTTP_RESPONSE_STATUS_CODE));
    }

    public function testRequestHeadersAreCapturedAfterRequestCompletionToAvoidStaleValues(): void
    {
        $client = new RealRequestHeaderProbeSoapClient(self::WSDL_URL_WITH_QUERY, [
            'trace' => true,
            'exceptions' => true,
            'soap_version' => SOAP_1_2,
            'cache_wsdl' => WSDL_CACHE_NONE,
        ]);

        $client->ListOfCountryNamesByName();
        $client->CapitalCity(['sCountryISOCode' => 'US']);

        $this->assertCount(2, $this->storage);
        $this->assertNull($client->requestHeadersSeenAtDoRequestStart[0]);

        $firstSpanRequestHeaders = $this->spanAt(0)->getAttributes()->get(HttpAttributes::HTTP_REQUEST_HEADER);
        $secondSpanRequestHeaders = $this->spanAt(1)->getAttributes()->get(HttpAttributes::HTTP_REQUEST_HEADER);

        $this->assertSame($firstSpanRequestHeaders, $client->requestHeadersSeenAtDoRequestStart[1]);
        $this->assertNotSame($client->requestHeadersSeenAtDoRequestStart[1], $secondSpanRequestHeaders);
        $this->assertStringContainsString('Content-Length: 282', $secondSpanRequestHeaders);
    }

    #[\Override]
    public function tearDown(): void
    {
        if ($this->scope instanceof ScopeInterface) {
            $this->scope->detach();
        }
    }

    /** @return MockObject&SoapClient */
    private function createMockSoapClient(int $soapVersion = SOAP_1_2): SoapClient
    {
        return $this->getMockBuilder(SoapClient::class)
            ->setConstructorArgs([
                self::WSDL_URL_WITH_QUERY,
                ['trace' => true, 'exceptions' => true, 'soap_version' => $soapVersion],
            ])
            ->onlyMethods(['__doRequest', '__getLastRequestHeaders', '__getLastResponseHeaders'])
            ->getMock();
    }

    private function fixtureResponse(): string
    {
        return (string) file_get_contents(__DIR__ . '/../Fixtures/ListOfCountryNamesByName.soap12.xml');
    }

    private function spanAt(int $index): ImmutableSpan
    {
        /** @var ImmutableSpan $span */
        $span = $this->storage->offsetGet($index);

        return $span;
    }
}

/**
 * @method mixed ListOfCountryNamesByName()
 * @method mixed CapitalCity(array $request)
 */
class RealRequestHeaderProbeSoapClient extends SoapClient
{
    /** @var list<?string> */
    public array $requestHeadersSeenAtDoRequestStart = [];

    #[\Override]
    public function __doRequest(string $request, string $location, string $action, int $version, bool $oneWay = false, ?string $uriParserClass = null): ?string
    {
        $this->requestHeadersSeenAtDoRequestStart[] = $this->__getLastRequestHeaders();

        if (PHP_VERSION_ID >= 80500) {
            /** @psalm-suppress TooManyArguments */
            return parent::__doRequest($request, $location, $action, $version, $oneWay, $uriParserClass);
        }

        return parent::__doRequest($request, $location, $action, $version, $oneWay);
    }
}
