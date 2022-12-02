<?php

namespace ContainerBUtsGRk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFmElfinder_LoaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'fm_elfinder.loader' shared autowired service.
     *
     * @return \FM\ElfinderBundle\Loader\ElFinderLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/helios-ag/fm-elfinder-bundle/src/Loader/ElFinderLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/helios-ag/fm-elfinder-bundle/src/Configuration/ElFinderConfigurationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/helios-ag/fm-elfinder-bundle/src/Configuration/ElFinderConfigurationReader.php';

        return $container->services['fm_elfinder.loader'] = new \FM\ElfinderBundle\Loader\ElFinderLoader(new \FM\ElfinderBundle\Configuration\ElFinderConfigurationReader($container->parameters['fm_elfinder'], ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), $container));
    }
}
