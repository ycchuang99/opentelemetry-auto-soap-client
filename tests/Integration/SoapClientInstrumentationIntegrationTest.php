<?php

declare(strict_types=1);

namespace OpenTelemetry\Tests\Contrib\Instrumentation\SoapClient\Integration;

use OpenTelemetry\API\Trace\SpanKind;
use OpenTelemetry\API\Trace\StatusCode;
use OpenTelemetry\Contrib\Instrumentation\SoapClient\SoapClientInstrumentation;
use OpenTelemetry\SDK\Trace\SpanProcessor\SimpleSpanProcessor;
use OpenTelemetry\SDK\Trace\TracerProvider;
use OpenTelemetry\SDK\Common\Future\CancellationInterface;
use OpenTelemetry\SDK\Common\Future\FutureInterface;
use OpenTelemetry\SDK\Common\Future\CompletedFuture;
use PHPUnit\Framework\TestCase;
use SoapClient;
use Traversable;

class SoapClientInstrumentationIntegrationTest extends TestCase
{
    private TracerProvider $tracerProvider;
    private array $spans = [];
    private const WSDL_URL = 'http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso?WSDL';

    protected function setUp(): void
    {
        $this->spans = [];
        $this->tracerProvider = new TracerProvider(
            new SimpleSpanProcessor(new class ($this->spans) implements \OpenTelemetry\SDK\Trace\SpanExporterInterface {
                public function __construct(private array &$spans)
                {
                }

                public function export(Traversable|array $batch, ?CancellationInterface $cancellation = null): FutureInterface
                {
                    if (is_array($batch)) {
                        $this->spans = array_merge($this->spans, $batch);
                    } else {
                        foreach ($batch as $span) {
                            $this->spans[] = $span;
                        }
                    }
                    return new CompletedFuture(true);
                }

                public function shutdown(?CancellationInterface $cancellation = null): bool
                {
                    return true;
                }

                public function forceFlush(?CancellationInterface $cancellation = null): bool
                {
                    return true;
                }
            })
        );

        SoapClientInstrumentation::register();
    }

    public function testRealSoapCall(): void
    {
        try {
            $options = [
                'trace' => true,
                'exceptions' => true,
            ];
            
            $client = new SoapClient(self::WSDL_URL, $options);
            
            // Make a real SOAP call
            $result = $client->ListOfCountryNamesByName();
            
            // Verify span was created
            $this->assertCount(1, $this->spans);
            $span = $this->spans[0];
            
            // Verify span attributes
            $this->assertEquals(SpanKind::KIND_CLIENT, $span->getKind());
            $this->assertNotNull($span->getAttribute('url.full'));
            $this->assertNotNull($span->getAttribute('http.request.size'));
            
            // Verify the call was successful
            $this->assertEquals(StatusCode::STATUS_OK, $span->getStatus()->getCode());
            
        } catch (\Exception $e) {
            $this->fail('SOAP call failed: ' . $e->getMessage());
        }
    }

    public function testInvalidSoapCall(): void
    {
        try {
            $options = [
                'trace' => true,
                'exceptions' => true,
            ];
            
            $client = new SoapClient('http://invalid-wsdl-url.example.com', $options);
            
            $this->fail('Expected exception was not thrown');
        } catch (\Exception $e) {
            // Verify error span was created
            $this->assertCount(1, $this->spans);
            $span = $this->spans[0];
            
            // Verify error was properly recorded
            $this->assertEquals(StatusCode::STATUS_ERROR, $span->getStatus()->getCode());
            $this->assertNotNull($span->getStatus()->getDescription());
        }
    }
}
