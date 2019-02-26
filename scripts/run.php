<?php

require_once __DIR__ . '/../vendor/autoload.php';

$container = (new DI\ContainerBuilder())->addDefinitions(__DIR__ . '/../config/services.php')->build();

$application = $container->get('application');

$application->run();
