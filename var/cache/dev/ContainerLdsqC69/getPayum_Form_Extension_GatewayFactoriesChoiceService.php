<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'payum.form.extension.gateway_factories_choice' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeExtensionInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractTypeExtension.php';
include_once $this->targetDirs[3].'/vendor/payum/payum-bundle/Form/Extension/GatewayFactoriesChoiceTypeExtension.php';

return $this->services['payum.form.extension.gateway_factories_choice'] = new \Payum\Bundle\PayumBundle\Form\Extension\GatewayFactoriesChoiceTypeExtension(($this->services['payum'] ?? $this->load('getPayumService.php')));
