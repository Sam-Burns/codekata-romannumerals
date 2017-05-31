<?php

use Behat\Behat\Context\Context;
use RomanNumeralsKata\Greeting\Name;
use RomanNumeralsKata\Greeting\Service as GreetingService;
use PHPUnit\Framework\Assert;

class ServiceLevelContext implements Context
{
    /** @var Name */
    private $name;

    /** @var string */
    private $result;

    /**
     * @Given my name is :name
     */
    public function myNameIs($name)
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
     * @Then I should see :expectedOutput
     */
    public function iShouldSee($expectedOutput)
    {
        Assert::assertEquals($expectedOutput, $this->result);
    }
}
