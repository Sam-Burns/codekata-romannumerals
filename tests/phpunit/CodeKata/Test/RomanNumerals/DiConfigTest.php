<?php
namespace CodeKata\Test\RomanNumerals;

use PHPUnit_Framework_TestCase as TestCase;
use UltraLite\Container\Container;
use Interop\Container\ContainerInterface;

class DiConfigTest extends TestCase
{
    /** @var ContainerInterface */
    private $diContainer;

    public function testRetrievingApplicationObjectGraph()
    {
        // ARRANGE
        $this->diContainer = new Container();
        $this->diContainer->setServiceFactories(require APPLICATION_ROOT_DIR . '/config/di/application.php');
        $this->diContainer->setServiceFactories(require APPLICATION_ROOT_DIR . '/config/di/domain.php');

        // ACT
        $result = $this->diContainer->get('codekata.application.application');

        // ASSERT
        $this->assertInstanceOf('\CodeKata\RomanNumerals\Application\Application', $result);
    }
}
