<?php
namespace CodeKata\Test\RomanNumerals;

use PHPUnit\Framework\TestCase;
use UltraLite\Container\Container;
use RomanNumeralsKata\Application;

class DiConfigTest extends TestCase
{
    public function testRetrievingApplicationObjectGraph()
    {
        // ARRANGE
        $diContainer = new Container();
        $diContainer->configureFromFile(__DIR__ . '/../../../../../config/di/application.php');
        $diContainer->configureFromFile(__DIR__ . '/../../../../../config/di/domain.php');

        // ACT
        $result = $diContainer->get('roman-numerals-kata.application');

        // ASSERT
        $this->assertInstanceOf(Application::class, $result);
    }
}
