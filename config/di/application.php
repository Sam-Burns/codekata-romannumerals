<?php

use Interop\Container\ContainerInterface as Container;

return [

    'roman-numerals-kata.application' =>
        function (Container $container) {
            $consoleApplication = new \Symfony\Component\Console\Application();
            $greetingCommand    = $container->get('roman-numerals-kata.greeting.command');
            return new \RomanNumeralsKata\Application($consoleApplication, $greetingCommand);
        },

];
