<?php

namespace ContainerVDjjxqF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4XzjmVTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4XzjmVT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4XzjmVT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'candidat' => ['privates', '.errored..service_locator.4XzjmVT.App\\Entity\\Candidat', NULL, 'Cannot autowire service ".service_locator.4XzjmVT": it references class "App\\Entity\\Candidat" but no such service exists.'],
        ], [
            'candidat' => 'App\\Entity\\Candidat',
        ]);
    }
}
