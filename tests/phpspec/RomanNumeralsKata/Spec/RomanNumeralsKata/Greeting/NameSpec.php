<?php
namespace RomanNumeralsKata\Spec\RomanNumeralsKata\Greeting;

use RomanNumeralsKata\Greeting\Name;
use PhpSpec\ObjectBehavior;

/**
 * @mixin Name
 */
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
