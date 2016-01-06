<?php

use Interop\Container\ContainerInterface as Container;

return [

    'codekata.domain.hello-service' =>
        function (Container $container) {
          return new \CodeKata\RomanNumerals\Domain\HelloService();
        },

];
