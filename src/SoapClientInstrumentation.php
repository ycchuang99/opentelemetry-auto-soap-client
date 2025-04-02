<?php

declare(strict_types=1);

namespace OpenTelemetry\Contrib\Instrumentation\SoapClient;

use OpenTelemetry\API\Instrumentation\CachedInstrumentation;
use OpenTelemetry\API\Trace\Span;
use OpenTelemetry\API\Trace\SpanKind;
use OpenTelemetry\API\Trace\StatusCode;
use OpenTelemetry\Context\Context;
use function OpenTelemetry\Instrumentation\hook;
use OpenTelemetry\SemConv\TraceAttributes;
use SoapClient;
use Throwable;

class SoapClientInstrumentation
{
    public const NAME = 'soap-client';

    public static function register(): void
    {
        $instrumentation = new CachedInstrumentation(
            'io.opentelemetry.contrib.php.soap-client',
            null,
            'https://opentelemetry.io/schemas/1.30.0',
        );

        hook(
            SoapClient::class,
            '__doRequest',
            pre: function (SoapClient $soapClient, array $params, string $class, string $function, ?string $filename, ?int $lineno) use ($instrumentation) {
                [$request, $location, $action, $version, $oneWay] = array_pad($params, 5, '');
                $url = parse_url($location);

                $span = $instrumentation->tracer()->spanBuilder(sprintf('%s::%s', $class, $function))
                    ->setSpanKind(SpanKind::KIND_CLIENT)
                    ->setAttribute(TraceAttributes::CODE_FUNCTION_NAME, $function)
                    ->setAttribute(TraceAttributes::CODE_NAMESPACE, $class)
                    ->setAttribute(TraceAttributes::CODE_FILE_PATH, $filename)
                    ->setAttribute(TraceAttributes::CODE_LINE_NUMBER, $lineno)
                    ->setAttribute(TraceAttributes::HTTP_REQUEST_BODY_SIZE, strlen($request))
                    ->setAttribute(TraceAttributes::URL_FULL, $location)
                    ->setAttribute(TraceAttributes::URL_PATH, $url['path'] ?? '')
                    ->setAttribute(TraceAttributes::URL_QUERY, $url['query'] ?? '')
                    ->setAttribute(TraceAttributes::URL_SCHEME, $url['scheme'] ?? '')
                    ->setAttribute(TraceAttributes::SERVER_ADDRESS, $url['host'] ?? '')
                    ->setAttribute(SoapClientAttributes::SOAP_ACTION, $action)
                    ->setAttribute(SoapClientAttributes::SOAP_VERSION, $version)
                    ->setAttribute(SoapClientAttributes::SOAP_ONE_WAY, $oneWay)
                    ->startSpan();
                
                $headers = $soapClient->__getLastRequestHeaders();
                if ($headers) {
                    $span->setAttribute(TraceAttributes::HTTP_REQUEST_HEADER, $headers);
                }

                Context::storage()->attach($span->storeInContext(Context::getCurrent()));
            },
            post: function (SoapClient $soapClient, array $params, mixed $result, ?Throwable $exception) {
                $scope = Context::storage()->scope();
                if (!$scope) {
                    return;
                }
                
                $responseHeaders = $soapClient->__getLastResponseHeaders();
                $span = Span::fromContext($scope->context());
                
                if ($responseHeaders) {
                    $span->setAttribute(TraceAttributes::NETWORK_PROTOCOL_VERSION, self::extractHttpVersion($responseHeaders))
                        ->setAttribute(TraceAttributes::HTTP_RESPONSE_STATUS_CODE, self::extractHttpStatusCode($responseHeaders));
                }
                
                if ($result) {
                    $span->setAttribute(TraceAttributes::HTTP_RESPONSE_BODY_SIZE, strlen($result));
                }
                
                self::endSpan($exception);
            },
        );
    }

    public static function extractHttpVersion(string $responseHeaders): string
    {
        $matches = [];
        if (preg_match('/HTTP\/(\d+\.\d+)/', $responseHeaders, $matches)) {
            return $matches[1];
        }

        return '';
    }

    public static function extractHttpStatusCode(string $responseHeaders): int
    {
        $matches = [];
        if (preg_match('/HTTP\/\d+\.\d+ (\d+)/', $responseHeaders, $matches)) {
            return (int) $matches[1];
        }

        return 0;
    }

    private static function endSpan(?Throwable $exception): void
    {
        $scope = Context::storage()->scope();
        if (!$scope) {
            return;
        }

        $scope->detach();
        $span = Span::fromContext($scope->context());

        if ($exception) {
            $span->recordException($exception);
            $span->setStatus(StatusCode::STATUS_ERROR, $exception->getMessage());
        }

        $span->end();
    }
}
