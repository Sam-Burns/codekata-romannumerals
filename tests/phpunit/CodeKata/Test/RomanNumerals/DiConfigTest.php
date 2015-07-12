<?php
namespace CodeKata\Test\RomanNumerals;

use PHPUnit_Framework_TestCase as TestCase;
use Psr\Container\ContainerInterface;
use SamBurns\Psr11Symfony\ServiceContainer;

class DiConfigTest extends TestCase
{
    /** @var ContainerInterface */
    private $diContainer;

    public function setUp()
    {
        $this->diContainer = new ServiceContainer();
        $this->diContainer->addConfigFilesFromFolder(APPLICATION_ROOT_DIR . '/config/di/');
    }

    public function tearDown()
    {
        $this->diContainer->reset();
    }

    public function testRetrievingApplicationObjectGraph()
    {
        $result = $this->diContainer->get('codekata.application.application');
        $this->assertInstanceOf('\CodeKata\RomanNumerals\Application\Application', $result);
    }
}
