<?php

use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Behat\Context\Context;

class CliContext implements Context, SnippetAcceptingContext
{
    /** @var string */
    private $name;

    /** @var string */
    private $result;

    /**
     * @Given My name is :name
     */
    public function myNameIs($name)
    {
        $this->name = $name;
    }

    /**
     * @When I ask to be said hello to
     */
    public function iAskToBeSaidHelloTo()
    {
        exec('php scripts/run.php hello ' . $this->name, $this->result);
    }

    /**
     * @Then I should see :expectedOutput
     */
    public function iShouldSee($expectedOutput)
    {
        PHPUnit_Framework_Assert::assertEquals($expectedOutput, [$this->result]);
    }
}
