<?php

namespace Container0Obx6H6;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProduitEntrepriseRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ProduitEntrepriseRepository' shared autowired service.
     *
     * @return \App\Repository\ProduitEntrepriseRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ProduitEntrepriseRepository'] = new \App\Repository\ProduitEntrepriseRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
