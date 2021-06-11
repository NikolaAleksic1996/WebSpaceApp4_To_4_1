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

/* article_admin/list.html.twig */
class __TwigTemplate_6ad463565117e304d89032ae4611aeb9add06fd3c73876d1c7cdd4e9acde8926 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_body' => [$this, 'block_content_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "content_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article_admin/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article_admin/list.html.twig"));

        $this->parent = $this->loadTemplate("content_base.html.twig", "article_admin/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_body"));

        // line 4
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_article_new");
        echo "\" class=\"btn btn-primary pull-right\">
        Create <span class=\"fa fa-plus-circle\"></span>
    </a>
    <h1>All Articles</h1>
    <table class=\"table\">
        <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Published?</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 20), "email", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                <td>
                    <span class=\"fa fa-";
            // line 22
            echo ((twig_get_attribute($this->env, $this->source, $context["article"], "isPublished", [], "any", false, false, false, 22)) ? ("check") : ("times"));
            echo "\"></span>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article_admin/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 26,  98 => 22,  93 => 20,  89 => 19,  86 => 18,  82 => 17,  65 => 4,  56 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'content_base.html.twig' %}

{% block content_body %}
    <a href=\"{{ path('admin_article_new') }}\" class=\"btn btn-primary pull-right\">
        Create <span class=\"fa fa-plus-circle\"></span>
    </a>
    <h1>All Articles</h1>
    <table class=\"table\">
        <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Published?</th>
        </tr>
        </thead>
        <tbody>
        {% for article in articles %}
            <tr>
                <td>{{ article.title }}</td>
                <td>{{ article.author.email }}</td>
                <td>
                    <span class=\"fa fa-{{ article.isPublished ? 'check' : 'times' }}\"></span>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}

", "article_admin/list.html.twig", "/home/nikola/Desktop/Project/WebSpaceApp4_To_4_1/templates/article_admin/list.html.twig");
    }
}
