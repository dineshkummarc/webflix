<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'liip_imagine.filter.post_processor.jpegoptim' shared service.

include_once $this->targetDirs[3].'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\PostProcessor\\PostProcessorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\PostProcessor\\ConfigurablePostProcessorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\PostProcessor\\JpegOptimPostProcessor.php';

return $this->services['liip_imagine.filter.post_processor.jpegoptim'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\JpegOptimPostProcessor('/usr/bin/jpegoptim', true, NULL, true);
