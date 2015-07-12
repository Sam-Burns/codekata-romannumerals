<?php
namespace CodeKata\Spec\CodeKata\RomanNumerals\Application;

use CodeKata\RomanNumerals\Domain\HelloService;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloCommandSpec extends ObjectBehavior
{
    function let(HelloService $helloService)
    {
        $this->beConstructedWith($helloService);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('\CodeKata\RomanNumerals\Application\HelloCommand');
    }

    function it_is_a_symfony_command()
    {
        $this->shouldHaveType('\Symfony\Component\Console\Command\Command');
    }

    function it_can_output_a_message(HelloService $helloService, InputInterface $input, OutputInterface $output)
    {
        //ARRANGE

        // Some shit the Symfony Console component needs to be testable
        $input->bind(Argument::any())->shouldBeCalled();
        $input->isInteractive(Argument::any())->shouldBeCalled();
        $input->validate(Argument::any())->shouldBeCalled();

        // Prep the service
        $helloService->getGreeting(Argument::type('\CodeKata\RomanNumerals\Domain\Name'))->willReturn('Hello, Sam');

        // Give the command an input
        $input->getArgument('name')->willReturn('Sam');

        // ASSERT
        $output->writeln('Hello, Sam')->shouldBeCalled();

        // ACT
        $this->run($input, $output);
    }
}
