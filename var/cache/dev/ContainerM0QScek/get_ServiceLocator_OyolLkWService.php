<?php

namespace ContainerM0QScek;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OyolLkWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oyolLkW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oyolLkW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'assureurRepository' => ['privates', 'App\\Repository\\AssureurRepository', 'getAssureurRepositoryService', true],
            'automobileRepository' => ['privates', 'App\\Repository\\AutomobileRepository', 'getAutomobileRepositoryService', true],
            'clientRepository' => ['privates', 'App\\Repository\\ClientRepository', 'getClientRepositoryService', true],
            'contactRepository' => ['privates', 'App\\Repository\\ContactRepository', 'getContactRepositoryService', true],
            'entrepriseRepository' => ['privates', 'App\\Repository\\EntrepriseRepository', 'getEntrepriseRepositoryService', true],
            'monnaieRepository' => ['privates', 'App\\Repository\\MonnaieRepository', 'getMonnaieRepositoryService', true],
            'outstandingCommissionRepository' => ['privates', 'App\\Repository\\OutstandingCommissionRepository', 'getOutstandingCommissionRepositoryService', true],
            'paiementCommissionRepository' => ['privates', 'App\\Repository\\PaiementCommissionRepository', 'getPaiementCommissionRepositoryService', true],
            'paiementPartenaireRepository' => ['privates', 'App\\Repository\\PaiementPartenaireRepository', 'getPaiementPartenaireRepositoryService', true],
            'paiementTaxeRepository' => ['privates', 'App\\Repository\\PaiementTaxeRepository', 'getPaiementTaxeRepositoryService', true],
            'partenaireRepository' => ['privates', 'App\\Repository\\PartenaireRepository', 'getPartenaireRepositoryService', true],
            'policeRepository' => ['privates', 'App\\Repository\\PoliceRepository', 'getPoliceRepositoryService', true],
            'produitRepository' => ['privates', 'App\\Repository\\ProduitRepository', 'getProduitRepositoryService', true],
            'taxeRepository' => ['privates', 'App\\Repository\\TaxeRepository', 'getTaxeRepositoryService', true],
        ], [
            'assureurRepository' => 'App\\Repository\\AssureurRepository',
            'automobileRepository' => 'App\\Repository\\AutomobileRepository',
            'clientRepository' => 'App\\Repository\\ClientRepository',
            'contactRepository' => 'App\\Repository\\ContactRepository',
            'entrepriseRepository' => 'App\\Repository\\EntrepriseRepository',
            'monnaieRepository' => 'App\\Repository\\MonnaieRepository',
            'outstandingCommissionRepository' => 'App\\Repository\\OutstandingCommissionRepository',
            'paiementCommissionRepository' => 'App\\Repository\\PaiementCommissionRepository',
            'paiementPartenaireRepository' => 'App\\Repository\\PaiementPartenaireRepository',
            'paiementTaxeRepository' => 'App\\Repository\\PaiementTaxeRepository',
            'partenaireRepository' => 'App\\Repository\\PartenaireRepository',
            'policeRepository' => 'App\\Repository\\PoliceRepository',
            'produitRepository' => 'App\\Repository\\ProduitRepository',
            'taxeRepository' => 'App\\Repository\\TaxeRepository',
        ]);
    }
}