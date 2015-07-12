<?php

use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Behat\Context\Context;
use CodeKata\RomanNumerals\Domain\HelloService;
use CodeKata\RomanNumerals\Domain\Name;

class ServiceLevelContext implements Context, SnippetAcceptingContext
{
    /** @var Name */
    private $name;

    /** @var HelloService */
    private $helloService;

    /** @var string */
    private $result;

    public function __construct()
    {
        $this->helloService = new HelloService();
    }

    /**
     * @Given My name is :name
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
        $this->result = $this->helloService->getGreeting($this->name);
    }

    /**
     * @Then I should see :expectedOutput
     */
    public function iShouldSee($expectedOutput)
    {
        PHPUnit_Framework_Assert::assertEquals($expectedOutput, $this->result);
    }
}
