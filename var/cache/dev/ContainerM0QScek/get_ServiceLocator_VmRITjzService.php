<?php

namespace ContainerM0QScek;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VmRITjzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vmRITjz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vmRITjz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paginatorInterface' => ['privates', '.errored.mgpQLgg', NULL, 'Cannot determine controller argument for "App\\Controller\\PaiementTaxeController::list()": the $paginatorInterface argument is type-hinted with the non-existent class or interface: "Knp\\Component\\Pager\\PaginatorInterface".'],
            'paiementTaxeRepository' => ['privates', 'App\\Repository\\PaiementTaxeRepository', 'getPaiementTaxeRepositoryService', true],
            'policeRepository' => ['privates', 'App\\Repository\\PoliceRepository', 'getPoliceRepositoryService', true],
            'taxeRepository' => ['privates', 'App\\Repository\\TaxeRepository', 'getTaxeRepositoryService', true],
        ], [
            'paginatorInterface' => '?',
            'paiementTaxeRepository' => 'App\\Repository\\PaiementTaxeRepository',
            'policeRepository' => 'App\\Repository\\PoliceRepository',
            'taxeRepository' => 'App\\Repository\\TaxeRepository',
        ]);
    }
}