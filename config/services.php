<?php

use Psr\Container\ContainerInterface;
use RomanNumeralsKata\Application\GreetingCommand;
use Symfony\Component\Console\Application;

return [
    'application' =>
        function (ContainerInterface $container) {
            $consoleApplication = new Application();
            $consoleApplication->addCommands($container->get('commands'));
            return $consoleApplication;
        },

    'commands' =>
        function (ContainerInterface $container): array {
            return [
                $container->get(GreetingCommand::class),
            ];
        },
];
