<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(['App\\Controller\\AccountController::index' => function () {
    return ($this->privates['.service_locator.dOJ.0GD'] ?? $this->load('get_ServiceLocator_DOJ_0GDService.php'));
}, 'App\\Controller\\AdminUtilityController::getUserApi' => function () {
    return ($this->privates['.service_locator.pDN53fn'] ?? $this->load('get_ServiceLocator_PDN53fnService.php'));
}, 'App\\Controller\\ArticleAdminController::edit' => function () {
    return ($this->privates['.service_locator.fQ2_UIE'] ?? $this->load('get_ServiceLocator_FQ2UIEService.php'));
}, 'App\\Controller\\ArticleAdminController::list' => function () {
    return ($this->privates['.service_locator.FgWuuJK'] ?? $this->load('get_ServiceLocator_FgWuuJKService.php'));
}, 'App\\Controller\\ArticleAdminController::new' => function () {
    return ($this->privates['.service_locator.v_q6gfB'] ?? $this->load('get_ServiceLocator_VQ6gfBService.php'));
}, 'App\\Controller\\ArticleController::homepage' => function () {
    return ($this->privates['.service_locator.Mc5zpHk'] ?? $this->load('get_ServiceLocator_Mc5zpHkService.php'));
}, 'App\\Controller\\ArticleController::show' => function () {
    return ($this->privates['.service_locator.YwRB2Jv'] ?? $this->load('get_ServiceLocator_YwRB2JvService.php'));
}, 'App\\Controller\\ArticleController::toggleArticleHeart' => function () {
    return ($this->privates['.service_locator.N4f9btw'] ?? $this->load('get_ServiceLocator_N4f9btwService.php'));
}, 'App\\Controller\\CommentAdminController::index' => function () {
    return ($this->privates['.service_locator.aVICUrH'] ?? $this->load('get_ServiceLocator_AVICUrHService.php'));
}, 'App\\Controller\\SecurityController::login' => function () {
    return ($this->privates['.service_locator.ypl2DZZ'] ?? $this->load('get_ServiceLocator_Ypl2DZZService.php'));
}, 'App\\Controller\\SecurityController::register' => function () {
    return ($this->privates['.service_locator.YouA0Lm'] ?? $this->load('get_ServiceLocator_YouA0LmService.php'));
}, 'App\\Controller\\AccountController:index' => function () {
    return ($this->privates['.service_locator.dOJ.0GD'] ?? $this->load('get_ServiceLocator_DOJ_0GDService.php'));
}, 'App\\Controller\\AdminUtilityController:getUserApi' => function () {
    return ($this->privates['.service_locator.pDN53fn'] ?? $this->load('get_ServiceLocator_PDN53fnService.php'));
}, 'App\\Controller\\ArticleAdminController:edit' => function () {
    return ($this->privates['.service_locator.fQ2_UIE'] ?? $this->load('get_ServiceLocator_FQ2UIEService.php'));
}, 'App\\Controller\\ArticleAdminController:list' => function () {
    return ($this->privates['.service_locator.FgWuuJK'] ?? $this->load('get_ServiceLocator_FgWuuJKService.php'));
}, 'App\\Controller\\ArticleAdminController:new' => function () {
    return ($this->privates['.service_locator.v_q6gfB'] ?? $this->load('get_ServiceLocator_VQ6gfBService.php'));
}, 'App\\Controller\\ArticleController:homepage' => function () {
    return ($this->privates['.service_locator.Mc5zpHk'] ?? $this->load('get_ServiceLocator_Mc5zpHkService.php'));
}, 'App\\Controller\\ArticleController:show' => function () {
    return ($this->privates['.service_locator.YwRB2Jv'] ?? $this->load('get_ServiceLocator_YwRB2JvService.php'));
}, 'App\\Controller\\ArticleController:toggleArticleHeart' => function () {
    return ($this->privates['.service_locator.N4f9btw'] ?? $this->load('get_ServiceLocator_N4f9btwService.php'));
}, 'App\\Controller\\CommentAdminController:index' => function () {
    return ($this->privates['.service_locator.aVICUrH'] ?? $this->load('get_ServiceLocator_AVICUrHService.php'));
}, 'App\\Controller\\SecurityController:login' => function () {
    return ($this->privates['.service_locator.ypl2DZZ'] ?? $this->load('get_ServiceLocator_Ypl2DZZService.php'));
}, 'App\\Controller\\SecurityController:register' => function () {
    return ($this->privates['.service_locator.YouA0Lm'] ?? $this->load('get_ServiceLocator_YouA0LmService.php'));
}])), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
