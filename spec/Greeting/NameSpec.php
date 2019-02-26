<?php
namespace spec\RomanNumeralsKata\Greeting;

use RomanNumeralsKata\Greeting\Name;
use PhpSpec\ObjectBehavior;

class NameSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('Sam');
    }

    function it_can_return_the_name()
    {
        $this->__toString()->shouldBe('Sam');
    }
}
