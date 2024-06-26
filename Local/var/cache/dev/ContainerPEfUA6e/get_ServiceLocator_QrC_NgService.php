<?php

namespace ContainerPEfUA6e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QrC_NgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QrC_.Ng' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QrC_.Ng'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'localidad' => ['privates', '.errored..service_locator.QrC_.Ng.App\\Entity\\Localidad', NULL, 'Cannot autowire service ".service_locator.QrC_.Ng": it references class "App\\Entity\\Localidad" but no such service exists.'],
        ], [
            'localidad' => 'App\\Entity\\Localidad',
        ]);
    }
}
