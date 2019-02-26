<?php
namespace RomanNumeralsKata\Domain\NumeralConversion;

class RomanSymbol
{
    private const SYMBOLS = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];

    /** @var string */
    private $romanSymbolValue;

    public function __construct(string $romanSymbolValue)
    {
        $this->romanSymbolValue = $romanSymbolValue;
    }

    public function toInt() : int
    {
        return static::SYMBOLS[$this->romanSymbolValue];
    }

    public function lessThan(RomanSymbol $another) : bool
    {
        return $this->toInt() < $another->toInt();
    }
}
