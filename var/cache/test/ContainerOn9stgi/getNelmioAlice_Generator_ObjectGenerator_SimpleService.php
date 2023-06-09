<?php

namespace ContainerOn9stgi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_ObjectGenerator_SimpleService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.generator.object_generator.simple' shared service.
     *
     * @return \Nelmio\Alice\Generator\ObjectGenerator\SimpleObjectGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/ObjectGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/ObjectGenerator/SimpleObjectGenerator.php';

        return $container->privates['nelmio_alice.generator.object_generator.simple'] = new \Nelmio\Alice\Generator\ObjectGenerator\SimpleObjectGenerator(($container->privates['nelmio_alice.generator.resolver.value.registry'] ?? $container->load('getNelmioAlice_Generator_Resolver_Value_RegistryService')), ($container->privates['nelmio_alice.generator.instantiator.existing_instance'] ?? $container->load('getNelmioAlice_Generator_Instantiator_ExistingInstanceService')), ($container->privates['nelmio_alice.generator.hydrator.simple'] ?? $container->load('getNelmioAlice_Generator_Hydrator_SimpleService')), ($container->privates['nelmio_alice.generator.caller.simple'] ?? $container->load('getNelmioAlice_Generator_Caller_SimpleService')));
    }
}
