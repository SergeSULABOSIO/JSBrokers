<?php

namespace ContainerM0QScek;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9DIBXgXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9DIBXgX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9DIBXgX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'clientRepository' => ['privates', 'App\\Repository\\ClientRepository', 'getClientRepositoryService', true],
            'contactRepository' => ['privates', 'App\\Repository\\ContactRepository', 'getContactRepositoryService', true],
            'paginatorInterface' => ['privates', '.errored.f_idLoG', NULL, 'Cannot determine controller argument for "App\\Controller\\ContactController::list()": the $paginatorInterface argument is type-hinted with the non-existent class or interface: "Knp\\Component\\Pager\\PaginatorInterface".'],
        ], [
            'clientRepository' => 'App\\Repository\\ClientRepository',
            'contactRepository' => 'App\\Repository\\ContactRepository',
            'paginatorInterface' => '?',
        ]);
    }
}