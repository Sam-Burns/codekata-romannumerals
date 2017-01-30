<?php
namespace RomanNumeralsKata\Spec\RomanNumeralsKata;

use RomanNumeralsKata\Application;
use Symfony\Component\Console\Application as SymfonyApplication;
use RomanNumeralsKata\Greeting\Command as GreetingCommand;
use PhpSpec\ObjectBehavior;

/**
 * @mixin Application
 */
class ApplicationSpec extends ObjectBehavior
{
    function let(SymfonyApplication $application, GreetingCommand $helloCommand)
    {
        $this->beConstructedWith($application, $helloCommand);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Application::class);
    }
}
