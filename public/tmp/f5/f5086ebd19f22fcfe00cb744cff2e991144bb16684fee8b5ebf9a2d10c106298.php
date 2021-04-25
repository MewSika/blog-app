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

/* auth/bo/login.twig */
class __TwigTemplate_fed806164355f29f3f7c8aba18852ad41ba83b8db56121a9cece800794585846 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("layout/layout.twig", "auth/bo/login.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<h2 class=\"text-center\">Connexion</h2><hr>
";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "request", [], "any", false, false, false, 4), "query", [], "any", false, false, false, 4), "get", [0 => "page"], "method", false, false, false, 4), "html", null, true);
        echo "

";
        // line 6
        if (($context["forbidden"] ?? null)) {
            // line 7
            echo "    <div class=\"alert alert-danger\">
        Vous n'avez pas accès à cette page
    </div>
";
        }
        // line 11
        echo "
<form action=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "login"], "method", false, false, false, 12), "html", null, true);
        echo "\" method=\"post\" class=\"m-auto col-xs-6 col-md-3 text-center\">
    ";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "username", 1 => "<i class=\"bi bi-person-circle\"></i>", 2 => "Login"], "method", false, false, false, 13);
        echo "
    ";
        // line 14
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "password", 1 => "<i class=\"bi bi-lock\"></i>", 2 => "Password"], "method", false, false, false, 14);
        echo "
    <button class=\"btn btn-secondary ml-3\"> Se connecter</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "auth/bo/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 14,  73 => 13,  69 => 12,  66 => 11,  60 => 7,  58 => 6,  53 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/layout.twig' %}
{% block content %}
<h2 class=\"text-center\">Connexion</h2><hr>
{{ layout.request.query.get(\"page\") }}

{% if forbidden %}
    <div class=\"alert alert-danger\">
        Vous n'avez pas accès à cette page
    </div>
{% endif %}

<form action=\"{{ router.url('login') }}\" method=\"post\" class=\"m-auto col-xs-6 col-md-3 text-center\">
    {{ form.input('username', '<i class=\"bi bi-person-circle\"></i>', 'Login')|raw }}
    {{ form.input('password', '<i class=\"bi bi-lock\"></i>', 'Password')|raw }}
    <button class=\"btn btn-secondary ml-3\"> Se connecter</button>
</form>
{% endblock %}", "auth/bo/login.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\auth\\bo\\login.twig");
    }
}
