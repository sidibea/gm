<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'bitbag_sylius_cms_plugin.repository.section' shared service.

include_once $this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Repository/SectionRepositoryInterface.php';
include_once $this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Repository/SectionRepository.php';

$a = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService());

return $this->services['bitbag_sylius_cms_plugin.repository.section'] = new \BitBag\SyliusCmsPlugin\Repository\SectionRepository($a, $a->getClassMetadata('BitBag\\SyliusCmsPlugin\\Entity\\Section'));