<?php
namespace RomanNumeralsKata\Domain\Greeting;

class Greeter
{
    public function getGreeting(Name $name): string
    {
        return 'Hello, ' . $name;
    }
}
