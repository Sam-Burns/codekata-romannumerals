<?php

namespace BehatContexts;

use Behat\Behat\Context\Context;
use RomanNumeralsKata\Domain\Greeting\Name;
use RomanNumeralsKata\Domain\Greeting\Greeter as GreetingService;
use PHPUnit\Framework\Assert;
use RomanNumeralsKata\Domain\NumeralConversion\Number;

class ServiceLevelContext implements Context
{
    /** @var Name */
    private $name;

    /** @var Number */
    private $number;

    private $result;

    /**
     * @Given my name is :name
     */
    public function myNameIs(string $name)
    {
        $this->name = new Name($name);
    }

    /**
     * @When I ask to be said hello to
     */
    public function iAskToBeSaidHelloTo()
    {
        $helloService = new GreetingService();
        $this->result = $helloService->getGreeting($this->name);
    }

    /**
     * @Then I should see/get :expectedOutput
     */
    public function iShouldSee(string $expectedOutput)
    {
        Assert::assertEquals($expectedOutput, $this->result);
    }

    /**
     * @Given my Roman Numeral is :romanNumerals
     */
    public function myRomanNumeralIs($romanNumerals)
    {
        $this->number = Number::fromRoman($romanNumerals);
    }

    /**
     * @When I convert it
     */
    public function iConvertIt()
    {
        $this->result = $this->number->toArabic();
    }
}
