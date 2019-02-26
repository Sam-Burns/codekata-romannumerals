[![Build Status](https://travis-ci.org/Sam-Burns/codekata-romannumerals.svg?branch=master)](https://travis-ci.org/Sam-Burns/codekata-romannumerals)

## Roman Numerals Code Kata

You have been hired as a consultant by Legacy Corp.

The last time Legacy Corp updated their technical practices was in the 2nd century A.D., and they are a little out of date.
Specifically, the lines in their documentation are numbered in Roman numerals, and they need to convert them to Arabic numerals, using a CLI script.
Here is an example of what they want to do:

```
> php scripts/run.php roman-numerals MCMXCVII
> 1997
```

Legacy Corp are very keen that only contemporary, modern, industry standard best practices should be used on the project, because they want to learn how not to be old-fashioned.
Therefore, you will use BDD, TDD and pair programming on this project.

## Testing

The test commands are in the `composer.json` file. They are:
```
> ./vendor/bin/phpspec run
> ./vendor/bin/behat
> ./vendor/bin/phpunit
```
