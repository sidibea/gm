<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sylius.sitemap_url_factory' shared service.

include_once $this->targetDirs[3].'/vendor/stefandoorn/sitemap-plugin/src/Factory/SitemapUrlFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/stefandoorn/sitemap-plugin/src/Factory/SitemapUrlFactory.php';

return $this->privates['sylius.sitemap_url_factory'] = new \SitemapPlugin\Factory\SitemapUrlFactory();
