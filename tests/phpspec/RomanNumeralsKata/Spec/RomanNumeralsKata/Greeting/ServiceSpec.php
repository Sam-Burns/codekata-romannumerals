<?php
namespace RomanNumeralsKata\Spec\RomanNumeralsKata\Greeting;

use RomanNumeralsKata\Greeting\Name;
use RomanNumeralsKata\Greeting\Service;
use PhpSpec\ObjectBehavior;

/**
 * @mixin Service
 */
class ServiceSpec extends ObjectBehavior
{
    function it_can_return_a_greeting()
    {
        $name = new Name('Sam');
        $this->getGreeting($name)->shouldBe('Hello, Sam');
    }
}
