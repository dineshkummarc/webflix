<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'liip_imagine.extension_guesser' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesserInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesser.php';

return $this->services['liip_imagine.extension_guesser'] = \Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesser::getInstance();
