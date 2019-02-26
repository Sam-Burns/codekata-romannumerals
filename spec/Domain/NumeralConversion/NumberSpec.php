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
}
