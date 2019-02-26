<?php

namespace BehatContexts;

use Behat\Behat\Context\Context;
use RomanNumeralsKata\Domain\Greeting\Name;
use RomanNumeralsKata\Domain\Greeting\Greeter as GreetingService;
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
     * @Then I should see :expectedOutput
     */
    public function iShouldSee(string $expectedOutput)
    {
        Assert::assertEquals($expectedOutput, $this->result);
    }
}
