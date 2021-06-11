<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_bd9a870ea9d9b770ae8fbd68cd7493ffbdcff0a820fea7ad7a098666cf8ca4fb extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

    <head>
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    </head>

    <body>
        ";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PREVIOUS_ADMIN")) {
            // line 18
            echo "            <div class=\"alert alert-warning\" style=\"margin-bottom: 0;\">
                You are currently switched to this user.
                <a href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage", ["_switch_user" => "_exit"]);
            echo "\">Exit Impersonation</a>
            </div>
        ";
        }
        // line 23
        echo "        <nav class=\"navbar navbar-expand-lg navbar-dark navbar-bg mb-5\">
            <a style=\"margin-left: 75px;\" class=\"navbar-brand space-brand\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\">The Space Bar</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                <ul class=\"navbar-nav mr-auto\">
                     <li class=\"nav-item\">
                       <a style=\"color: #fff;\" class=\"nav-link\" href=\"#\">Local Asteroids</a>
                     </li>
                     <li class=\"nav-item\">
                       <a style=\"color: #fff;\" class=\"nav-link\" href=\"#\">Weather</a>
                     </li>
                   </ul>
                <form class=\"form-inline my-2 my-lg-0\">
                    <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <button class=\"btn btn-info my-2 my-sm-0\" type=\"submit\">Search</button>
                </form>
                <ul class=\"navbar-nav ml-auto\">
                    ";
        // line 42
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 43
            echo "                        <li class=\"nav-item dropdown\" style=\"margin-right: 75px;\">
                            <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <img class=\"nav-profile-img rounded-circle\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "avatarUrl", [0 => 100], "method", false, false, false, 45), "html", null, true);
            echo "\">";
            // line 46
            echo "                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                <a class=\"dropdown-item\" href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
            echo "\">Profile</a>
                                ";
            // line 49
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN_ARTICLE")) {
                // line 50
                echo "                                    <a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_article_new");
                echo "\">Create Post</a>
                                ";
            }
            // line 52
            echo "                                <a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                            </div>
                        </li>
                    ";
        } else {
            // line 56
            echo "                        <li class=\"nav-item\">
                            <a style=\"color: #fff;\" class=\"nav-link\" href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login</a>
                        </li>
                        <li class=\"nav-item\">
                            <a style=\"color: #fff;\" class=\"nav-link\" href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Register</a>
                        </li>
                    ";
        }
        // line 63
        echo "                </ul>
            </div>
        </nav>

        ";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "
        <footer class=\"footer\">
            <div class=\"container text-center\">
                <span class=\"text-muted\">Made with <i class=\"fa fa-heart\" style=\"color: red;\"></i> by the guys and gals at <a href=\"https://knpuniversity.com\">KnpUniversity</a></span>
            </div>
        </footer>


        ";
        // line 76
        $this->displayBlock('javascripts', $context, $blocks);
        // line 84
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to the SpaceBar";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "            <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
            <script>
                \$('.dropdown-toggle').dropdown();
            </script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 77,  244 => 76,  227 => 67,  215 => 12,  211 => 11,  208 => 10,  199 => 9,  181 => 5,  169 => 84,  167 => 76,  157 => 68,  155 => 67,  149 => 63,  143 => 60,  137 => 57,  134 => 56,  126 => 52,  120 => 50,  118 => 49,  114 => 48,  110 => 46,  107 => 45,  103 => 43,  101 => 42,  80 => 24,  77 => 23,  71 => 20,  67 => 18,  65 => 17,  60 => 14,  58 => 9,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

    <head>
        <title>{% block title %}Welcome to the SpaceBar{% endblock %}</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
        {% endblock %}
    </head>

    <body>
        {% if is_granted('ROLE_PREVIOUS_ADMIN') %}
            <div class=\"alert alert-warning\" style=\"margin-bottom: 0;\">
                You are currently switched to this user.
                <a href=\"{{ path('app_homepage', {'_switch_user': '_exit'}) }}\">Exit Impersonation</a>
            </div>
        {% endif %}
        <nav class=\"navbar navbar-expand-lg navbar-dark navbar-bg mb-5\">
            <a style=\"margin-left: 75px;\" class=\"navbar-brand space-brand\" href=\"{{ path('app_homepage') }}\">The Space Bar</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                <ul class=\"navbar-nav mr-auto\">
                     <li class=\"nav-item\">
                       <a style=\"color: #fff;\" class=\"nav-link\" href=\"#\">Local Asteroids</a>
                     </li>
                     <li class=\"nav-item\">
                       <a style=\"color: #fff;\" class=\"nav-link\" href=\"#\">Weather</a>
                     </li>
                   </ul>
                <form class=\"form-inline my-2 my-lg-0\">
                    <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <button class=\"btn btn-info my-2 my-sm-0\" type=\"submit\">Search</button>
                </form>
                <ul class=\"navbar-nav ml-auto\">
                    {% if is_granted('ROLE_USER') %}
                        <li class=\"nav-item dropdown\" style=\"margin-right: 75px;\">
                            <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <img class=\"nav-profile-img rounded-circle\" src=\"{{ app.user.avatarUrl(100) }}\">{# we reduce the icon to 100px #}
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                <a class=\"dropdown-item\" href=\"{{ path('app_account') }}\">Profile</a>
                                {% if is_granted('ROLE_ADMIN_ARTICLE') %}
                                    <a class=\"dropdown-item\" href=\"{{ path('admin_article_new') }}\">Create Post</a>
                                {% endif %}
                                <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Logout</a>
                            </div>
                        </li>
                    {% else %}
                        <li class=\"nav-item\">
                            <a style=\"color: #fff;\" class=\"nav-link\" href=\"{{ path('app_login') }}\">Login</a>
                        </li>
                        <li class=\"nav-item\">
                            <a style=\"color: #fff;\" class=\"nav-link\" href=\"{{ path('app_register') }}\">Register</a>
                        </li>
                    {% endif %}
                </ul>
            </div>
        </nav>

        {% block body %}{% endblock %}

        <footer class=\"footer\">
            <div class=\"container text-center\">
                <span class=\"text-muted\">Made with <i class=\"fa fa-heart\" style=\"color: red;\"></i> by the guys and gals at <a href=\"https://knpuniversity.com\">KnpUniversity</a></span>
            </div>
        </footer>


        {% block javascripts %}
            <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
            <script>
                \$('.dropdown-toggle').dropdown();
            </script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/nikola/Desktop/Project/WebSpaceApp4_To_4_1/templates/base.html.twig");
    }
}
