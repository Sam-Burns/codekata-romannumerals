<?php
namespace RomanNumeralsKata\Domain\NumeralConversion;

class Number
{
    private $romanValue;

    private function __construct(string $romanValue)
    {
        $this->romanValue = $romanValue;
    }

    public static function fromRoman(string $romanNumerals): Number
    {
        return new static($romanNumerals);
    }

    public function toArabic() : int
    {
        $numberValue = 0;

        foreach (str_split($this->romanValue) as $romanSymbolValue) {

            $romanSymbol = new RomanSymbol($romanSymbolValue);
            $valueOfSymbol = $romanSymbol->toInt();
            $numberValue += $valueOfSymbol;

        }

        return $numberValue;
    }
}
