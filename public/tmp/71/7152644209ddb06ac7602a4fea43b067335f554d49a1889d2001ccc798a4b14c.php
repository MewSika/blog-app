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

/* blog/article.twig */
class __TwigTemplate_7be4145c56235cde64b9f660ded060635e6f72f06414385022ae50259f98cd6f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["form"] = $this->macros["form"] = $this->loadTemplate("blog/_form.twig", "blog/article.twig", 3)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("layout/layout.twig", "blog/article.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <title> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getName", [], "any", false, false, false, 6), "html", null, true);
        echo "</title>
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<article>
    <h1 class=\"fw-bold text-start\"> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getName", [], "method", false, false, false, 11), "html", null, true);
        echo "</h1><hr>
    ";
        // line 12
        $this->loadTemplate("blog/_breadcrumb.twig", "blog/article.twig", 12)->display($context);
        // line 13
        echo "    <aside class=\"text-center\">
        ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getImage", [], "method", false, false, false, 14)) {
            // line 15
            echo "          <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getImageURL", [0 => "large"], "method", false, false, false, 15), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getName", [], "any", false, false, false, 15), "html", null, true);
            echo "\" class=\"card-img-top\">
        ";
        }
        // line 17
        echo "        <p class=\"text-muted text-end\">Publié le ";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getCreatedAt", [], "any", false, false, false, 17), "full", "", null, "gregorian", "fr"), "html", null, true);
        echo "</p>
        <p class=\"text-end fw-light fst-italic\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getCategories", [], "method", false, false, false, 19));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            echo "            ";
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 20), 1))) {
                // line 21
                echo "                <span class=\"fw-light\">|</span>
            ";
            }
            // line 23
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "category", 1 => ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "getId", [], "any", false, false, false, 23), "slug" => twig_get_attribute($this->env, $this->source, $context["category"], "getSlug", [], "any", false, false, false, 23)]], "method", false, false, false, 23), "html", null, true);
            echo "\" class=\"text-secondary\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getName", [], "any", false, false, false, 23), "html", null, true);
            echo "</a>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </p>
    </aside>
</article>
";
        // line 29
        echo "<div class=\"d-flex\">
    ";
        // line 30
        if ( !(null === ($context["nextPost"] ?? null))) {
            // line 31
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "article", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["nextPost"] ?? null), "getID", [], "method", false, false, false, 31), "slug" => twig_get_attribute($this->env, $this->source, ($context["nextPost"] ?? null), "getSlug", [], "method", false, false, false, 31)]], "method", false, false, false, 31), "html", null, true);
            echo "\" class=\"text-decoration-none text-dark me-auto\"><i class=\"bi bi-arrow-bar-left h3 fw-bold m-0\"></i></a>
    ";
        }
        // line 33
        echo "
    ";
        // line 34
        if ( !(null === ($context["previousPost"] ?? null))) {
            // line 35
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "article", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["previousPost"] ?? null), "getID", [], "method", false, false, false, 35), "slug" => twig_get_attribute($this->env, $this->source, ($context["previousPost"] ?? null), "getSlug", [], "method", false, false, false, 35)]], "method", false, false, false, 35), "html", null, true);
            echo "\" class=\"text-decoration-none text-dark ms-auto\"><i class=\"bi bi-arrow-bar-right h3 fw-bold m-0\"></i></a>
    ";
        }
        // line 37
        echo "</div>
<hr>
<div class=\"row\">
    <div class=\"col-md-9\">
        <p class=\"text-justify\"> ";
        // line 41
        echo $this->env->getRuntime('Twig\Extra\Markdown\MarkdownRuntime')->convert(nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getContent", [], "any", false, false, false, 41), "html", null, true)));
        echo "</p>
        <p class=\"blockquote-footer text-end pt-3\"><em>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getAuthor", [], "any", false, false, false, 42), "html", null, true);
        echo "</em></p>
        <div class=\"fb-share-button p-0\" data-href=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "article", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getID", [], "method", false, false, false, 43), "slug" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getSlug", [], "method", false, false, false, 43)]], "method", false, false, false, 43), "html", null, true);
        echo "\" data-layout=\"button\" data-size=\"large\">
            <a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "article", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getID", [], "method", false, false, false, 44), "slug" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getSlug", [], "method", false, false, false, 44)]], "method", false, false, false, 44), "html", null, true);
        echo ";src=sdkpreparse\" class=\"fb-xfbml-parse-ignore\">
                Share
            </a>
        </div>
        <hr>

        ";
        // line 50
        if ((0 === twig_compare(twig_length_filter($this->env, ($context["list"] ?? null)), 0))) {
            // line 51
            echo "            ";
            // line 52
            echo "        ";
        } else {
            // line 53
            echo "            <h3 class=\"fw-bold text-secondary\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["list"] ?? null)), "html", null, true);
            echo " commentaire";
            echo (((1 === twig_compare(twig_length_filter($this->env, ($context["list"] ?? null)), 1))) ? ("s") : (""));
            echo " </h3>
        ";
        }
        // line 55
        echo "        ";
        // line 56
        echo "        ";
        if ( !(null === ($context["user"] ?? null))) {
            // line 57
            echo "            <form action=\"\" method=\"post\">
                ";
            // line 58
            if ( !twig_test_empty(($context["errors"] ?? null))) {
                // line 59
                echo "                    <div class=\"alert alert-danger col-lg-8\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 59), "html", null, true);
                echo "</div>
                ";
            }
            // line 61
            echo "                ";
            echo twig_call_macro($macros["form"], "macro_textarea", ["content", "Message", null, "Ajouter un commentaire public...", ["class" => "col-lg-8 mb-2"], 4], 61, $context, $this->getSourceContext());
            echo "
                <button class=\"btn btn-secondary btn-sm me-3\" type=\"submit\">Envoyer</button>
            </form>
        <hr>
        ";
        } else {
            // line 66
            echo "            <div class=\"alert alert-secondary text-secondary\">
                Vous devez êtes connecté pour rédiger un commentaire
            </div>
        ";
        }
        // line 70
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 71
            echo "            ";
            $this->loadTemplate("blog/_message.twig", "blog/article.twig", 71)->display($context);
            // line 72
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
    </div>
    <aside class=\"col-md-3\">
        ";
        // line 76
        $this->displayBlock('sidebar', $context, $blocks);
        // line 79
        echo "    </aside>
</div>
";
    }

    // line 76
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "            ";
        $this->loadTemplate("/sidebar/posts.twig", "blog/article.twig", 77)->display($context);
        // line 78
        echo "        ";
    }

    public function getTemplateName()
    {
        return "blog/article.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 78,  289 => 77,  285 => 76,  279 => 79,  277 => 76,  272 => 73,  258 => 72,  255 => 71,  237 => 70,  231 => 66,  222 => 61,  216 => 59,  214 => 58,  211 => 57,  208 => 56,  206 => 55,  198 => 53,  195 => 52,  193 => 51,  191 => 50,  182 => 44,  178 => 43,  174 => 42,  170 => 41,  164 => 37,  158 => 35,  156 => 34,  153 => 33,  147 => 31,  145 => 30,  142 => 29,  137 => 25,  118 => 23,  114 => 21,  111 => 20,  94 => 19,  88 => 17,  80 => 15,  78 => 14,  75 => 13,  73 => 12,  69 => 11,  66 => 10,  62 => 9,  55 => 6,  51 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/layout.twig' %}

{% import 'blog/_form.twig' as form %}

{% block head %}
    <title> {{ post.getName }}</title>
{% endblock %}

{% block content %}
<article>
    <h1 class=\"fw-bold text-start\"> {{ post.getName() }}</h1><hr>
    {% include 'blog/_breadcrumb.twig' %}
    <aside class=\"text-center\">
        {% if post.getImage() %}
          <img src=\"{{ post.getImageURL('large') }}\" alt=\"{{ post.getName }}\" class=\"card-img-top\">
        {% endif %}
        <p class=\"text-muted text-end\">Publié le {{ post.getCreatedAt|format_date('full', locale='fr') }}</p>
        <p class=\"text-end fw-light fst-italic\">
        {% for category in post.getCategories() %}
            {% if loop.index > 1 %}
                <span class=\"fw-light\">|</span>
            {% endif %}
            <a href=\"{{ router.url('category', {'id': category.getId, 'slug': category.getSlug}) }}\" class=\"text-secondary\">{{ category.getName }}</a>
        {% endfor %}
        </p>
    </aside>
</article>
{# Nav arrow #}
<div class=\"d-flex\">
    {% if nextPost is not null %}
        <a href=\"{{ router.url('article', {'id': nextPost.getID(), 'slug' : nextPost.getSlug()})}}\" class=\"text-decoration-none text-dark me-auto\"><i class=\"bi bi-arrow-bar-left h3 fw-bold m-0\"></i></a>
    {% endif %}

    {% if previousPost is not null %}
        <a href=\"{{ router.url('article', {'id': previousPost.getID(), 'slug' : previousPost.getSlug()})}}\" class=\"text-decoration-none text-dark ms-auto\"><i class=\"bi bi-arrow-bar-right h3 fw-bold m-0\"></i></a>
    {% endif %}
</div>
<hr>
<div class=\"row\">
    <div class=\"col-md-9\">
        <p class=\"text-justify\"> {{ post.getContent|nl2br|markdown_to_html}}</p>
        <p class=\"blockquote-footer text-end pt-3\"><em>{{ post.getAuthor }}</em></p>
        <div class=\"fb-share-button p-0\" data-href=\"{{ router.url('article', {'id': post.getID(), 'slug': post.getSlug()}) }}\" data-layout=\"button\" data-size=\"large\">
            <a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u={{ router.url('article', {'id': post.getID(), 'slug': post.getSlug()}) }};src=sdkpreparse\" class=\"fb-xfbml-parse-ignore\">
                Share
            </a>
        </div>
        <hr>

        {% if list|length == 0 %}
            {# No count messages title #}
        {% else %}
            <h3 class=\"fw-bold text-secondary\">{{ list|length }} commentaire{{ (list|length > 1) ? 's' : '' }} </h3>
        {% endif %}
        {# Form messages #}
        {% if user is not null %}
            <form action=\"\" method=\"post\">
                {% if errors is not empty %}
                    <div class=\"alert alert-danger col-lg-8\">{{ errors.content }}</div>
                {% endif %}
                {{ form.textarea(\"content\", \"Message\", null, \"Ajouter un commentaire public...\", {class : 'col-lg-8 mb-2'}, 4)}}
                <button class=\"btn btn-secondary btn-sm me-3\" type=\"submit\">Envoyer</button>
            </form>
        <hr>
        {% else %}
            <div class=\"alert alert-secondary text-secondary\">
                Vous devez êtes connecté pour rédiger un commentaire
            </div>
        {% endif %}
        {% for message in list %}
            {% include 'blog/_message.twig' %}
        {% endfor %}

    </div>
    <aside class=\"col-md-3\">
        {% block sidebar %}
            {% include '/sidebar/posts.twig' %}
        {% endblock %}
    </aside>
</div>
{% endblock %}", "blog/article.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\blog\\article.twig");
    }
}
