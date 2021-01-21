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
class __TwigTemplate_782a0393d6ced64f0691ae43f0492fb97342ff336dd687d8c7390dddd77f68ec extends Template
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
        <h1 class=\"text-center\"> ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getName", [], "method", false, false, false, 9), "html", null, true);
        echo "</h1><hr>
        <?php require __DIR__.'/_breadcrumb.php'; ?>
        ";
        // line 11
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getCreatedAt", [], "method", false, false, false, 17), "d F Y"), "html", null, true);
        echo "</p>
    <p class=\"text-end fw-light fst-italic\">
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getCategories", [], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            echo "        <?php if(\$k > 0) : ?>
            <span class=\"fw-light\">|</span>
        <?php endif;?>
        <a href=\"<?= \$router->url('category', ['id' => \$category->getId(), 'slug' => \$category->getSlug()]); ?>\" class=\"text-secondary\"><?= e(\$category->getName()); ?></a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </p>
<hr>
<p class=\"text-justify lh-sm\"><?= \$post->getFormattedContent(); ?></p>
<p class=\"blockquote-footer text-end pt-3\"><em><?= e(\$post->getAuthor()) ?></em></p>
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
        return array (  104 => 25,  94 => 20,  90 => 19,  85 => 17,  80 => 14,  72 => 12,  70 => 11,  65 => 9,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/layout.twig' %}

{% block head %}
    <title> Article - {{ slug|capitalize}}</title>
{% endblock %}

{% block content %}
    <article class=\"container p-0\">
        <h1 class=\"text-center\"> {{ post.getName() }}</h1><hr>
        <?php require __DIR__.'/_breadcrumb.php'; ?>
        {% if post.getImage() %}
            <img src=\"{{ post.getImageURL('large') }}\" alt=\"{{ post.getName() }}\" class=\"card-img-top\">
        {% endif %}
    </article>


    <p class=\"text-muted text-end\">Publié le {{ post.getCreatedAt()|date('d F Y') }}</p>
    <p class=\"text-end fw-light fst-italic\">
    {% for category in post.getCategories() %}
        <?php if(\$k > 0) : ?>
            <span class=\"fw-light\">|</span>
        <?php endif;?>
        <a href=\"<?= \$router->url('category', ['id' => \$category->getId(), 'slug' => \$category->getSlug()]); ?>\" class=\"text-secondary\"><?= e(\$category->getName()); ?></a>
    {% endfor %}
    </p>
<hr>
<p class=\"text-justify lh-sm\"><?= \$post->getFormattedContent(); ?></p>
<p class=\"blockquote-footer text-end pt-3\"><em><?= e(\$post->getAuthor()) ?></em></p>
{% endblock %}", "blog/article.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\blog\\article.twig");
    }
}
