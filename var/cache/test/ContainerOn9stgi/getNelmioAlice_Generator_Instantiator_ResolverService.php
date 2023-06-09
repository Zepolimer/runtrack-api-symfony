<?php

namespace ContainerOn9stgi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_Instantiator_ResolverService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.generator.instantiator.resolver' shared service.
     *
     * @return \Nelmio\Alice\Generator\Instantiator\InstantiatorResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/InstantiatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/ValueResolverAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/InstantiatorResolver.php';

        return $container->privates['nelmio_alice.generator.instantiator.resolver'] = new \Nelmio\Alice\Generator\Instantiator\InstantiatorResolver(($container->privates['nelmio_alice.generator.instantiator.registry'] ?? $container->load('getNelmioAlice_Generator_Instantiator_RegistryService')));
    }
}
