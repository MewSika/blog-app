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

/* auth/signin.twig */
class __TwigTemplate_d6406b6018b2f30d004bd1c9d24c88ff9156fd97b325329f04777b15289bc235 extends Template
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
        $this->parent = $this->loadTemplate("layout/layout.twig", "auth/signin.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <title> ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " </title>
";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<h2 class=\"text-center\">S'inscrire</h2><hr>

";
        // line 8
        if (($context["forbidden"] ?? null)) {
            // line 9
            echo "    <div class=\"alert alert-danger\">
        Vous n'avez pas accès à cette page
    </div>
";
        }
        // line 13
        echo "
    <form action=\"\" method=\"post\" class=\"m-auto col-md-4 text-center\">
        ";
        // line 15
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "username", 1 => "<i class=\"bi bi-person-circle\"></i>", 2 => "Identifiant"], "method", false, false, false, 15);
        echo "
        ";
        // line 16
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "mail", 1 => "<i class=\"bi bi-envelope\"></i>", 2 => "Email"], "method", false, false, false, 16);
        echo "
        ";
        // line 17
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "password", 1 => "<i class=\"bi bi-lock\"></i>", 2 => "Mot de passe"], "method", false, false, false, 17);
        echo "
        ";
        // line 18
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "checkbox", [0 => "newsletter", 1 => "Recevoir la newsletter"], "method", false, false, false, 18);
        echo "
        <button class=\"btn btn-secondary ml-3\"> S'inscrire</button>
    </form>

";
    }

    public function getTemplateName()
    {
        return "auth/signin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 18,  86 => 17,  82 => 16,  78 => 15,  74 => 13,  68 => 9,  66 => 8,  62 => 6,  58 => 5,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/layout.twig' %}
{% block head %}
    <title> {{ title }} </title>
{% endblock %}
{% block content %}
<h2 class=\"text-center\">S'inscrire</h2><hr>

{% if forbidden %}
    <div class=\"alert alert-danger\">
        Vous n'avez pas accès à cette page
    </div>
{% endif %}

    <form action=\"\" method=\"post\" class=\"m-auto col-md-4 text-center\">
        {{ form.input('username', '<i class=\"bi bi-person-circle\"></i>', 'Identifiant')|raw }}
        {{ form.input('mail', '<i class=\"bi bi-envelope\"></i>', 'Email')|raw }}
        {{ form.input('password', '<i class=\"bi bi-lock\"></i>', 'Mot de passe')|raw }}
        {{ form.checkbox(\"newsletter\", \"Recevoir la newsletter\") | raw}}
        <button class=\"btn btn-secondary ml-3\"> S'inscrire</button>
    </form>

{% endblock %}", "auth/signin.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\auth\\signin.twig");
    }
}
