<?php
namespace CodeKata\RomanNumerals\Domain;

class HelloService
{
    /**
     * @param Name $name
     * @return string
     */
    public function getGreeting(Name $name)
    {
        return 'Hello, ' . $name;
    }
}
