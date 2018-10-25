<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.generator.product_variant' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Product/Generator/ProductVariantGeneratorInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Product/Generator/ProductVariantGenerator.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Product/Checker/ProductVariantsParityCheckerInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Product/Checker/ProductVariantsParityChecker.php';

return $this->services['sylius.generator.product_variant'] = new \Sylius\Component\Product\Generator\ProductVariantGenerator(($this->services['sylius.factory.product_variant'] ?? $this->load('getSylius_Factory_ProductVariantService.php')), ($this->services['sylius.checker.product_variants_parity'] ?? $this->services['sylius.checker.product_variants_parity'] = new \Sylius\Component\Product\Checker\ProductVariantsParityChecker()));