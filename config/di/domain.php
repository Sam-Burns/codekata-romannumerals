<?php

return [

    'codekata.domain.hello-service' =>
        function (Interop\Container\ContainerInterface $container) {
          return new \CodeKata\RomanNumerals\Domain\HelloService();
        },

];
