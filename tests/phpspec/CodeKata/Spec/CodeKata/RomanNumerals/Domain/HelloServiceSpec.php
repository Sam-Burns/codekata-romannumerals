<?php

namespace CodeKata\Spec\CodeKata\RomanNumerals\Domain;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class HelloServiceSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('CodeKata\RomanNumerals\Domain\HelloService');
    }
}
