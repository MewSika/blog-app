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

/* admin/newsletters/new.twig */
class __TwigTemplate_53096d16310d2c817416bc408d5c632f27fe90dd4556d16626e53a876fa29d02 extends Template
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
        $this->parent = $this->loadTemplate("admin/layout/layout.twig", "admin/newsletters/new.twig", 1);
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
        La newsletter n'a pu être créée
    </div>
";
        }
        // line 13
        if (($context["success"] ?? null)) {
            // line 14
            echo "    <div class=\"alert alert-success\">
        La newsletter a bien été créée
    </div>
";
        }
        // line 18
        echo "
<h2>Création d'une newsletter</h2>
<hr>

";
        // line 22
        $this->loadTemplate("admin/newsletters/_form.twig", "admin/newsletters/new.twig", 22)->display($context);
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/newsletters/new.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 23,  84 => 22,  78 => 18,  72 => 14,  70 => 13,  64 => 9,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout/layout.twig' %}

{% block head %}
    <title>{{title}}</title>
{% endblock %}

{% block content %}
{% if errors %}
    <div class=\"alert alert-danger\">
        La newsletter n'a pu être créée
    </div>
{% endif %}
{% if success %}
    <div class=\"alert alert-success\">
        La newsletter a bien été créée
    </div>
{% endif %}

<h2>Création d'une newsletter</h2>
<hr>

{% include 'admin/newsletters/_form.twig' %}

{% endblock %}", "admin/newsletters/new.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\newsletters\\new.twig");
    }
}
