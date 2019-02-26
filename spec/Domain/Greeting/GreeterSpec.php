<?php
namespace spec\RomanNumeralsKata\Domain\Greeting;

use RomanNumeralsKata\Domain\Greeting\Name;
use PhpSpec\ObjectBehavior;

class GreeterSpec extends ObjectBehavior
{
    function it_can_return_a_greeting()
    {
        $name = new Name('Sam');
        $this->getGreeting($name)->shouldBe('Hello, Sam');
    }
}
