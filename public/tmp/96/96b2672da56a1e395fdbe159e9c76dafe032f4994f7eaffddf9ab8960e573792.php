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
class __TwigTemplate_02256f5c6b9aeb939ca4b760257a07fe48ddfcb868b3a5cfddbe54c6bc688b04 extends Template
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
        echo "
    <h1>Nous contacter</h1>
    <hr>
    ";
        // line 11
        if (($context["success"] ?? null)) {
            // line 12
            echo "    <div class=\"alert alert-success alert-dismissible fade show col-xs-12 col-md-6 m-auto mb-3\" role=\"alert\">
        ";
            // line 13
            echo twig_escape_filter($this->env, ($context["success"] ?? null), "html", null, true);
            echo "
        <button type=\"button\" class=\"btn-close\" data-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    ";
        }
        // line 17
        echo "
    <form method=\"post\" action= \"\" class=\"col-md-6 col-xs-12 m-auto\">
        ";
        // line 19
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "username", 1 => "Pseudo"], "method", false, false, false, 19);
        echo "
        ";
        // line 20
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "email", 1 => "@mail"], "method", false, false, false, 20);
        echo "
        ";
        // line 21
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "textarea", [0 => "content", 1 => "Message", 2 => "Votre message"], "method", false, false, false, 21);
        echo "
        ";
        // line 22
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "checkbox", [0 => "checkNewsletter", 1 => "Recevoir la newsletter"], "method", false, false, false, 22);
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
        return array (  93 => 22,  89 => 21,  85 => 20,  81 => 19,  77 => 17,  70 => 13,  67 => 12,  65 => 11,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/layout.twig' %}

{% block head %}
    <title> Contact </title>
{% endblock %}

{% block content %}

    <h1>Nous contacter</h1>
    <hr>
    {% if success %}
    <div class=\"alert alert-success alert-dismissible fade show col-xs-12 col-md-6 m-auto mb-3\" role=\"alert\">
        {{ success }}
        <button type=\"button\" class=\"btn-close\" data-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    {% endif %}

    <form method=\"post\" action= \"\" class=\"col-md-6 col-xs-12 m-auto\">
        {{ form.input(\"username\", \"Pseudo\") | raw}}
        {{ form.input(\"email\", \"@mail\") | raw}}
        {{ form.textarea(\"content\", \"Message\", \"Votre message\") | raw}}
        {{ form.checkbox(\"checkNewsletter\", \"Recevoir la newsletter\") | raw}}
        <button class=\"btn btn-secondary ml-3 mb-3\">Envoyer</button>
    </form>

{% endblock %}
", "contact.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\contact.twig");
    }
}
