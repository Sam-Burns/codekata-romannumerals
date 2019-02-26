<?php
namespace RomanNumeralsKata\Application;

use RomanNumeralsKata\Domain\NumeralConversion\Number;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class NumeralConversionCommand extends Command
{
    public function configure()
    {
        $this
            ->setName('roman-numerals')
            ->addArgument('roman-string', InputArgument::REQUIRED)
        ;
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $numberAsString = $input->getArgument('roman-string');
        $number = Number::fromRoman($numberAsString);
        $arabic = $number->toArabic();
        $output->writeln($arabic);
    }
}
