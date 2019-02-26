<?php

namespace BehatContexts;

use Behat\Behat\Context\Context;
use PHPUnit\Framework\Assert;

class CliContext implements Context
{
    /** @var string */
    private $name;

    /** @var string */
    private $result;

    /** @var string */
    private $romanNumeral;

    /**
     * @Given my name is :name
     */
    public function myNameIs($name)
    {
        $this->name = $name;
    }

    /**
     * @Given my Roman Numeral is :romanNumeral
     */
    public function myRomanNumeralIs($romanNumeral)
    {
        $this->romanNumeral = $romanNumeral;
    }

    /**
     * @When I ask to be said hello to
     */
    public function iAskToBeSaidHelloTo()
    {
        exec('php scripts/run.php hello ' . $this->name . ' 2>/dev/null', $this->result);
    }

    /**
     * @When I convert it
     */
    public function iConvertIt()
    {
        exec('php scripts/run.php roman-numerals ' . $this->romanNumeral . ' 2>/dev/null', $this->result);
    }

    /**
     * @Then I should see/get :expectedOutput
     */
    public function iShouldSee($expectedOutput)
    {
        Assert::assertEquals([$expectedOutput], $this->result);
    }
}
