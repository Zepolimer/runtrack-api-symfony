<?php

namespace ContainerOn9stgi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_DataLoaderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'nelmio_alice.data_loader' shared service.
     *
     * @return \Nelmio\Alice\Loader\SimpleDataLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/DataLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Loader/SimpleDataLoader.php';

        return $container->services['nelmio_alice.data_loader'] = new \Nelmio\Alice\Loader\SimpleDataLoader(($container->privates['nelmio_alice.fixture_builder.simple'] ?? $container->load('getNelmioAlice_FixtureBuilder_SimpleService')), ($container->privates['nelmio_alice.generator.double_pass'] ?? $container->load('getNelmioAlice_Generator_DoublePassService')));
    }
}
