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

/* admin/fighters/edit.twig */
class __TwigTemplate_49cb39c53fd2666a1d9fec4e3b595c9f7c4c0390ebf646f3d0a9c648a81bb1e0 extends Template
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
        $this->parent = $this->loadTemplate("admin/layout/layout.twig", "admin/fighters/edit.twig", 1);
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
        Les informations ont bien été modifiées
    </div>
";
        }
        // line 19
        echo "
<h2>Modifier les informations combattant : ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getName", [], "method", false, false, false, 20), "html", null, true);
        echo "</h2>
<hr>
";
        // line 22
        $this->loadTemplate("admin/fighters/_form.twig", "admin/fighters/edit.twig", 22)->display($context);
    }

    public function getTemplateName()
    {
        return "admin/fighters/edit.twig";
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
        Les informations ont bien été modifiées
    </div>
{% endif %}

<h2>Modifier les informations combattant : {{ fighter.getName()}}</h2>
<hr>
{% include 'admin/fighters/_form.twig' %}
{% endblock %}", "admin/fighters/edit.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\fighters\\edit.twig");
    }
}
