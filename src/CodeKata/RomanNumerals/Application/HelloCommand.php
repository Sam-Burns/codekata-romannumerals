<?php
namespace CodeKata\RomanNumerals\Application;

use CodeKata\RomanNumerals\Domain\HelloService;
use CodeKata\RomanNumerals\Domain\Name;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloCommand extends Command
{
    /** @var HelloService */
    private $helloService;

    public function __construct(HelloService $helloService)
    {
        parent::__construct();
        $this->helloService = $helloService;
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
        $greeting = $this->helloService->getGreeting($name);
        $output->writeln($greeting);
    }
}
