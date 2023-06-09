<?php

namespace ContainerM0QScek;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_F_RqAcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.f.rqAc_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.f.rqAc_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'monnaieRepository' => ['privates', 'App\\Repository\\MonnaieRepository', 'getMonnaieRepositoryService', true],
            'partenaireRepository' => ['privates', 'App\\Repository\\PartenaireRepository', 'getPartenaireRepositoryService', true],
            'policeRepository' => ['privates', 'App\\Repository\\PoliceRepository', 'getPoliceRepositoryService', true],
        ], [
            'doctrine' => '?',
            'monnaieRepository' => 'App\\Repository\\MonnaieRepository',
            'partenaireRepository' => 'App\\Repository\\PartenaireRepository',
            'policeRepository' => 'App\\Repository\\PoliceRepository',
        ]);
    }
}
