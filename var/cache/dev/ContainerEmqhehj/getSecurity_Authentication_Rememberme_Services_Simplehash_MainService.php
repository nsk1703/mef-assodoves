<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.rememberme.services.simplehash.main' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\RememberMe\\RememberMeServicesInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\Logout\\LogoutHandlerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\RememberMe\\AbstractRememberMeServices.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices.php';

return $this->services['security.authentication.rememberme.services.simplehash.main'] = new \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices([0 => ${($_ = isset($this->services['fos_user.user_provider.username_email']) ? $this->services['fos_user.user_provider.username_email'] : $this->load('getFosUser_UserProvider_UsernameEmailService.php')) && false ?: '_'}], 'ECSh52MGF3Zqm9R7r46VU8WtJfDvLizXpxQ', 'main', ['lifetime' => 31536000, 'always_remember_me' => true, 'domain' => NULL, 'secure' => true, 'name' => 'REMEMBERME', 'path' => '/', 'httponly' => true, 'samesite' => NULL, 'remember_me_parameter' => '_remember_me'], ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->load('getMonolog_Logger_SecurityService.php')) && false ?: '_'});