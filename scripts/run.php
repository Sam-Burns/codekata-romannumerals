<?php

require_once __DIR__ . '/../vendor/autoload.php';

$diContainer = new UltraLite\Container\Container();

$diContainer->configureFromFile(__DIR__ . '/../config/di/application.php');
$diContainer->configureFromFile(__DIR__ . '/../config/di/greeting.php');

$application = $diContainer->get('roman-numerals-kata.application');

$application->run();
