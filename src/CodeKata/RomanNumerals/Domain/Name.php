<?php
namespace CodeKata\RomanNumerals\Domain;

class Name
{
    /** @var string */
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
