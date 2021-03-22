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
class __TwigTemplate_fc8afccaa5862919a97adc26aa869b996351f7d9711910961f4e84855fadc6e1 extends Template
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
        echo twig_escape_filter($this->env, ("Article - " . twig_capitalize_string_filter($this->env, ($context["slug"] ?? null))), "html", null, true);
        echo "</title>
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <article class=\"container p-0\">
        <h1 class=\"fw-bold\"> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getName", [], "method", false, false, false, 11), "html", null, true);
        echo "</h1><hr>
        ";
        // line 12
        $this->loadTemplate("blog/_breadcrumb.twig", "blog/article.twig", 12)->display($context);
        // line 13
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getImage", [], "method", false, false, false, 13)) {
            // line 14
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getImageURL", [0 => "large"], "method", false, false, false, 14), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getName", [], "method", false, false, false, 14), "html", null, true);
            echo "\" class=\"card-img-top\">
        ";
        }
        // line 16
        echo "    </article>


    <p class=\"text-muted text-end\">Publié le ";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getCreatedAt", [], "method", false, false, false, 19), "full", "", null, "gregorian", "fr"), "html", null, true);
        echo "</p>
    <p class=\"text-end fw-light fst-italic\">
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getCategories", [], "method", false, false, false, 21));
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
            // line 22
            echo "        ";
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 22), 1))) {
                // line 23
                echo "            <span class=\"fw-light\">|</span>
        ";
            }
            // line 25
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "category", 1 => ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "getId", [], "any", false, false, false, 25), "slug" => twig_get_attribute($this->env, $this->source, $context["category"], "getSlug", [], "any", false, false, false, 25)]], "method", false, false, false, 25), "html", null, true);
            echo "\" class=\"text-secondary\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getName", [], "any", false, false, false, 25), "html", null, true);
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
        // line 27
        echo "    </p>
<hr>
<p class=\"text-justify\"> ";
        // line 29
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getContent", [], "method", false, false, false, 29), "html", null, true));
        echo "</p>
<p class=\"blockquote-footer text-end pt-3\"><em>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getAuthor", [], "method", false, false, false, 30), "html", null, true);
        echo "</em></p>

<hr>
<h3 class=\"fw-bold text-secondary\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["count"] ?? null), "comments", [], "any", false, false, false, 33), "html", null, true);
        echo " 20 commentaires</h3>
    <form action=\"\" method=\"post\">
        ";
        // line 35
        echo twig_call_macro($macros["form"], "macro_textarea", ["content", "Message", null, "Ajouter un commentaire public...", ["class" => "col-lg-8 mb-2"], 4], 35, $context, $this->getSourceContext());
        echo "
        <button class=\"btn btn-sm btn-secondary\" type=\"submit\">Envoyer</button>
    </form>
<hr>
";
        // line 39
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
            // line 40
            echo "    ";
            $this->loadTemplate("blog/_message.twig", "blog/article.twig", 40)->display($context);
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
        // line 42
        echo "
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
        return array (  196 => 42,  181 => 40,  164 => 39,  157 => 35,  152 => 33,  146 => 30,  142 => 29,  138 => 27,  119 => 25,  115 => 23,  112 => 22,  95 => 21,  90 => 19,  85 => 16,  77 => 14,  74 => 13,  72 => 12,  68 => 11,  65 => 10,  61 => 9,  54 => 6,  50 => 5,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/layout.twig' %}

{% import 'blog/_form.twig' as form %}

{% block head %}
    <title> {{ 'Article - ' ~ slug|capitalize}}</title>
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
        <a href=\"{{ router.url('category', {'id': category.getId, 'slug': category.getSlug}) }}\" class=\"text-secondary\">{{ category.getName }}</a>
    {% endfor %}
    </p>
<hr>
<p class=\"text-justify\"> {{ post.getContent()|nl2br }}</p>
<p class=\"blockquote-footer text-end pt-3\"><em>{{ post.getAuthor() }}</em></p>

<hr>
<h3 class=\"fw-bold text-secondary\">{{ count.comments }} 20 commentaires</h3>
    <form action=\"\" method=\"post\">
        {{ form.textarea(\"content\", \"Message\", null, \"Ajouter un commentaire public...\", {class : 'col-lg-8 mb-2'}, 4)}}
        <button class=\"btn btn-sm btn-secondary\" type=\"submit\">Envoyer</button>
    </form>
<hr>
{% for message in list %}
    {% include 'blog/_message.twig' %}
{% endfor %}

{% endblock %}", "blog/article.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\blog\\article.twig");
    }
}
