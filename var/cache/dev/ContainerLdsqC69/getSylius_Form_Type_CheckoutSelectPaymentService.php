<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.checkout_select_payment' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Form/Type/AbstractResourceType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Form/Type/Checkout/SelectPaymentType.php';

return $this->services['sylius.form.type.checkout_select_payment'] = new \Sylius\Bundle\CoreBundle\Form\Type\Checkout\SelectPaymentType('Sylius\\Component\\Core\\Model\\Order', $this->parameters['sylius.form.type.checkout_select_payment.validation_groups']);
