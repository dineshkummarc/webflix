<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'liip_imagine.binary.loader.prototype.stream' shared service.

include_once $this->targetDirs[3].'\\vendor\\liip\\imagine-bundle\\Binary\\Loader\\LoaderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\liip\\imagine-bundle\\Binary\\Loader\\StreamLoader.php';

return $this->services['liip_imagine.binary.loader.prototype.stream'] = new \Liip\ImagineBundle\Binary\Loader\StreamLoader('', '');
