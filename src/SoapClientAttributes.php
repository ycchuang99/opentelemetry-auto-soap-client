<?php

declare(strict_types=1);

namespace OpenTelemetry\Contrib\Instrumentation\SoapClient;

interface SoapClientAttributes
{
    public const SOAP_LOCATION = 'soap.location';

    public const SOAP_ACTION = 'soap.action';
    
    public const SOAP_VERSION = 'soap.version';
    
    public const SOAP_ONE_WAY = 'soap.one_way';
}
