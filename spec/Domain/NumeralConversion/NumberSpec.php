<?php
namespace spec\RomanNumeralsKata\Domain\NumeralConversion;

use PhpSpec\ObjectBehavior;
use RomanNumeralsKata\Domain\NumeralConversion\Number;

class NumberSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Number::class);
    }

    function it_can_be_instantiated_from_roman_numerals_string()
    {
        $this->beConstructedThrough('fromRoman', ['I']);
        $this->toArabic()->shouldBe(1);
    }

    function it_can_convert_multi_symbol_roman_numerals_to_arabic()
    {
        $this->beConstructedThrough('fromRoman', ['II']);
        $this->toArabic()->shouldBe(2);
    }

    function it_can_understand_different_roman_symbols()
    {
        $this->beConstructedThrough('fromRoman', ['VI']);
        $this->toArabic()->shouldBe(6);
    }

    function it_can_handle_cases_where_symbols_are_subtracted()
    {
        $this->beConstructedThrough('fromRoman', ['IV']);
        $this->toArabic()->shouldBe(4);
    }
}
