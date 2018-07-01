<?php

namespace Symfony\Bundle\CustomBundle\DependencyInjection;

use Symfony\Bundle\CustomBundle\Component\CustomService;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;

/**
 * Class CustomExtension
 * @package Symfony\Bundle\CustomBundle\DependencyInjection
 */
class CustomExtension extends ConfigurableExtension
{
    /**
     * @param array $mergedConfigs
     * @param ContainerBuilder $container
     * @throws \Exception
     */
    public function loadInternal(array $mergedConfigs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yaml');

        $definition = $container->getDefinition(CustomService::class);
        $definition->replaceArgument('$url', $mergedConfigs['url']);
    }
}