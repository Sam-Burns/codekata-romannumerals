<?php

use Psr\Container\ContainerInterface;

return [

    'roman-numerals-kata.application' =>
        function (ContainerInterface $container) {
            $consoleApplication = new \Symfony\Component\Console\Application();
            $greetingCommand    = $container->get('roman-numerals-kata.greeting.command');
            $consoleApplication->addCommands([$greetingCommand]);
            return $consoleApplication;
        },

];
