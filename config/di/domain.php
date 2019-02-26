<?php

use Psr\Container\ContainerInterface;

return [

    'roman-numerals-kata.greeting.service' =>
        function (ContainerInterface $container) {
            return new RomanNumeralsKata\Domain\Greeting\Greeter();
        },

    'roman-numerals-kata.greeting.command' =>
        function (ContainerInterface $container) {
            $greetingService = $container->get('roman-numerals-kata.greeting.service');
            return new \RomanNumeralsKata\Application\GreetingCommand($greetingService);
        },

];
