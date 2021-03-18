<?php

namespace Container8wDpI73;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZumzI2XService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZumzI2X' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZumzI2X'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'empresaRepository' => ['privates', 'App\\Repository\\EmpresaRepository', 'getEmpresaRepositoryService', true],
        ], [
            'empresaRepository' => 'App\\Repository\\EmpresaRepository',
        ]);
    }
}
