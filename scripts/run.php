<?php
require_once dirname(__DIR__) . '/src/bootstrap.php';

$diContainer = new \UltraLite\Container\Container();

$diContainer->configureFromFile(APPLICATION_ROOT_DIR . '/config/di/application.php');
$diContainer->configureFromFile(APPLICATION_ROOT_DIR . '/config/di/domain.php');

$application = $diContainer->get('codekata.application.application');

$application->run();
