<?php
namespace CodeKata\RomanNumerals\Domain;

class Name
{
    /** @var string */
    private $nameAsString;

    /**
     * @param string $nameAsString
     */
    public function __construct($nameAsString)
    {
        $this->nameAsString = $nameAsString;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->nameAsString;
    }
}
