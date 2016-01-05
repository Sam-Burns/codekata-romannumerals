<?php
namespace CodeKata\RomanNumerals\Application;

use Symfony\Component\Console\Application as SymfonyConsoleApplication;
use Symfony\Component\Console\Command\Command as SymfonyConsoleCommand;

class Application
{
    /** @var SymfonyConsoleApplication */
    private $symfonyConsoleApplication;

    /** @var SymfonyConsoleCommand[] */
    private $commands;

    public function __construct(SymfonyConsoleApplication $symfonyConsoleApplication, HelloCommand $helloCommand)
    {
        $this->symfonyConsoleApplication = $symfonyConsoleApplication;
        $this->commands = [$helloCommand];
    }

    public function run()
    {
        $this->symfonyConsoleApplication->addCommands($this->commands);
        $this->symfonyConsoleApplication->run();
    }
}
