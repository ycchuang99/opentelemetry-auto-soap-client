<?php

declare(strict_types=1);

namespace Tests\Unit;

use OpenTelemetry\Contrib\Instrumentation\SoapClient\SoapClientInstrumentation;
use PHPUnit\Framework\TestCase;

class SoapClientInstrumentationTest extends TestCase
{
    public function testExtractHttpVersion(): void
    {
        $header = '
            HTTP/1.1 200 OK\n
            Content-Encoding: gzip\n
            Content-Type: text/xml\n
            Content-Length: 12816\n
        ';

        $httpVersion = SoapClientInstrumentation::extractHttpVersion($header);

        $this->assertEquals('1.1', $httpVersion);
    }

    public function testExtractHttpVersionWithNoVersion(): void
    {
        $header = '
            Content-Encoding: gzip\n
            Content-Type: text/xml\n
            Content-Length: 12816\n
        ';

        $httpVersion = SoapClientInstrumentation::extractHttpVersion($header);

        $this->assertEquals('', $httpVersion);
    }

    public function testExtractHttpStatusCode(): void
    {
        $header = '
            HTTP/1.1 200 OK\n
            Content-Encoding: gzip\n
            Content-Type: text/xml\n
            Content-Length: 12816\n
        ';

        $httpStatusCode = SoapClientInstrumentation::extractHttpStatusCode($header);

        $this->assertEquals(200, $httpStatusCode);
    }

    public function testExtractHttpStatusCodeWithNoCode(): void
    {
        $header = '
            Content-Encoding: gzip\n
            Content-Type: text/xml\n
            Content-Length: 12816\n
        ';

        $httpStatusCode = SoapClientInstrumentation::extractHttpStatusCode($header);

        $this->assertEquals(0, $httpStatusCode);
    }
}
