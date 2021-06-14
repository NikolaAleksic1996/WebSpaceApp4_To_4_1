<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Form\UserSelectTextType' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/src/Form/UserSelectTextType.php';

return $this->privates['App\Form\UserSelectTextType'] = new \App\Form\UserSelectTextType(($this->privates['App\Repository\UserRepository'] ?? $this->load('getUserRepositoryService.php')), ($this->services['router'] ?? $this->getRouterService()));