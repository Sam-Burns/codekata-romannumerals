<?php
namespace RomanNumeralsKata\Greeting;

class Service
{
    public function getGreeting(Name $name): string
    {
        return 'Hello, ' . $name;
    }
}
