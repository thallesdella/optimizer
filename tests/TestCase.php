<?php

namespace ThallesDella\TdkModules\Test;

use Illuminate\Foundation\Application;
use ReflectionClass;
use Orchestra\Testbench\TestCase as Orchestra;
use ReflectionException;
use ThallesDella\Optimizer\Providers\OptimizerServiceProvider;

/**
 * Tdk Modules | Class TestCase [ TEST ]
 *
 * @package  ThallesDella\TdkModules\Test
 * @author   Thalles D. koester <thallesdella@gmail.com>
 */
abstract class TestCase extends Orchestra
{
    /**
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
    }
    
    /**
     * Call protected/private method of a class.
     *
     * @param object $object     Instantiated object that we will run method on.
     * @param string $methodName Method name to call
     * @param array  $parameters Array of parameters to pass into method.
     *
     * @return mixed Method return.
     * @throws ReflectionException
     */
    public function invokeMethod(object $object, string $methodName, array $parameters = [])
    {
        $reflection = new ReflectionClass(get_class($object));
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(true);
        
        return $method->invokeArgs($object, $parameters);
    }
    
    /**
     * add the package provider
     *
     * @param Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app): array
    {
        return [OptimizerServiceProvider::class];
    }
    
    
    /**
     * Define environment setup.
     *
     * @param Application $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app): void
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('optimizer.name', 'testbench');
        $app['config']->set('optimizer.desc.', '');
        $app['config']->set('optimizer.image.', '');
    }
}