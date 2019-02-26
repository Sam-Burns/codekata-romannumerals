<?php
namespace RomanNumeralsKata\Domain\NumeralConversion;

class Number
{
    /** @var string */
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
        $total = 0;
        $symbolAfterThisOne = null;

        foreach ($this->getSymbolsInReverse() as $symbol) {
            $total += $this->getActualValueOfSymbol($symbol, $symbolAfterThisOne);
            $symbolAfterThisOne = $symbol;
        }

        return $total;
    }

    private function getSymbolsInReverse() : \Generator
    {
        $pointer = strlen($this->romanValue) - 1;

        while ($pointer >= 0) {
            yield new RomanSymbol($this->romanValue[$pointer]);
            --$pointer;
        }
    }

    private function getActualValueOfSymbol(RomanSymbol $romanSymbol, ? RomanSymbol $nextSymbol) : int
    {
        $absoluteValue = $romanSymbol->toInt();
        $isNegative = $nextSymbol && $romanSymbol->lessThan($nextSymbol);
        return $isNegative ? -$absoluteValue : $absoluteValue;
    }
}
