<?php

namespace ContainerPUkLw7r;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVehiculeTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\VehiculeType' shared autowired service.
     *
     * @return \App\Form\VehiculeType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/VehiculeType.php';

        return $container->privates['App\\Form\\VehiculeType'] = new \App\Form\VehiculeType();
    }
}
