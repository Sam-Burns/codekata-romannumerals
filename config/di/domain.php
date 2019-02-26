<?php

use Psr\Container\ContainerInterface as Container;

return [

    'roman-numerals-kata.greeting.service' =>
        function (Container $container) {
            return new RomanNumeralsKata\Greeting\Service();
        },

    'roman-numerals-kata.greeting.command' =>
        function (Container $container) {
            $greetingService = $container->get('roman-numerals-kata.greeting.service');
            return new \RomanNumeralsKata\Greeting\Command($greetingService);
        },

];
