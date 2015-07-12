<?php
namespace CodeKata\Spec\CodeKata\RomanNumerals\Application;

use Symfony\Component\Console\Application;
use CodeKata\RomanNumerals\Application\HelloCommand;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ApplicationSpec extends ObjectBehavior
{
    function let(Application $application, HelloCommand $helloCommand)
    {
        $this->beConstructedWith($application, $helloCommand);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('CodeKata\RomanNumerals\Application\Application');
    }
}
