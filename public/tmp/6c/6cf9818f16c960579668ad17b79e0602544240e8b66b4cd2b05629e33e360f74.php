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

/* admin/newsletters/edit.twig */
class __TwigTemplate_43f1f428a669288c56205fcfab64d84c3886b9a419454d6012495e0903de7620 extends Template
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
        $this->parent = $this->loadTemplate("admin/layout/layout.twig", "admin/newsletters/edit.twig", 1);
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
        La newsletter n'a pu être modifiée
    </div>
";
        }
        // line 13
        if (($context["success"] ?? null)) {
            // line 14
            echo "    <div class=\"alert alert-success\">
        La newsletter a bien été modifiée
    </div>
";
        }
        // line 18
        echo "
<h2>Modifier la newsletter : ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["newsletter"] ?? null), "getTile", [], "any", false, false, false, 19), "html", null, true);
        echo "</h2>
<hr>

";
        // line 22
        $this->loadTemplate("admin/newsletters/_form.twig", "admin/newsletters/edit.twig", 22)->display($context);
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/newsletters/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 23,  87 => 22,  81 => 19,  78 => 18,  72 => 14,  70 => 13,  64 => 9,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
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
        La newsletter n'a pu être modifiée
    </div>
{% endif %}
{% if success %}
    <div class=\"alert alert-success\">
        La newsletter a bien été modifiée
    </div>
{% endif %}

<h2>Modifier la newsletter : {{ newsletter.getTile}}</h2>
<hr>

{% include 'admin/newsletters/_form.twig' %}

{% endblock %}", "admin/newsletters/edit.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\newsletters\\edit.twig");
    }
}
