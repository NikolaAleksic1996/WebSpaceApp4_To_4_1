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

/* article_admin/_form.html.twig */
class __TwigTemplate_12f0fb71e31faec4415a69a44920126df164c852551962aab34899cfe86345d6 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article_admin/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article_admin/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    ";
        // line 3
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), 'row', ["label" => "Article title"]);
        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 7, $this->source); })()), "content", [], "any", false, false, false, 7), 'row');
        echo "
    ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["articleForm"] ?? null), "publishedAt", [], "any", true, true, false, 8)) {
            // line 9
            echo "         ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 9, $this->source); })()), "publishedAt", [], "any", false, false, false, 9), 'row');
            echo "
    ";
        }
        // line 11
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 11, $this->source); })()), "location", [], "any", false, false, false, 11), 'row');
        echo "
    ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["articleForm"] ?? null), "specificLocationName", [], "any", true, true, false, 12)) {
            // line 13
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 13, $this->source); })()), "specificLocationName", [], "any", false, false, false, 13), 'row');
            echo "
    ";
        }
        // line 15
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 15, $this->source); })()), "author", [], "any", false, false, false, 15), 'row');
        echo "

<button type=\"submit\" class=\"btn btn-primary\">";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["button_text"]) || array_key_exists("button_text", $context) ? $context["button_text"] : (function () { throw new RuntimeError('Variable "button_text" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "!</button>
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 18, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "article_admin/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 18,  84 => 17,  78 => 15,  72 => 13,  70 => 12,  65 => 11,  59 => 9,  57 => 8,  53 => 7,  50 => 6,  48 => 4,  45 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(articleForm) }}
    {# {{ form_widget(articleForm) }} #}

    {{ form_row(articleForm.title, {
        label: 'Article title'
    }) }}
    {{ form_row(articleForm.content) }}
    {% if articleForm.publishedAt is defined %}
         {{ form_row(articleForm.publishedAt) }}
    {% endif %}
    {{ form_row(articleForm.location) }}
    {%  if articleForm.specificLocationName is defined %}
        {{ form_row(articleForm.specificLocationName) }}
    {% endif %}
    {{ form_row(articleForm.author) }}

<button type=\"submit\" class=\"btn btn-primary\">{{ button_text }}!</button>
{{ form_end(articleForm) }}", "article_admin/_form.html.twig", "/home/nikola/Desktop/Project/WebSpaceApp4_To_4_1/templates/article_admin/_form.html.twig");
    }
}
