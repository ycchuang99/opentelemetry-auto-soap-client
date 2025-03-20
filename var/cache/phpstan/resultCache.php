<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1742474961,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '1.12.21',
  'phpVersion' => 80315,
  'projectConfig' => '{conditionalTags: {PHPStan\\PhpDoc\\PHPUnit\\MockObjectTypeNodeResolverExtension: {phpstan.phpDoc.typeNodeResolverExtension: %phpunit.convertUnionToIntersectionType%}}, parameters: {phpunit: {convertUnionToIntersectionType: true}, additionalConstructors: [PHPUnit\\Framework\\TestCase::setUp], earlyTerminatingMethodCalls: {PHPUnit\\Framework\\Assert: [fail, markTestIncomplete, markTestSkipped]}, stubFiles: [/usr/src/myapp/vendor/phpstan/phpstan-phpunit/stubs/Assert.stub, /usr/src/myapp/vendor/phpstan/phpstan-phpunit/stubs/AssertionFailedError.stub, /usr/src/myapp/vendor/phpstan/phpstan-phpunit/stubs/ExpectationFailedException.stub, /usr/src/myapp/vendor/phpstan/phpstan-phpunit/stubs/InvocationMocker.stub, /usr/src/myapp/vendor/phpstan/phpstan-phpunit/stubs/MockBuilder.stub, /usr/src/myapp/vendor/phpstan/phpstan-phpunit/stubs/MockObject.stub, /usr/src/myapp/vendor/phpstan/phpstan-phpunit/stubs/Stub.stub, /usr/src/myapp/vendor/phpstan/phpstan-phpunit/stubs/TestCase.stub], exceptions: {uncheckedExceptionRegexes: ["#^PHPUnit\\\\\\\\#", "#^SebastianBergmann\\\\\\\\#"]}, tmpDir: /usr/src/myapp/var/cache/phpstan, level: 5, paths: [/usr/src/myapp/src, /usr/src/myapp/tests]}, services: [{class: PHPStan\\PhpDoc\\PHPUnit\\MockObjectTypeNodeResolverExtension}, {class: PHPStan\\Type\\PHPUnit\\Assert\\AssertFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension]}, {class: PHPStan\\Type\\PHPUnit\\Assert\\AssertMethodTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.methodTypeSpecifyingExtension]}, {class: PHPStan\\Type\\PHPUnit\\Assert\\AssertStaticMethodTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.staticMethodTypeSpecifyingExtension]}, {class: PHPStan\\Type\\PHPUnit\\InvocationMockerDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: PHPStan\\Type\\PHPUnit\\MockBuilderDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: PHPStan\\Type\\PHPUnit\\MockObjectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: PHPStan\\Rules\\PHPUnit\\CoversHelper}, {class: PHPStan\\Rules\\PHPUnit\\AnnotationHelper}, {class: PHPStan\\Rules\\PHPUnit\\DataProviderHelper, factory: {arguments: []}}, {class: PHPStan\\Rules\\PHPUnit\\DataProviderHelperFactory}]}',
  'analysedPaths' => 
  array (
    0 => '/usr/src/myapp/src',
    1 => '/usr/src/myapp/tests',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
  ),
  'composerInstalled' => 
  array (
    '/usr/src/myapp/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'amphp/amp' => 
        array (
          'pretty_version' => 'v3.1.0',
          'version' => '3.1.0.0',
          'reference' => '7cf7fef3d667bfe4b2560bc87e67d5387a7bcde9',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../amphp/amp',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/byte-stream' => 
        array (
          'pretty_version' => 'v2.1.2',
          'version' => '2.1.2.0',
          'reference' => '55a6bd071aec26fa2a3e002618c20c35e3df1b46',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../amphp/byte-stream',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/cache' => 
        array (
          'pretty_version' => 'v2.0.1',
          'version' => '2.0.1.0',
          'reference' => '46912e387e6aa94933b61ea1ead9cf7540b7797c',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../amphp/cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/dns' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => '78eb3db5fc69bf2fc0cb503c4fcba667bc223c71',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../amphp/dns',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/parallel' => 
        array (
          'pretty_version' => 'v2.3.1',
          'version' => '2.3.1.0',
          'reference' => '5113111de02796a782f5d90767455e7391cca190',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../amphp/parallel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/parser' => 
        array (
          'pretty_version' => 'v1.1.1',
          'version' => '1.1.1.0',
          'reference' => '3cf1f8b32a0171d4b1bed93d25617637a77cded7',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../amphp/parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/pipeline' => 
        array (
          'pretty_version' => 'v1.2.3',
          'version' => '1.2.3.0',
          'reference' => '7b52598c2e9105ebcddf247fc523161581930367',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../amphp/pipeline',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/process' => 
        array (
          'pretty_version' => 'v2.0.3',
          'version' => '2.0.3.0',
          'reference' => '52e08c09dec7511d5fbc1fb00d3e4e79fc77d58d',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../amphp/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/serialization' => 
        array (
          'pretty_version' => 'v1.0.0',
          'version' => '1.0.0.0',
          'reference' => '693e77b2fb0b266c3c7d622317f881de44ae94a1',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../amphp/serialization',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/socket' => 
        array (
          'pretty_version' => 'v2.3.1',
          'version' => '2.3.1.0',
          'reference' => '58e0422221825b79681b72c50c47a930be7bf1e1',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../amphp/socket',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/sync' => 
        array (
          'pretty_version' => 'v2.3.0',
          'version' => '2.3.0.0',
          'reference' => '217097b785130d77cfcc58ff583cf26cd1770bf1',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../amphp/sync',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'brick/math' => 
        array (
          'pretty_version' => '0.12.3',
          'version' => '0.12.3.0',
          'reference' => '866551da34e9a618e64a819ee1e01c20d8a588ba',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'clue/ndjson-react' => 
        array (
          'pretty_version' => 'v1.3.0',
          'version' => '1.3.0.0',
          'reference' => '392dc165fce93b5bb5c637b67e59619223c931b0',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../clue/ndjson-react',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'clue/stream-filter' => 
        array (
          'pretty_version' => 'v1.7.0',
          'version' => '1.7.0.0',
          'reference' => '049509fef80032cb3f051595029ab75b49a3c2f7',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../clue/stream-filter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'composer/package-versions-deprecated' => 
        array (
          'pretty_version' => '1.11.99.5',
          'version' => '1.11.99.5',
          'reference' => 'b4f54f74ef3453349c24a845d22392cd31e65f1d',
          'type' => 'composer-plugin',
          'install_path' => '/usr/src/myapp/vendor/composer/./package-versions-deprecated',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'composer/pcre' => 
        array (
          'pretty_version' => '3.3.2',
          'version' => '3.3.2.0',
          'reference' => 'b2bed4734f0cc156ee1fe9c0da2550420d99a21e',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/./pcre',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'composer/semver' => 
        array (
          'pretty_version' => '3.4.3',
          'version' => '3.4.3.0',
          'reference' => '4313d26ada5e0c4edfbd1dc481a92ff7bff91f12',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/./semver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'composer/xdebug-handler' => 
        array (
          'pretty_version' => '3.0.5',
          'version' => '3.0.5.0',
          'reference' => '6c1925561632e83d60a44492e0b344cf48ab85ef',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/./xdebug-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'daverandom/libdns' => 
        array (
          'pretty_version' => 'v2.1.0',
          'version' => '2.1.0.0',
          'reference' => 'b84c94e8fe6b7ee4aecfe121bfe3b6177d303c8a',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../daverandom/libdns',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'dnoegel/php-xdg-base-dir' => 
        array (
          'pretty_version' => 'v0.1.1',
          'version' => '0.1.1.0',
          'reference' => '8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../dnoegel/php-xdg-base-dir',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'doctrine/deprecations' => 
        array (
          'pretty_version' => '1.1.4',
          'version' => '1.1.4.0',
          'reference' => '31610dbb31faa98e6b5447b62340826f54fbc4e9',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../doctrine/deprecations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'doctrine/instantiator' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => 'c6222283fa3f4ac679f8b9ced9a4e23f163e80d0',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../doctrine/instantiator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'evenement/evenement' => 
        array (
          'pretty_version' => 'v3.0.2',
          'version' => '3.0.2.0',
          'reference' => '0a16b0d71ab13284339abb99d9d2bd813640efbc',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../evenement/evenement',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'felixfbecker/advanced-json-rpc' => 
        array (
          'pretty_version' => 'v3.2.1',
          'version' => '3.2.1.0',
          'reference' => 'b5f37dbff9a8ad360ca341f3240dc1c168b45447',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../felixfbecker/advanced-json-rpc',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'felixfbecker/language-server-protocol' => 
        array (
          'pretty_version' => 'v1.5.3',
          'version' => '1.5.3.0',
          'reference' => 'a9e113dbc7d849e35b8776da39edaf4313b7b6c9',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../felixfbecker/language-server-protocol',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fidry/cpu-core-counter' => 
        array (
          'pretty_version' => '1.2.0',
          'version' => '1.2.0.0',
          'reference' => '8520451a140d3f46ac33042715115e290cf5785f',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../fidry/cpu-core-counter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'friendsofphp/php-cs-fixer' => 
        array (
          'pretty_version' => 'v3.73.1',
          'version' => '3.73.1.0',
          'reference' => 'ffcb8200a42045e65049af7910cfd022f631b064',
          'type' => 'application',
          'install_path' => '/usr/src/myapp/vendor/composer/../friendsofphp/php-cs-fixer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'kelunik/certificate' => 
        array (
          'pretty_version' => 'v1.1.3',
          'version' => '1.1.3.0',
          'reference' => '7e00d498c264d5eb4f78c69f41c8bd6719c0199e',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../kelunik/certificate',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'league/uri' => 
        array (
          'pretty_version' => '7.5.1',
          'version' => '7.5.1.0',
          'reference' => '81fb5145d2644324614cc532b28efd0215bda430',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../league/uri',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'league/uri-interfaces' => 
        array (
          'pretty_version' => '7.5.0',
          'version' => '7.5.0.0',
          'reference' => '08cfc6c4f3d811584fb09c37e2849e6a7f9b0742',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'microsoft/tolerant-php-parser' => 
        array (
          'pretty_version' => 'v0.1.2',
          'version' => '0.1.2.0',
          'reference' => '3eccfd273323aaf69513e2f1c888393f5947804b',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../microsoft/tolerant-php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.0',
          'version' => '1.13.0.0',
          'reference' => '024473a478be9df5fdaca2c793f2232fe788e414',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'netresearch/jsonmapper' => 
        array (
          'pretty_version' => 'v4.5.0',
          'version' => '4.5.0.0',
          'reference' => '8e76efb98ee8b6afc54687045e1b8dba55ac76e5',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../netresearch/jsonmapper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.4.0',
          'version' => '5.4.0.0',
          'reference' => '447a020a1f875a434d62f2a401f53b82a396e494',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nyholm/psr7-server' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '4335801d851f554ca43fa6e7d2602141538854dc',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../nyholm/psr7-server',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ocramius/package-versions' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '1.11.99',
          ),
        ),
        'open-telemetry/api' => 
        array (
          'pretty_version' => '1.2.3',
          'version' => '1.2.3.0',
          'reference' => '199d7ddda88f5f5619fa73463f1a5a7149ccd1f1',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../open-telemetry/api',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'open-telemetry/context' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '0cba875ea1953435f78aec7f1d75afa87bdbf7f3',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../open-telemetry/context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'open-telemetry/sdk' => 
        array (
          'pretty_version' => '1.2.2',
          'version' => '1.2.2.0',
          'reference' => '37eec0fe47ddd627911f318f29b6cd48196be0c0',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../open-telemetry/sdk',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'open-telemetry/sem-conv' => 
        array (
          'pretty_version' => '1.30.0',
          'version' => '1.30.0.0',
          'reference' => '4178c9f390da8e4dbca9b181a9d1efd50cf7ee0a',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../open-telemetry/sem-conv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phan/phan' => 
        array (
          'pretty_version' => '5.4.5',
          'version' => '5.4.5.0',
          'reference' => '2b15302175931a0629a85c57d0c1f91d68b26a4d',
          'type' => 'project',
          'install_path' => '/usr/src/myapp/vendor/composer/../phan/phan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'php-http/async-client-implementation' => 
        array (
          'dev_requirement' => true,
          'provided' => 
          array (
            0 => '*',
            1 => '1.0',
          ),
        ),
        'php-http/client-common' => 
        array (
          'pretty_version' => '2.7.2',
          'version' => '2.7.2.0',
          'reference' => '0cfe9858ab9d3b213041b947c881d5b19ceeca46',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../php-http/client-common',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'php-http/client-implementation' => 
        array (
          'dev_requirement' => true,
          'provided' => 
          array (
            0 => '*',
            1 => '1.0',
          ),
        ),
        'php-http/discovery' => 
        array (
          'pretty_version' => '1.20.0',
          'version' => '1.20.0.0',
          'reference' => '82fe4c73ef3363caed49ff8dd1539ba06044910d',
          'type' => 'composer-plugin',
          'install_path' => '/usr/src/myapp/vendor/composer/../php-http/discovery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'php-http/httplug' => 
        array (
          'pretty_version' => '2.4.1',
          'version' => '2.4.1.0',
          'reference' => '5cad731844891a4c282f3f3e1b582c46839d22f4',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../php-http/httplug',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'php-http/message' => 
        array (
          'pretty_version' => '1.16.2',
          'version' => '1.16.2.0',
          'reference' => '06dd5e8562f84e641bf929bfe699ee0f5ce8080a',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../php-http/message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'php-http/message-factory-implementation' => 
        array (
          'dev_requirement' => true,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'php-http/mock-client' => 
        array (
          'pretty_version' => '1.6.1',
          'version' => '1.6.1.0',
          'reference' => '81f558234421f7da58ed015604a03808996017d0',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../php-http/mock-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'php-http/promise' => 
        array (
          'pretty_version' => '1.3.1',
          'version' => '1.3.1.0',
          'reference' => 'fc85b1fba37c169a69a07ef0d5a8075770cc1f83',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../php-http/promise',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-common' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../phpdocumentor/reflection-common',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-docblock' => 
        array (
          'pretty_version' => '5.6.1',
          'version' => '5.6.1.0',
          'reference' => 'e5e784149a09bd69d9a5e3b01c5cbd2e2bd653d8',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../phpdocumentor/reflection-docblock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/type-resolver' => 
        array (
          'pretty_version' => '1.10.0',
          'version' => '1.10.0.0',
          'reference' => '679e3ce485b99e84c775d28e2e96fade9a7fb50a',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../phpdocumentor/type-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpdoc-parser' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '9b30d6fd026b2c132b3985ce6b23bec09ab3aa68',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../phpstan/phpdoc-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '1.12.21',
          'version' => '1.12.21.0',
          'reference' => '14276fdef70575106a3392a4ed553c06a984df28',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan-phpunit' => 
        array (
          'pretty_version' => '1.4.2',
          'version' => '1.4.2.0',
          'reference' => '72a6721c9b64b3e4c9db55abbc38f790b318267e',
          'type' => 'phpstan-extension',
          'install_path' => '/usr/src/myapp/vendor/composer/../phpstan/phpstan-phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '9.2.32',
          'version' => '9.2.32.0',
          'reference' => '85402a822d1ecf1db1096959413d35e1c37cf1a5',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '3.0.6',
          'version' => '3.0.6.0',
          'reference' => 'cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '3.1.1',
          'version' => '3.1.1.0',
          'reference' => '5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '5.0.3',
          'version' => '5.0.3.0',
          'reference' => '5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '9.6.22',
          'version' => '9.6.22.0',
          'reference' => 'f80235cb4d3caa59ae09be3adf1ded27521d1a9c',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psalm/plugin-phpunit' => 
        array (
          'pretty_version' => '0.19.3',
          'version' => '0.19.3.0',
          'reference' => '07dbf9fec23a694f2c095d8e2d44ccd6992afe38',
          'type' => 'psalm-plugin',
          'install_path' => '/usr/src/myapp/vendor/composer/../psalm/plugin-phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psalm/psalm' => 
        array (
          'dev_requirement' => true,
          'provided' => 
          array (
            0 => '6.4.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => true,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => true,
          'provided' => 
          array (
            0 => '*',
            1 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => true,
          'provided' => 
          array (
            0 => '*',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => true,
          'provided' => 
          array (
            0 => '*',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => true,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '3c5990b8a5e0b79cd1cf11c2dc1229e58e93f109',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.7.6',
          'version' => '4.7.6.0',
          'reference' => '91039bc1faa45ba123c4328958e620d382ec7088',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/cache' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => 'd47c472b64aa5608225f47965a484b75c7817d5b',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../react/cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/child-process' => 
        array (
          'pretty_version' => 'v0.6.6',
          'version' => '0.6.6.0',
          'reference' => '1721e2b93d89b745664353b9cfc8f155ba8a6159',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../react/child-process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/dns' => 
        array (
          'pretty_version' => 'v1.13.0',
          'version' => '1.13.0.0',
          'reference' => 'eb8ae001b5a455665c89c1df97f6fb682f8fb0f5',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../react/dns',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/event-loop' => 
        array (
          'pretty_version' => 'v1.5.0',
          'version' => '1.5.0.0',
          'reference' => 'bbe0bd8c51ffc05ee43f1729087ed3bdf7d53354',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../react/event-loop',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/promise' => 
        array (
          'pretty_version' => 'v3.2.0',
          'version' => '3.2.0.0',
          'reference' => '8a164643313c71354582dc850b42b33fa12a4b63',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../react/promise',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/socket' => 
        array (
          'pretty_version' => 'v1.16.0',
          'version' => '1.16.0.0',
          'reference' => '23e4ff33ea3e160d2d1f59a0e6050e4b0fb0eac1',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../react/socket',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/stream' => 
        array (
          'pretty_version' => 'v1.4.0',
          'version' => '1.4.0.0',
          'reference' => '1e5b0acb8fe55143b5b426817155190eb6f5b18d',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../react/stream',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'revolt/event-loop' => 
        array (
          'pretty_version' => 'v1.0.7',
          'version' => '1.0.7.0',
          'reference' => '09bf1bf7f7f574453efe43044b06fafe12216eb3',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../revolt/event-loop',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '4.7.6',
          ),
        ),
        'sabre/event' => 
        array (
          'pretty_version' => '5.1.7',
          'version' => '5.1.7.0',
          'reference' => '86d57e305c272898ba3c28e9bd3d65d5464587c2',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../sabre/event',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '1.0.2',
          'version' => '1.0.2.0',
          'reference' => '2b56bea83a09de3ac06bb18b92f068e60cc6f50b',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '1.0.8',
          'version' => '1.0.8.0',
          'reference' => '1fc9f64c0927627ef78ba436c9b17d967e68e120',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => 'ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '4.0.8',
          'version' => '4.0.8.0',
          'reference' => 'fa0f136dd2334583309d32b62544682ee972b51a',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => '25f207c40d62b8b7aa32f5ab026c53561964053a',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '4.0.6',
          'version' => '4.0.6.0',
          'reference' => 'ba01945089c3a293b01ba9badc29ad55b106b0bc',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '5.1.5',
          'version' => '5.1.5.0',
          'reference' => '830c43a844f1f8d5b7a1f6d6076b784454d8b7ed',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '4.0.6',
          'version' => '4.0.6.0',
          'reference' => '78c00df8f170e02473b682df15bfcdacc3d32d72',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '5.0.7',
          'version' => '5.0.7.0',
          'reference' => 'bca7df1f32ee6fe93b4d4a9abbf69e13a4ada2c9',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '1.0.4',
          'version' => '1.0.4.0',
          'reference' => 'e1e4a170560925c26d424b6a03aed157e7dcc5c5',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => '5c9eeac41b290a3712d88851518825ad78f45c71',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => 'b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '4.0.5',
          'version' => '4.0.5.0',
          'reference' => 'e75bd0f07204fec2a0af9b0f3cfe97d05f92efc1',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/resource-operations' => 
        array (
          'pretty_version' => '3.0.4',
          'version' => '3.0.4.0',
          'reference' => '05d5692a7993ecccd56a03e40cd7e5b09b1d404e',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../sebastian/resource-operations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '75e2c2a32f5e0b3aef905b9ed0b179b953b3d7c7',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'c6c1022351a901512170118436c764e473f6de8c',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/array-to-xml' => 
        array (
          'pretty_version' => '3.4.0',
          'version' => '3.4.0.0',
          'reference' => '7dcfc67d60b0272926dabad1ec01f6b8a5fb5e67',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../spatie/array-to-xml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v7.2.1',
          'version' => '7.2.1.0',
          'reference' => 'fefcc18c0f5d0efe3ab3152f15857298868dc2c3',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.5.1',
          'version' => '3.5.1.0',
          'reference' => '74c71c939a79f7d5bf3c1ce9f5ea37ba0114c6f6',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => '910c5db85a5356d0fea57680defec4e99eb9c8c1',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.5.1',
          'version' => '3.5.1.0',
          'reference' => '7642f5e970b672283b7823222ae8ef8bbc160b9f',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => true,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/filesystem' => 
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => 'b8dce482de9d7c9fe2891155035a7248ab5c7fdb',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../symfony/filesystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v7.2.2',
          'version' => '7.2.2.0',
          'reference' => '87a71856f2f56e4100373e92529eed3171695cfb',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/options-resolver' => 
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => '7da8fbac9dcfef75ffc212235d76b2754ce0cf50',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../symfony/options-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => 'b9123926e3b7bc2f98c02ad54f6a4b02b91a8abe',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '85181ba99b2345b0ef10ce42ecac37612d9fd341',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '60328e362d4c2c802a54fcbf04f9d3fb892b4cf8',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-php81' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '4a4cfc2d253c21a5ad0e53071df248ed48c6ce5c',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../symfony/polyfill-php81',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-php82' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '5d2ed36f7734637dacc025f179698031951b1692',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../symfony/polyfill-php82',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v7.2.4',
          'version' => '7.2.4.0',
          'reference' => 'd8f411ff3c7ddc4ae9166fb388d1190a2df5b5cf',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.5.1',
          'version' => '3.5.1.0',
          'reference' => 'e53260aabf78fb3d63f8d79d69ece59f80d5eda0',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/stopwatch' => 
        array (
          'pretty_version' => 'v7.2.4',
          'version' => '7.2.4.0',
          'reference' => '5a49289e2b308214c8b9c2fda4ea454d8b8ad7cd',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../symfony/stopwatch',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => '446e0d146f991dde3e73f45f2c97a9faad773c82',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tbachert/spi' => 
        array (
          'pretty_version' => 'v1.0.2',
          'version' => '1.0.2.0',
          'reference' => '2ddfaf815dafb45791a61b08170de8d583c16062',
          'type' => 'composer-plugin',
          'install_path' => '/usr/src/myapp/vendor/composer/../tbachert/spi',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.2.3',
          'version' => '1.2.3.0',
          'reference' => '737eda637ed5e28c3413cb1ebe8bb52cbf1ca7a2',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tysonandre/var_representation_polyfill' => 
        array (
          'pretty_version' => '0.1.3',
          'version' => '0.1.3.0',
          'reference' => 'e9116c2c352bb0835ca428b442dde7767c11ad32',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../tysonandre/var_representation_polyfill',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'vimeo/psalm' => 
        array (
          'pretty_version' => '6.4.0',
          'version' => '6.4.0.0',
          'reference' => '04f312ac6ea48ba1c3e5db4d815bf6d74641c0ee',
          'type' => 'project',
          'install_path' => '/usr/src/myapp/vendor/composer/../vimeo/psalm',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '1.11.0',
          'version' => '1.11.0.0',
          'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
          'type' => 'library',
          'install_path' => '/usr/src/myapp/vendor/composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    'phar:///usr/src/myapp/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php' => 'eaf9127f074e9c7ebc65043ec4050f9fed60c2bb',
    'phar:///usr/src/myapp/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar:///usr/src/myapp/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar:///usr/src/myapp/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'PDO',
    2 => 'Phar',
    3 => 'Reflection',
    4 => 'SPL',
    5 => 'SimpleXML',
    6 => 'Zend OPcache',
    7 => 'ast',
    8 => 'ctype',
    9 => 'curl',
    10 => 'date',
    11 => 'dom',
    12 => 'fileinfo',
    13 => 'filter',
    14 => 'grpc',
    15 => 'hash',
    16 => 'iconv',
    17 => 'intl',
    18 => 'json',
    19 => 'libxml',
    20 => 'mbstring',
    21 => 'mysqlnd',
    22 => 'openssl',
    23 => 'opentelemetry',
    24 => 'pcntl',
    25 => 'pcre',
    26 => 'pdo_sqlite',
    27 => 'posix',
    28 => 'protobuf',
    29 => 'random',
    30 => 'readline',
    31 => 'session',
    32 => 'soap',
    33 => 'sockets',
    34 => 'sodium',
    35 => 'sqlite3',
    36 => 'standard',
    37 => 'tokenizer',
    38 => 'xml',
    39 => 'xmlreader',
    40 => 'xmlwriter',
    41 => 'zip',
    42 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '5',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
); },
	'dependencies' => array (
  '/usr/src/myapp/src/SoapClientInstrumentation.php' => 
  array (
    'fileHash' => 'a07494b64adcd205f7cb7e114e96a169f3435e61',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/usr/src/myapp/src/SoapClientInstrumentation.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'OpenTelemetry\\Contrib\\Instrumentation\\SoapClient\\SoapClientInstrumentation',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'NAME',
               'value' => '\'soap-client\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
