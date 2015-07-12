<?php
namespace CodeKata\Spec\CodeKata\RomanNumerals\Domain;

use CodeKata\RomanNumerals\Domain\Name;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class HelloServiceSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('\CodeKata\RomanNumerals\Domain\HelloService');
    }

    function it_can_return_a_greeting()
    {
        $name = new Name('Sam');
        $this->getGreeting($name)->shouldBe('Hello, Sam');
    }
}
