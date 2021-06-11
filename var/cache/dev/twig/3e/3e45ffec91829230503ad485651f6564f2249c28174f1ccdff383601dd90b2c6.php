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

/* article/show.html.twig */
class __TwigTemplate_0ae2c568e1e1fa151d8b724a27ecec927cbf788b979a0e9b563baa75673f333f extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content_body' => [$this, 'block_content_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent = $this->loadTemplate("content_base.html.twig", "article/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Read: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_body"));

        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-sm-12\">
            <img class=\"show-article-img\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "imagePath", [], "any", false, false, false, 8)), "html", null, true);
        echo "\">
            <div class=\"show-article-title-container d-inline-block pl-3 align-middle\">
                <span class=\"show-article-title \">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</span>
                <br>
                <span class=\"align-left article-details\"><img class=\"article-author-img rounded-circle\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/alien-profile.png"), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 12, $this->source); })()), "author", [], "any", false, false, false, 12), "html", null, true);
        echo " </span>
                <span class=\"pl-2 article-details\">
                    ";
        // line 14
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 14, $this->source); })()), "publishedAt", [], "any", false, false, false, 14)) ? ($this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 14, $this->source); })()), "publishedAt", [], "any", false, false, false, 14))) : ("unpublished"));
        echo "
                </span>
                <span class=\"pl-2 article-details\">
                    <span class=\"js-like-article-count\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "heartCount", [], "any", false, false, false, 17), "html", null, true);
        echo "</span>
                    <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_toggle_heart", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 18, $this->source); })()), "slug", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\" class=\"fa fa-heart-o like-article js-like-article\"></a>
                </span>
                <span class=\"pl-2 article-details\">
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 21, $this->source); })()), "tags", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 22
            echo "                        <span class=\"badge badge-secondary\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "</span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                </span>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"article-text\">
                ";
        // line 31
        echo $this->extensions['App\Twig\AppExtension']->processMarkdown(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 31, $this->source); })()), "content", [], "any", false, false, false, 31));
        echo "
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <p class=\"share-icons mb-5\"><span class=\"pr-1\">Share:</span> <i class=\"pr-1 fa fa-facebook-square\"></i><i class=\"pr-1 fa fa-twitter-square\"></i><i class=\"pr-1 fa fa-reddit-square\"></i><i class=\"pr-1 fa fa-share-alt-square\"></i></p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <h3><i class=\"pr-3 fa fa-comment\"></i>";
        // line 42
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 42, $this->source); })()), "nonDeletedComments", [], "any", false, false, false, 42)), "html", null, true);
        echo " Comments</h3>
            <hr>

            <div class=\"row mb-5\">
                <div class=\"col-sm-12\">
                    <img class=\"comment-img rounded-circle\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/astronaut-profile.png"), "html", null, true);
        echo "\">
                    <div class=\"comment-container d-inline-block pl-3 align-top\">
                        <span class=\"commenter-name\">Amy Oort</span>
                        <div class=\"form-group\">
                            <textarea class=\"form-control comment-form\" id=\"articleText\" rows=\"1\"></textarea>
                        </div>
                        <button type=\"submit\" class=\"btn btn-info\">Comment</button>
                    </div>
                </div>
            </div>

            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 58, $this->source); })()), "nonDeletedComments", [], "any", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 59
            echo "            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <img class=\"comment-img rounded-circle\" src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/alien-profile.png"), "html", null, true);
            echo "\">
                    <div class=\"comment-container d-inline-block pl-3 align-top\">
                        <span class=\"commenter-name\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "authorName", [], "any", false, false, false, 63), "html", null, true);
            echo "</span>
                        <small>about ";
            // line 64
            echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 64));
            echo "</small>
                        ";
            // line 65
            if (twig_get_attribute($this->env, $this->source, $context["comment"], "isDeleted", [], "any", false, false, false, 65)) {
                // line 66
                echo "                            <span class=\"fa fa-close\"></span> deleted
                        ";
            }
            // line 68
            echo "                        <br>
                        <span class=\"comment\"> ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 69), "html", null, true);
            echo "</span>
                        <p><a href=\"#\">Reply</a></p>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/article_show.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 84,  246 => 82,  237 => 81,  223 => 75,  211 => 69,  208 => 68,  204 => 66,  202 => 65,  198 => 64,  194 => 63,  189 => 61,  185 => 59,  181 => 58,  167 => 47,  159 => 42,  145 => 31,  136 => 24,  127 => 22,  123 => 21,  117 => 18,  113 => 17,  107 => 14,  100 => 12,  95 => 10,  90 => 8,  86 => 6,  77 => 5,  58 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'content_base.html.twig' %}

{% block title %}Read: {{ article.title }}{% endblock %}

{% block content_body %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <img class=\"show-article-img\" src=\"{{ asset(article.imagePath) }}\">
            <div class=\"show-article-title-container d-inline-block pl-3 align-middle\">
                <span class=\"show-article-title \">{{ article.title }}</span>
                <br>
                <span class=\"align-left article-details\"><img class=\"article-author-img rounded-circle\" src=\"{{ asset('images/alien-profile.png') }}\"> {{ article.author }} </span>
                <span class=\"pl-2 article-details\">
                    {{ article.publishedAt ? article.publishedAt|ago : 'unpublished' }}
                </span>
                <span class=\"pl-2 article-details\">
                    <span class=\"js-like-article-count\">{{ article.heartCount }}</span>
                    <a href=\"{{ path('article_toggle_heart', {slug: article.slug}) }}\" class=\"fa fa-heart-o like-article js-like-article\"></a>
                </span>
                <span class=\"pl-2 article-details\">
                    {% for tag in article.tags %}
                        <span class=\"badge badge-secondary\">{{ tag.name }}</span>
                    {% endfor %}
                </span>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"article-text\">
                {{ article.content|cached_markdown }}
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <p class=\"share-icons mb-5\"><span class=\"pr-1\">Share:</span> <i class=\"pr-1 fa fa-facebook-square\"></i><i class=\"pr-1 fa fa-twitter-square\"></i><i class=\"pr-1 fa fa-reddit-square\"></i><i class=\"pr-1 fa fa-share-alt-square\"></i></p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <h3><i class=\"pr-3 fa fa-comment\"></i>{{ article.nonDeletedComments|length }} Comments</h3>
            <hr>

            <div class=\"row mb-5\">
                <div class=\"col-sm-12\">
                    <img class=\"comment-img rounded-circle\" src=\"{{ asset('images/astronaut-profile.png') }}\">
                    <div class=\"comment-container d-inline-block pl-3 align-top\">
                        <span class=\"commenter-name\">Amy Oort</span>
                        <div class=\"form-group\">
                            <textarea class=\"form-control comment-form\" id=\"articleText\" rows=\"1\"></textarea>
                        </div>
                        <button type=\"submit\" class=\"btn btn-info\">Comment</button>
                    </div>
                </div>
            </div>

            {% for comment in article.nonDeletedComments %}
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <img class=\"comment-img rounded-circle\" src=\"{{ asset('images/alien-profile.png') }}\">
                    <div class=\"comment-container d-inline-block pl-3 align-top\">
                        <span class=\"commenter-name\">{{ comment.authorName }}</span>
                        <small>about {{ comment.createdAt|ago }}</small>
                        {% if comment.isDeleted %}
                            <span class=\"fa fa-close\"></span> deleted
                        {% endif %}
                        <br>
                        <span class=\"comment\"> {{ comment.content }}</span>
                        <p><a href=\"#\">Reply</a></p>
                    </div>
                </div>
            </div>
            {% endfor %}

        </div>
    </div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script src=\"{{ asset('js/article_show.js') }}\"></script>
{% endblock %}
", "article/show.html.twig", "/home/nikola/Desktop/Project/WebSpaceApp4_To_4_1/templates/article/show.html.twig");
    }
}
