<?php

namespace ContainerOn9stgi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FileParser_Chainable_JsonService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.file_parser.chainable.json' shared service.
     *
     * @return \Nelmio\Alice\Parser\Chainable\JsonParser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/ParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Parser/ChainableParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Parser/Chainable/JsonParser.php';

        return $container->privates['nelmio_alice.file_parser.chainable.json'] = new \Nelmio\Alice\Parser\Chainable\JsonParser();
    }
}
