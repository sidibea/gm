<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.controller.product_slug' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/DependencyInjection/ContainerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/DependencyInjection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Controller/Controller.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Controller/ProductSlugController.php';

$this->services['sylius.controller.product_slug'] = $instance = new \Sylius\Bundle\ProductBundle\Controller\ProductSlugController();

$instance->setContainer($this);

return $instance;
