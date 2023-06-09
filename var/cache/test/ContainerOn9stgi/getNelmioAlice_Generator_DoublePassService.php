<?php

namespace ContainerOn9stgi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_DoublePassService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.generator.double_pass' shared service.
     *
     * @return \Nelmio\Alice\Generator\DoublePassGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/GeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/DoublePassGenerator.php';

        return $container->privates['nelmio_alice.generator.double_pass'] = new \Nelmio\Alice\Generator\DoublePassGenerator(($container->privates['nelmio_alice.generator.resolver.fixture_set.remove_conflicting_objects'] ?? $container->load('getNelmioAlice_Generator_Resolver_FixtureSet_RemoveConflictingObjectsService')), ($container->privates['nelmio_alice.generator.object_generator.complete'] ?? $container->load('getNelmioAlice_Generator_ObjectGenerator_CompleteService')));
    }
}
