<?php
namespace CodeKata\RomanNumerals\Domain;

class HelloService
{
    public function getGreeting(Name $name): string
    {
        return 'Hello, ' . $name;
    }
}
