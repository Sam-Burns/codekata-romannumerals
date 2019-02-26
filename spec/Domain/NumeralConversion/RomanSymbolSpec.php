<?php
namespace spec\RomanNumeralsKata\Domain\NumeralConversion;

use PhpSpec\ObjectBehavior;

class RomanSymbolSpec extends ObjectBehavior
{
    function it_can_be_converted_to_an_int()
    {
        $this->beConstructedWith('I');
        $this->toInt()->shouldBe(1);
    }

    function it_understands_all_the_symbols()
    {
        $this->beConstructedWith('M');
        $this->toInt()->shouldBe(1000);
    }

    function it_knows_if_it_is_greater_than_something()
    {
        $this->beConstructedWith('V');
        $this->greaterThan(6)->shouldBe(false);
        $this->greaterThan(4)->shouldBe(true);
    }
}
