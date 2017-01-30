<?php
namespace RomanNumeralsKata\Greeting;

use Symfony\Component\Console\Command\Command as SymfonyConsoleCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Command extends SymfonyConsoleCommand
{
    /** @var Service */
    private $greetingService;

    public function __construct(Service $greetingService)
    {
        parent::__construct();
        $this->greetingService = $greetingService;
    }

    public function configure()
    {
        $this
            ->setName('hello')
            ->addArgument('name', InputArgument::REQUIRED)
        ;
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $nameString = $input->getArgument('name');
        $name = new Name($nameString);
        $greeting = $this->greetingService->getGreeting($name);
        $output->writeln($greeting);
    }
}
