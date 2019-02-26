<?php
namespace RomanNumeralsKata\Domain\Greeting;

class Name
{
    private $nameAsString;

    public function __construct(string $nameAsString)
    {
        $this->nameAsString = $nameAsString;
    }

    public function __toString(): string
    {
        return $this->nameAsString;
    }
}
