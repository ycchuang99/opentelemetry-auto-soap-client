<?php

declare(strict_types=1);

namespace OpenTelemetry\Tests\Contrib\Instrumentation\SoapClient\Integration;

use ArrayObject;
use OpenTelemetry\API\Instrumentation\Configurator;
use OpenTelemetry\API\Trace\SpanKind;
use OpenTelemetry\API\Trace\StatusCode;
use OpenTelemetry\Context\ScopeInterface;
use OpenTelemetry\Contrib\Instrumentation\SoapClient\SoapClientAttributes;
use OpenTelemetry\SDK\Trace\SpanExporter\InMemoryExporter;
use OpenTelemetry\SDK\Trace\SpanProcessor\SimpleSpanProcessor;
use OpenTelemetry\SDK\Trace\TracerProvider;
use PHPUnit\Framework\TestCase;
use SoapClient;

class SoapClientInstrumentationIntegrationTest extends TestCase
{
    private ScopeInterface $scope;
    
    private ArrayObject $storage;
    
    private const WSDL_URL = 'http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso';

    private const WSDL_URL_WITH_QUERY = self::WSDL_URL . '?WSDL';

    protected function setUp(): void
    {
        $this->storage = new ArrayObject();
        $tracerProvider = new TracerProvider(
            new SimpleSpanProcessor(
                new InMemoryExporter($this->storage)
            )
        );

        $this->scope = Configurator::create()
            ->withTracerProvider($tracerProvider)
            ->activate();
    }

    public function testSoapClientDoRequest(): void
    {
        $options = [
            'trace' => true,
            'exceptions' => true,
            'soap_version' => SOAP_1_2,
        ];
        
        $client = new SoapClient(self::WSDL_URL_WITH_QUERY, $options);
        
        $client->ListOfCountryNamesByName();
        
        $this->assertCount(1, $this->storage);
        $span = $this->storage->offsetGet(0);
        
        $this->assertEquals(SpanKind::KIND_CLIENT, $span->getKind());
        
        $this->assertEquals(StatusCode::STATUS_OK, $span->getStatus()->getCode());
        $this->assertEquals(self::WSDL_URL, $span->getAttributes()->get(SoapClientAttributes::SOAP_LOCATION));
        $this->assertEquals(SOAP_1_2, $span->getAttributes()->get(SoapClientAttributes::SOAP_VERSION));

    }

    public function tearDown(): void
    {
        $this->scope->detach();
    }
}
