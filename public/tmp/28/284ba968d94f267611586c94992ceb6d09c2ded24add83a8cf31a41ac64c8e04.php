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

/* admin/dashboard.twig */
class __TwigTemplate_7f1bde50781341b1d9364a47deeb8824c7773b077742e413fc89cead869d0a84 extends Template
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
        $this->parent = $this->loadTemplate("admin/layout/layout.twig", "admin/dashboard.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <title>Accueil administrateur</title>
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <h1>Dashboard</h1>
    <hr>
";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "login", [], "any", true, true, false, 10)) {
            // line 11
            echo "    <div class=\"alert alert-success alert-dismissible fade show\">
        Vous êtes bien identifié(e)
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
";
        }
        // line 18
        echo "
";
        // line 19
        if (($context["user"] ?? null)) {
            // line 20
            echo "    <p class=>Vous êtes connecté(e) en tant que <span class=\"fw-bold\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getUsername", [], "method", false, false, false, 20), "html", null, true);
            echo " </span></p>
";
        }
        // line 22
        echo "
";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "denied", [], "any", true, true, false, 23)) {
            // line 24
            echo "    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <strong>Accès à la page interdit</strong>
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "admin/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 24,  89 => 23,  86 => 22,  80 => 20,  78 => 19,  75 => 18,  66 => 11,  64 => 10,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout/layout.twig' %}

{% block head %}
    <title>Accueil administrateur</title>
{% endblock %}

{% block content %}
    <h1>Dashboard</h1>
    <hr>
{% if data.login is defined %}
    <div class=\"alert alert-success alert-dismissible fade show\">
        Vous êtes bien identifié(e)
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
{% endif %}

{% if user %}
    <p class=>Vous êtes connecté(e) en tant que <span class=\"fw-bold\">{{ user.getUsername() }} </span></p>
{% endif %}

{% if data.denied is defined %}
    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <strong>Accès à la page interdit</strong>
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
{% endif %}
{% endblock %}", "admin/dashboard.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\dashboard.twig");
    }
}
