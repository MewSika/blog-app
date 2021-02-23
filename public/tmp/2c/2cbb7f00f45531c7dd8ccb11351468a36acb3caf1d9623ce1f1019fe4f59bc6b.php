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
class __TwigTemplate_e5b7ef4db3e68a9566918e7c2cdc3a9616361b263741c52d8b5ec60b2f091676 extends Template
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
        $this->parent = $this->loadTemplate("layout/layout.twig", "blog/article.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <title> Article - ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["slug"] ?? null)), "html", null, true);
        echo "</title>
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <article class=\"container p-0\">
        <h1 class=\"fw-bold\"> ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getName", [], "method", false, false, false, 9), "html", null, true);
        echo "</h1><hr>
        ";
        // line 10
        $this->loadTemplate("blog/_breadcrumb.twig", "blog/article.twig", 10)->display($context);
        // line 11
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getImage", [], "method", false, false, false, 11)) {
            // line 12
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getImageURL", [0 => "large"], "method", false, false, false, 12), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getName", [], "method", false, false, false, 12), "html", null, true);
            echo "\" class=\"card-img-top\">
        ";
        }
        // line 14
        echo "    </article>


    <p class=\"text-muted text-end\">Publié le ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getCreatedAt", [], "method", false, false, false, 17), "full", "", null, "gregorian", "fr"), "html", null, true);
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
            echo "        ";
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 20), 1))) {
                // line 21
                echo "            <span class=\"fw-light\">|</span>
        ";
            }
            // line 23
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "category", 1 => ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "getId", [], "method", false, false, false, 23), "slug" => twig_get_attribute($this->env, $this->source, $context["category"], "getSlug", [], "method", false, false, false, 23)]], "method", false, false, false, 23), "html", null, true);
            echo "\" class=\"text-secondary\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getName", [], "method", false, false, false, 23), "html", null, true);
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
        echo "    </p>
<hr>
<p class=\"text-justify lh-sm\"> ";
        // line 27
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getContent", [], "method", false, false, false, 27), "html", null, true));
        echo "</p>
<p class=\"blockquote-footer text-end pt-3\"><em>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getAuthor", [], "method", false, false, false, 28), "html", null, true);
        echo "</em></p>
";
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
        return array (  143 => 28,  139 => 27,  135 => 25,  116 => 23,  112 => 21,  109 => 20,  92 => 19,  87 => 17,  82 => 14,  74 => 12,  71 => 11,  69 => 10,  65 => 9,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/layout.twig' %}

{% block head %}
    <title> Article - {{ slug|capitalize}}</title>
{% endblock %}

{% block content %}
    <article class=\"container p-0\">
        <h1 class=\"fw-bold\"> {{ post.getName() }}</h1><hr>
        {% include 'blog/_breadcrumb.twig' %}
        {% if post.getImage() %}
            <img src=\"{{ post.getImageURL('large') }}\" alt=\"{{ post.getName() }}\" class=\"card-img-top\">
        {% endif %}
    </article>


    <p class=\"text-muted text-end\">Publié le {{ post.getCreatedAt()|format_date('full', locale='fr') }}</p>
    <p class=\"text-end fw-light fst-italic\">
    {% for category in post.getCategories() %}
        {% if loop.index > 1 %}
            <span class=\"fw-light\">|</span>
        {% endif %}
        <a href=\"{{ router.url('category', {'id': category.getId(), 'slug': category.getSlug()}) }}\" class=\"text-secondary\">{{ post.getName() }}</a>
    {% endfor %}
    </p>
<hr>
<p class=\"text-justify lh-sm\"> {{ post.getContent()|nl2br }}</p>
<p class=\"blockquote-footer text-end pt-3\"><em>{{ post.getAuthor() }}</em></p>
{% endblock %}", "blog/article.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\blog\\article.twig");
    }
}
