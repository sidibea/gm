<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'bitbag_sylius_cms_plugin.form.type.page_image' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Form/Type/AbstractResourceType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Form/Type/ImageType.php';
include_once $this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Form/Type/PageImageType.php';

return $this->privates['bitbag_sylius_cms_plugin.form.type.page_image'] = new \BitBag\SyliusCmsPlugin\Form\Type\PageImageType('BitBag\\SyliusCmsPlugin\\Entity\\PageImage', array(0 => 'bitbag'));
