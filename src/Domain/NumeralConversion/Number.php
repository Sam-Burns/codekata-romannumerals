<?php
namespace RomanNumeralsKata\Domain\NumeralConversion;

class Number
{
    private $numberValue;

    private function __construct(int $numberValue)
    {
        $this->numberValue = $numberValue;
    }

    public static function fromRoman(string $romanNumerals): Number
    {
        $number = new static(1);
        return $number;
    }

    public function toArabic(): int
    {
        return $this->numberValue;
    }
}
