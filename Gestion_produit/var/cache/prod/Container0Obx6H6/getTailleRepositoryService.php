<?php

namespace Container0Obx6H6;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTailleRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\TailleRepository' shared autowired service.
     *
     * @return \App\Repository\TailleRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\TailleRepository'] = new \App\Repository\TailleRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
