<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.context_listener.1' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\Firewall\\ListenerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\Firewall\\ContextListener.php';

$this->services['security.context_listener.1'] = $instance = new \Symfony\Component\Security\Http\Firewall\ContextListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['fos_user.user_provider.username_email']) ? $this->services['fos_user.user_provider.username_email'] : $this->load('getFosUser_UserProvider_UsernameEmailService.php')) && false ?: '_'};
}, 1), 'main', ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->load('getMonolog_Logger_SecurityService.php')) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : ($this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken'))) && false ?: '_'});

$instance->setLogoutOnUserChange(false);
$instance->setRememberMeServices(${($_ = isset($this->services['security.authentication.rememberme.services.simplehash.main']) ? $this->services['security.authentication.rememberme.services.simplehash.main'] : $this->load('getSecurity_Authentication_Rememberme_Services_Simplehash_MainService.php')) && false ?: '_'});

return $instance;
