<?php

namespace Frcho\SimplePaginatorBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\Config\FileLocator;

/**
 * FrchoSimplePaginator Dependency Injection Extension
 *
 * Class that defines the Dependency Injection Extension to expose the bundle's semantic configuration
 * @package FrchoSimplePaginatorBundle
 * @subpackage DependencyInjection
 * @author Francisco Javier Aceituno <javier.aceituno@ideup.com>
 * @author Moises Maciá <moises.macia@ideup.com>
 * @author Gustavo Piltcher
 */
class FrchoSimplePaginatorExtension extends Extension {

    public function load(array $configs, ContainerBuilder $container) {
        // registering services
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('paginator.yml');
        $loader->load('twig.yml');
        $loader->load('templating.yml');
    }

}
