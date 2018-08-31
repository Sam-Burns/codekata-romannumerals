<?php
namespace spec\RomanNumeralsKata\Greeting;

use RomanNumeralsKata\Greeting\Name;
use RomanNumeralsKata\Greeting\Service as GreetingService;
use RomanNumeralsKata\Greeting\Command as GreetingCommand;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command as SymfonyCommand;

/**
 * @mixin GreetingCommand
 */
class CommandSpec extends ObjectBehavior
{
    function let(GreetingService $greetingService)
    {
        $this->beConstructedWith($greetingService);
    }

    function it_is_a_symfony_command()
    {
        $this->shouldHaveType(SymfonyCommand::class);
    }

    function it_can_output_a_message(GreetingService $greetingService, InputInterface $input, OutputInterface $output)
    {
        //ARRANGE

        // Some shit the Symfony Console component needs to be testable
        $input->hasArgument('command')->willReturn(true);
        $input->getArgument('command')->willReturn('hello');
        $input->bind(Argument::any())->shouldBeCalled();
        $input->isInteractive()->shouldBeCalled();
        $input->validate()->shouldBeCalled();

        // Prep the service
        $greetingService->getGreeting(Argument::type(Name::class))->willReturn('Hello, Sam');

        // Give the command an input
        $input->getArgument('name')->willReturn('Sam');

        // ASSERT
        $output->writeln('Hello, Sam')->shouldBeCalled();

        // ACT
        $this->run($input, $output);
    }
}
