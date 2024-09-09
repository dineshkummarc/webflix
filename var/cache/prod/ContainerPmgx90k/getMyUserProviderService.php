<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'my_user_provider' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\User\\UserProviderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle\\Connect\\AccountConnectorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle\\Security\\Core\\User\\OAuthAwareUserProviderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle\\Security\\Core\\User\\FOSUBUserProvider.php';
include_once $this->targetDirs[3].'\\src\\UserBundle\\Security\\Core\\User\\FOSUBUserProvider.php';

return $this->services['my_user_provider'] = new \UserBundle\Security\Core\User\FOSUBUserProvider(${($_ = isset($this->services['fos_user.user_manager']) ? $this->services['fos_user.user_manager'] : $this->load('getFosUser_UserManagerService.php')) && false ?: '_'}, ['facebook' => 'username', 'google' => 'username']);
