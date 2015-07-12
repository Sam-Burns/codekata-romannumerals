<?php
require_once dirname(__DIR__) . '/src/bootstrap.php';

$diContainer = new \SamBurns\Psr11Symfony\ServiceContainer();
$diContainer->addConfigFilesFromFolder(APPLICATION_ROOT_DIR . '/config/di/');

$application = $diContainer->get('codekata.application.application');

$application->run();
