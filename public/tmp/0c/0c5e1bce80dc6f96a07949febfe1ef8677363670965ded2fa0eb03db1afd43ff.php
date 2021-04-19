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

/* auth/forgot.twig */
class __TwigTemplate_3c10f2c560a394743763fc6924a2002682232d7be3020c6dc98d1a35cf9b88b4 extends Template
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
        $this->parent = $this->loadTemplate("layout/layout.twig", "auth/forgot.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <title> ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " </title>
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["g"] ?? null), "err", [], "any", false, false, false, 9)) {
            // line 10
            echo "<div class=\"alert alert-danger\">
    Aucun compte n'a été trouvé
</div>
";
        }
        // line 14
        echo "    <h2 class=\"text-center\">Récupération du mot de passe</h2><hr>
    ";
        // line 15
        if ( !(null === ($context["token"] ?? null))) {
            // line 16
            echo "        <div class=\"text-center\">
            <a href='";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "reset"], "method", false, false, false, 17), "html", null, true);
            echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
            echo "' class=\"text-dark\">Cliquez ici pour réinitialiser votre mot de passe </a>
        </div>
    ";
        } else {
            // line 20
            echo "        <form action=\"\" method=\"post\" class=\"m-auto col-xs-6 col-md-3 text-center\">
            ";
            // line 21
            echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "username", 1 => "<i class=\"bi bi-person-circle\"></i>", 2 => "Login"], "method", false, false, false, 21);
            echo "
            ";
            // line 22
            echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "mail", 1 => "<i class=\"bi bi-envelope\"></i>", 2 => "e-mail"], "method", false, false, false, 22);
            echo "
            <button class=\"btn btn-secondary ml-3\">Envoyer</button>
        </form>
    ";
        }
    }

    public function getTemplateName()
    {
        return "auth/forgot.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 22,  91 => 21,  88 => 20,  81 => 17,  78 => 16,  76 => 15,  73 => 14,  67 => 10,  65 => 9,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/layout.twig' %}

{% block head %}
    <title> {{ title }} </title>
{% endblock %}

{% block content %}

{% if g.err %}
<div class=\"alert alert-danger\">
    Aucun compte n'a été trouvé
</div>
{% endif %}
    <h2 class=\"text-center\">Récupération du mot de passe</h2><hr>
    {% if token is not null %}
        <div class=\"text-center\">
            <a href='{{router.url('reset')}}{{token}}' class=\"text-dark\">Cliquez ici pour réinitialiser votre mot de passe </a>
        </div>
    {% else %}
        <form action=\"\" method=\"post\" class=\"m-auto col-xs-6 col-md-3 text-center\">
            {{ form.input('username', '<i class=\"bi bi-person-circle\"></i>', 'Login')|raw }}
            {{ form.input('mail', '<i class=\"bi bi-envelope\"></i>', 'e-mail')|raw }}
            <button class=\"btn btn-secondary ml-3\">Envoyer</button>
        </form>
    {% endif %}
{% endblock %}", "auth/forgot.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\auth\\forgot.twig");
    }
}
