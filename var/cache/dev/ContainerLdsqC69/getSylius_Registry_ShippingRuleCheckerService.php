<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.registry.shipping_rule_checker' shared service.

return $this->services['sylius.registry.shipping_rule_checker'] = new \Sylius\Component\Registry\ServiceRegistry('Sylius\\Component\\Shipping\\Checker\\RuleCheckerInterface', 'shipping rule checker');