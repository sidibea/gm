<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.controller.sitemap' shared service.

include_once $this->targetDirs[3].'/vendor/stefandoorn/sitemap-plugin/src/Renderer/RendererAdapterInterface.php';
include_once $this->targetDirs[3].'/vendor/stefandoorn/sitemap-plugin/src/Renderer/TwigAdapter.php';
include_once $this->targetDirs[3].'/vendor/stefandoorn/sitemap-plugin/src/Renderer/SitemapRendererInterface.php';
include_once $this->targetDirs[3].'/vendor/stefandoorn/sitemap-plugin/src/Renderer/SitemapRenderer.php';
include_once $this->targetDirs[3].'/vendor/stefandoorn/sitemap-plugin/src/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/vendor/stefandoorn/sitemap-plugin/src/Controller/SitemapController.php';

return $this->services['sylius.controller.sitemap'] = new \SitemapPlugin\Controller\SitemapController(new \SitemapPlugin\Renderer\SitemapRenderer(new \SitemapPlugin\Renderer\TwigAdapter(($this->services['templating'] ?? $this->getTemplatingService()), '@SitemapPlugin/show.xml.twig', true, true)), ($this->privates['sylius.sitemap_builder'] ?? $this->load('getSylius_SitemapBuilderService.php')));
