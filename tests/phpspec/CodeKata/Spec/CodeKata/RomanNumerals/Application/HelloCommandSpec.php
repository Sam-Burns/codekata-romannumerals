<?php

namespace CodeKata\Spec\CodeKata\RomanNumerals\Application;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class HelloCommandSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('CodeKata\RomanNumerals\Application\HelloCommand');
    }
}
