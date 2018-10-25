<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.shipping_method_choice' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Form/Type/ShippingMethodChoiceType.php';

return $this->services['sylius.form.type.shipping_method_choice'] = new \Sylius\Bundle\ShippingBundle\Form\Type\ShippingMethodChoiceType(($this->services['sylius.shipping_methods_resolver'] ?? $this->getSylius_ShippingMethodsResolverService()), ($this->services['sylius.registry.shipping_calculator'] ?? $this->load('getSylius_Registry_ShippingCalculatorService.php')), ($this->services['sylius.repository.shipping_method'] ?? $this->getSylius_Repository_ShippingMethodService()));
