<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.Mc5zpHk' shared service.

return $this->privates['.service_locator.Mc5zpHk'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['repository' => function (): \App\Repository\ArticleRepository {
    return ($this->privates['App\Repository\ArticleRepository'] ?? $this->load('getArticleRepositoryService.php'));
}]);
