<?php

namespace Container8wDpI73;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_T7oklxVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.t7oklxV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.t7oklxV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ofertaRepository' => ['privates', 'App\\Repository\\OfertaRepository', 'getOfertaRepositoryService', true],
        ], [
            'ofertaRepository' => 'App\\Repository\\OfertaRepository',
        ]);
    }
}
