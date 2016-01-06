<?php

use Interop\Container\ContainerInterface as Container;

return [

    'codekata.application.application' =>
        function (Container $container) {
            $consoleApplication = $container->get('codekata.application.symfony-console-application');
            $helloCommand        = $container->get('codekata.application.hello-command');
            return new \CodeKata\RomanNumerals\Application\Application($consoleApplication, $helloCommand);
        },

    'codekata.application.hello-command' =>
        function (Container $container) {
            $helloService = $container->get('codekata.domain.hello-service');
            return new \CodeKata\RomanNumerals\Application\HelloCommand($helloService);
        },

    'codekata.application.symfony-console-application' =>
        function (Container $container) {
            return new \Symfony\Component\Console\Application();
        },

];
