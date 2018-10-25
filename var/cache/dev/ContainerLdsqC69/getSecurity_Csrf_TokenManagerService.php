<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'security.csrf.token_manager' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Csrf/TokenGenerator/TokenGeneratorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Csrf/TokenGenerator/UriSafeTokenGenerator.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Csrf/CsrfTokenManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Csrf/CsrfTokenManager.php';

return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), ($this->privates['security.csrf.token_storage'] ?? $this->load('getSecurity_Csrf_TokenStorageService.php')), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
