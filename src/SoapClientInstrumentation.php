<?php

declare(strict_types=1);

namespace OpenTelemetry\Contrib\Instrumentation\SoapClient;

use Composer\InstalledVersions;
use OpenTelemetry\API\Instrumentation\CachedInstrumentation;
use OpenTelemetry\API\Trace\Span;
use OpenTelemetry\API\Trace\SpanKind;
use OpenTelemetry\API\Trace\StatusCode;
use OpenTelemetry\Context\Context;
use function OpenTelemetry\Instrumentation\hook;
use OpenTelemetry\SemConv\Attributes\CodeAttributes;
use OpenTelemetry\SemConv\Attributes\HttpAttributes;
use OpenTelemetry\SemConv\Attributes\NetworkAttributes;
use OpenTelemetry\SemConv\Attributes\ServerAttributes;
use OpenTelemetry\SemConv\Attributes\UrlAttributes;
use OpenTelemetry\SemConv\Incubating\Attributes\HttpIncubatingAttributes;
use OpenTelemetry\SemConv\Version;
use SoapClient;

use Throwable;

class SoapClientInstrumentation
{
    public const NAME = 'soap-client';

    public static function register(): void
    {
        $instrumentation = new CachedInstrumentation(
            'io.opentelemetry.contrib.php.soap-client',
            InstalledVersions::getVersion('ycchuang99/opentelemetry-auto-soap-client'),
            Version::VERSION_1_36_0->url(),
        );

        hook(
            SoapClient::class,
            '__doRequest',
            pre: function (SoapClient $soapClient, array $params, string $class, string $function, ?string $filename, ?int $lineno) use ($instrumentation) {
                [$request, $location, $action, $version, $oneWay] = array_pad($params, 5, '');
                $url = parse_url($location);

                $span = $instrumentation->tracer()->spanBuilder(sprintf('soap client %s', $function))
                    ->setSpanKind(SpanKind::KIND_CLIENT)
                    ->setAttribute(CodeAttributes::CODE_FUNCTION_NAME, sprintf('%s::%s', $class, $function))
                    ->setAttribute(CodeAttributes::CODE_FILE_PATH, $filename)
                    ->setAttribute(CodeAttributes::CODE_LINE_NUMBER, $lineno)
                    ->setAttribute(HttpIncubatingAttributes::HTTP_REQUEST_BODY_SIZE, strlen($request))
                    ->setAttribute(UrlAttributes::URL_FULL, $location)
                    ->setAttribute(UrlAttributes::URL_PATH, $url['path'] ?? '')
                    ->setAttribute(UrlAttributes::URL_QUERY, $url['query'] ?? '')
                    ->setAttribute(UrlAttributes::URL_SCHEME, $url['scheme'] ?? '')
                    ->setAttribute(ServerAttributes::SERVER_ADDRESS, $url['host'] ?? '')
                    ->setAttribute(SoapClientAttributes::SOAP_ACTION, $action)
                    ->setAttribute(SoapClientAttributes::SOAP_VERSION, $version)
                    ->setAttribute(SoapClientAttributes::SOAP_ONE_WAY, $oneWay)
                    ->startSpan();
                
                $headers = $soapClient->__getLastRequestHeaders();
                if ($headers) {
                    $span->setAttribute(HttpAttributes::HTTP_REQUEST_HEADER, $headers);
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
                    $span->setAttribute(NetworkAttributes::NETWORK_PROTOCOL_VERSION, self::extractHttpVersion($responseHeaders))
                        ->setAttribute(HttpAttributes::HTTP_RESPONSE_STATUS_CODE, self::extractHttpStatusCode($responseHeaders));
                }
                
                if ($result) {
                    $span->setAttribute(HttpIncubatingAttributes::HTTP_RESPONSE_BODY_SIZE, strlen($result));
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
