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

/* admin/post/edit.twig */
class __TwigTemplate_2f836bfa7717a922a13fdfa63825fd4065c7b6dc2b9402631e2ae7eb10c2bb1f extends Template
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
        return "admin/layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/layout/layout.twig", "admin/post/edit.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <title>";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        if (($context["errors"] ?? null)) {
            // line 9
            echo "    <div class=\"alert alert-danger\">
        La modification n'a pas pu être effectuée
    </div>
";
        }
        // line 13
        echo "
";
        // line 14
        if (($context["success"] ?? null)) {
            // line 15
            echo "    <div class=\"alert alert-success\">
        L'article a bien été modifié
    </div>
";
        }
        // line 19
        echo "
<h2>Modifier l'article : ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getName", [], "method", false, false, false, 20), "html", null, true);
        echo "</h2>
<hr>
";
        // line 22
        $this->loadTemplate("admin/post/_form.twig", "admin/post/edit.twig", 22)->display($context);
    }

    public function getTemplateName()
    {
        return "admin/post/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 22,  84 => 20,  81 => 19,  75 => 15,  73 => 14,  70 => 13,  64 => 9,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout/layout.twig' %}

{% block head %}
    <title>{{ title }}</title>
{% endblock %}

{% block content %}
{% if errors %}
    <div class=\"alert alert-danger\">
        La modification n'a pas pu être effectuée
    </div>
{% endif %}

{% if success %}
    <div class=\"alert alert-success\">
        L'article a bien été modifié
    </div>
{% endif %}

<h2>Modifier l'article : {{ post.getName()}}</h2>
<hr>
{% include 'admin/post/_form.twig' %}
{% endblock %}", "admin/post/edit.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\post\\edit.twig");
    }
}
