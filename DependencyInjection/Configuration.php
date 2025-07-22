<?php

namespace Oh\GoogleMapFormTypeBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('oh_google_map_form_type');

        $rootNode = $treeBuilder->getRootNode();

        // @phpstan-ignore method.notFound
        $rootNode
            ->children()
                ->scalarNode('api_key')
                ->end()
            ->end();

        return $treeBuilder;
    }
}
