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

/* contact.twig */
class __TwigTemplate_5d7dce99371aa6736377155015054a6668bd582fa85d31468e1e823b6b8bee77 extends Template
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
        $this->parent = $this->loadTemplate("layout/layout.twig", "contact.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <title> Contact </title>
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        if ( !(null === ($context["logged"] ?? null))) {
            // line 9
            echo "    <div class=\"alert alert-secondary\">
        ";
            // line 10
            echo twig_escape_filter($this->env, ($context["logged"] ?? null), "html", null, true);
            echo "
    </div>
";
        }
        // line 13
        echo "    <h1>Nous contacter</h1>
    <hr>
    ";
        // line 15
        if (($context["success"] ?? null)) {
            // line 16
            echo "    <div class=\"alert alert-success alert-dismissible fade show col-md-6 m-auto mb-3\" role=\"alert\">
        ";
            // line 17
            echo twig_escape_filter($this->env, ($context["success"] ?? null), "html", null, true);
            echo "
        <button type=\"button\" class=\"btn-close\" data-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    ";
        }
        // line 21
        echo "
    <form method=\"post\" action= \"\" class=\"col-md-6 m-auto\">
        ";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "textarea", [0 => "content", 1 => "Message", 2 => "Votre message..."], "method", false, false, false, 23);
        echo "
        <button class=\"btn btn-secondary ml-3 mb-3\">Envoyer</button>
    </form>

";
    }

    public function getTemplateName()
    {
        return "contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 23,  87 => 21,  80 => 17,  77 => 16,  75 => 15,  71 => 13,  65 => 10,  62 => 9,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/layout.twig' %}

{% block head %}
    <title> Contact </title>
{% endblock %}

{% block content %}
{% if logged is not null %}
    <div class=\"alert alert-secondary\">
        {{ logged }}
    </div>
{% endif %}
    <h1>Nous contacter</h1>
    <hr>
    {% if success %}
    <div class=\"alert alert-success alert-dismissible fade show col-md-6 m-auto mb-3\" role=\"alert\">
        {{ success }}
        <button type=\"button\" class=\"btn-close\" data-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    {% endif %}

    <form method=\"post\" action= \"\" class=\"col-md-6 m-auto\">
        {{ form.textarea(\"content\", \"Message\", \"Votre message...\") | raw}}
        <button class=\"btn btn-secondary ml-3 mb-3\">Envoyer</button>
    </form>

{% endblock %}
", "contact.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\contact.twig");
    }
}
