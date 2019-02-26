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
        $number = new static(strlen($romanNumerals));
        return $number;
    }

    public function toArabic(): int
    {
        return $this->numberValue;
    }
}
