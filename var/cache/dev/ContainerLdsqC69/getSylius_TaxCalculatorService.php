<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.tax_calculator' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Taxation/Calculator/CalculatorInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Taxation/Calculator/DelegatingCalculator.php';

return $this->services['sylius.tax_calculator'] = new \Sylius\Component\Taxation\Calculator\DelegatingCalculator(($this->services['sylius.registry.tax_calculator'] ?? $this->load('getSylius_Registry_TaxCalculatorService.php')));
