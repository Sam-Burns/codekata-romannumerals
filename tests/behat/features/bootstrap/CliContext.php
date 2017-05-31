<?php

use Behat\Behat\Context\Context;
use PHPUnit\Framework\Assert;

class CliContext implements Context
{
    /** @var string */
    private $name;

    /** @var string */
    private $result;

    /**
     * @Given my name is :name
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
        exec('php scripts/run.php hello ' . $this->name . ' 2>/dev/null', $this->result);
    }

    /**
     * @Then I should see :expectedOutput
     */
    public function iShouldSee($expectedOutput)
    {
        Assert::assertEquals([$expectedOutput], $this->result);
    }
}
