# OpenTelemetry SOAP auto-instrumentation

OpenTelemetry auto-instrumentation for PHP `SoapClient` requests.

This package registers Composer-based hooks so SOAP client calls automatically create client spans when the OpenTelemetry PHP extension and SDK are configured.

For general OpenTelemetry PHP installation and runtime configuration, see the official docs:
https://opentelemetry.io/docs/instrumentation/php/automatic/

## Requirements

- PHP `^8.2`
- PHP extension: `ext-opentelemetry`
- PHP extension: `ext-soap`
- OpenTelemetry PHP auto-instrumentation runtime configured

## Tested / supported PHP versions

The CI workflow currently exercises:

- PHP 8.2
- PHP 8.3
- PHP 8.4
- PHP 8.5

## Installation

```shell
composer require ycchuang99/opentelemetry-auto-soap-client
```

## Usage

Once the OpenTelemetry PHP extension and SDK are configured, spans are created automatically for `SoapClient::__doRequest()` calls.

A minimal SOAP client example:

```php
<?php

declare(strict_types=1);

$client = new SoapClient(
    'http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso?WSDL',
    [
        'trace' => true,
        'exceptions' => true,
        'soap_version' => SOAP_1_2,
    ]
);

$client->ListOfCountryNamesByName();
```

## Quick verification

A simple way to verify the instrumentation is active:

1. Configure an exporter for your OpenTelemetry PHP setup.
2. Run a SOAP request.
3. Confirm a client span is emitted for the SOAP request.

Expected span characteristics include:

- span kind: `client`
- instrumentation scope: `io.opentelemetry.contrib.php.soap-client`
- span name shaped like `soap client <method>`

## What gets instrumented

The instrumentation hooks `SoapClient::__doRequest()` and records request / response metadata such as:

- `code.function.name`
- `code.file.path`
- `code.line.number`
- `http.request.body.size`
- `http.request.header`
- `http.response.body.size`
- `http.response.status_code`
- `network.protocol.version`
- `server.address`
- `url.full`
- `url.path`
- `url.query`
- `url.scheme`
- `soap.action`
- `soap.version`
- `soap.one_way`

On failures, the span records the exception and sets error status.

## Example emitted attributes

A span from a SOAP 1.2 request can look like:

```text
name=soap client __doRequest
kind=client
url.full=http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso
url.scheme=http
server.address=webservices.oorsprong.org
soap.version=2
soap.one_way=false
http.request.header=POST /websamples.countryinfo/CountryInfoService.wso HTTP/1.1 ...
http.response.status_code=200
network.protocol.version=1.1
```

Exact values depend on the SOAP endpoint, request payload, and runtime options.

## Configuration

The extension can be disabled via OpenTelemetry runtime configuration:

```shell
OTEL_PHP_DISABLED_INSTRUMENTATIONS=soap-client
```

## Local development

### 1. Prepare environment

Copy the example environment file:

```shell
cp .env.dist .env
```

By default the project expects:

- `DOCKER_COMPOSE=docker compose`
- `PHP_USER=php`

If your machine uses the standalone `docker-compose` binary instead of the Compose plugin, update `.env` accordingly.

### 2. Build the development container

```shell
make build
```

### 3. Install dependencies

```shell
make install
```

### 4. Run checks

Run the full local quality suite:

```shell
make all-checks
```

Useful individual targets:

```shell
make test
make test-unit
make test-integration
make test-coverage
make phpstan
make psalm
make style
make validate
```

### 5. Lowest-supported dependency checks

To exercise the lowest supported dependency set locally:

```shell
make update-lowest
make all-lowest
```

## Development notes

- The Docker workflow mounts the repository into `/usr/src/myapp` inside the PHP container.
- The integration tests rely on the OpenTelemetry extension being available.
- Composer plugins used for package discovery are explicitly controlled in project configuration and CI.

## License

Apache-2.0
