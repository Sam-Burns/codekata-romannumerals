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
        $symbolsInReverse = $this->getSymbolsInReverse();

        $total = 0;

        $previousValue = 0;

        foreach ($symbolsInReverse as $symbol) {
            if ($symbol->lessThan($previousValue)) {
                $total -= $symbol->toInt();
            } else {
                $total += $symbol->toInt();
            }
            $previousValue = $symbol->toInt();
        }
        return $total;
    }

    /**
     * @return RomanSymbol[]
     */
    private function getSymbolsInReverse() : array
    {
        $symbols = array_map(
            function ($symbolString) {
                return new RomanSymbol($symbolString);
            },
            str_split($this->romanValue)
        );

        return array_reverse($symbols);
    }
}
