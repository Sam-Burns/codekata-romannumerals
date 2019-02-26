<?php
namespace CodeKata\Test\RomanNumerals;

use DI\ContainerBuilder;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application;

class DiConfigTest extends TestCase
{
    private const CONFIG_LOCATION = __DIR__ . '/../../../../../config/services.php';

    public function testRetrievingApplicationObjectGraph()
    {
        // ARRANGE
        $container = (new ContainerBuilder())->addDefinitions(static::CONFIG_LOCATION)->build();

        // ACT
        $application = $container->get('application');

        // ASSERT
        $this->assertInstanceOf(Application::class, $application);
    }
}
