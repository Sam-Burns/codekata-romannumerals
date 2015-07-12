<?php
namespace CodeKata\Spec\CodeKata\RomanNumerals\Domain;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NameSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('Sam');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('\CodeKata\RomanNumerals\Domain\Name');
    }

    function it_can_return_the_name()
    {
        $this->__toString()->shouldBe('Sam');
    }
}
