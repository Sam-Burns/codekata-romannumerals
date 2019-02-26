<?php
namespace RomanNumeralsKata;

use Symfony\Component\Console\Application as SymfonyConsoleApplication;
use Symfony\Component\Console\Command\Command;
use RomanNumeralsKata\Greeting\Command as GreetingCommand;

class Application
{
    /** @var SymfonyConsoleApplication */
    private $symfonyConsoleApplication;

    /** @var Command[] */
    private $commands;

    public function __construct(SymfonyConsoleApplication $symfonyConsoleApplication, GreetingCommand $greetingCommand)
    {
        $this->symfonyConsoleApplication = $symfonyConsoleApplication;
        $this->commands = [$greetingCommand];
    }

    public function run()
    {
        $this->symfonyConsoleApplication->addCommands($this->commands);
        $this->symfonyConsoleApplication->run();
    }
}
