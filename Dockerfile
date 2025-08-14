ARG PHP_VERSION=8.2
FROM ghcr.io/open-telemetry/opentelemetry-php/opentelemetry-php-base:${PHP_VERSION}

ARG PHP_VERSION=8.2

USER root

RUN apt-get install -y \
    libxml2-dev \
    php${PHP_VERSION}-soap

RUN echo "extension=soap" > $(php-config --ini-dir)/20-soap.ini

USER php
