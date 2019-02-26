<?php
namespace spec\RomanNumeralsKata\Domain\NumeralConversion;

use PhpSpec\ObjectBehavior;
use RomanNumeralsKata\Domain\NumeralConversion\RomanSymbol;

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

    function it_knows_if_it_is_less_than_another()
    {
        $this->beConstructedWith('V');

        $this->lessThan(new RomanSymbol('X'))->shouldBe(true);
        $this->lessThan(new RomanSymbol('I'))->shouldBe(false);
    }
}
