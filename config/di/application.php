<?php

return [

    'codekata.application.application' =>
        function (Interop\Container\ContainerInterface $container) {
            $consoleAppolication = $container->get('codekata.application.symfony-console-application');
            $helloCommand        = $container->get('codekata.application.hello-command');
            return new \CodeKata\RomanNumerals\Application\Application($consoleAppolication, $helloCommand);
        },

    'codekata.application.hello-command' =>
        function (Interop\Container\ContainerInterface $container) {
            $helloService = $container->get('codekata.domain.hello-service');
            return new \CodeKata\RomanNumerals\Application\HelloCommand($helloService);
        },

    'codekata.application.symfony-console-application' =>
        function (Interop\Container\ContainerInterface $container) {
            return new \Symfony\Component\Console\Application();
        },

];
