<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'app_account' => array(array(), array('_controller' => 'App\\Controller\\AccountController::index'), array(), array(array('text', '/account')), array(), array()),
        'api_account' => array(array(), array('_controller' => 'App\\Controller\\AccountController::accountApi'), array(), array(array('text', '/api/account')), array(), array()),
        'admin_utility_users' => array(array(), array('_controller' => 'App\\Controller\\AdminUtilityController::getUserApi'), array(), array(array('text', '/admin/utility/users')), array(), array()),
        'admin_article_new' => array(array(), array('_controller' => 'App\\Controller\\ArticleAdminController::new'), array(), array(array('text', '/admin/article/new')), array(), array()),
        'admin_article_edit' => array(array('id'), array('_controller' => 'App\\Controller\\ArticleAdminController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/admin/article')), array(), array()),
        'admin_article_location_select' => array(array(), array('_controller' => 'App\\Controller\\ArticleAdminController::getSpecificLocationSelect'), array(), array(array('text', '/admin/article/location-select')), array(), array()),
        'admin_article_list' => array(array(), array('_controller' => 'App\\Controller\\ArticleAdminController::list'), array(), array(array('text', '/admin/article')), array(), array()),
        'app_homepage' => array(array(), array('_controller' => 'App\\Controller\\ArticleController::homepage'), array(), array(array('text', '/')), array(), array()),
        'article_show' => array(array('slug'), array('_controller' => 'App\\Controller\\ArticleController::show'), array(), array(array('variable', '/', '[^/]++', 'slug'), array('text', '/news')), array(), array()),
        'article_toggle_heart' => array(array('slug'), array('_controller' => 'App\\Controller\\ArticleController::toggleArticleHeart'), array(), array(array('text', '/heart'), array('variable', '/', '[^/]++', 'slug'), array('text', '/news')), array(), array()),
        'comment_admin' => array(array(), array('_controller' => 'App\\Controller\\CommentAdminController::index'), array(), array(array('text', '/admin/comment')), array(), array()),
        'app_login' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::login'), array(), array(array('text', '/login')), array(), array()),
        'app_logout' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::logout'), array(), array(array('text', '/logout')), array(), array()),
        'app_register' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::register'), array(), array(array('text', '/register')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
