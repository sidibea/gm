<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.user_request_password_reset' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Form/Type/AbstractResourceType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Form/Type/UserRequestPasswordResetType.php';

return $this->services['sylius.form.type.user_request_password_reset'] = new \Sylius\Bundle\UserBundle\Form\Type\UserRequestPasswordResetType('Sylius\\Bundle\\UserBundle\\Form\\Model\\PasswordResetRequest', $this->parameters['sylius.form.type.user_request_password_reset.validation_groups']);
