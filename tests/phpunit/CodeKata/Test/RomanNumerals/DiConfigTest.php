<?php
namespace CodeKata\Test\RomanNumerals;

use PHPUnit_Framework_TestCase as TestCase;
use UltraLite\Container\Container;
use Interop\Container\ContainerInterface;

class DiConfigTest extends TestCase
{
    public function testRetrievingApplicationObjectGraph()
    {
        // ARRANGE
        $diContainer = new Container();
        $diContainer->configureFromFile(APPLICATION_ROOT_DIR . '/config/di/application.php');
        $diContainer->configureFromFile(APPLICATION_ROOT_DIR . '/config/di/domain.php');

        // ACT
        $result = $diContainer->get('codekata.application.application');

        // ASSERT
        $this->assertInstanceOf('\CodeKata\RomanNumerals\Application\Application', $result);
    }
}
