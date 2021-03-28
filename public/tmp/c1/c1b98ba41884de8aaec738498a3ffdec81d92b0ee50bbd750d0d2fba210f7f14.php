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

/* auth/reset.twig */
class __TwigTemplate_ace9b741b1b62b3cc837ae4ad41ef057c93e91874e5f9808236cf6d342bd3127 extends Template
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
        $this->parent = $this->loadTemplate("layout/layout.twig", "auth/reset.twig", 1);
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
        if ( !(null === ($context["deadlink"] ?? null))) {
            // line 9
            echo "<div class=\"alert alert-danger\">
    Le lien n'est plus valide
</div>
";
        } else {
            // line 13
            echo "<h2 class=\"text-center\">Réinitialisation du mot de passe</h2><hr>
<form action=\"\" method=\"post\" class=\"m-auto col-xs-6 col-md-3 text-center\">
    <input type=\"hidden\" name=\"token\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["g"] ?? null), "token", [], "any", false, false, false, 15), "html", null, true);
            echo "\"  />
    ";
            // line 16
            echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "password", 1 => "<i class=\"bi bi-lock\"></i>", 2 => "Entrez votre mot de passe"], "method", false, false, false, 16);
            echo "
    ";
            // line 17
            echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "confirmPassword", 1 => "<i class=\"bi bi-lock\"></i>", 2 => "Confirmez votre mot de passe"], "method", false, false, false, 17);
            echo "
    <button class=\"btn btn-secondary ml-3\">Envoyer</button>
</form>
";
        }
    }

    public function getTemplateName()
    {
        return "auth/reset.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 17,  78 => 16,  74 => 15,  70 => 13,  64 => 9,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/layout.twig' %}

{% block head %}
    <title> {{ title }} </title>
{% endblock %}

{% block content %}
{% if deadlink is not null %}
<div class=\"alert alert-danger\">
    Le lien n'est plus valide
</div>
{% else %}
<h2 class=\"text-center\">Réinitialisation du mot de passe</h2><hr>
<form action=\"\" method=\"post\" class=\"m-auto col-xs-6 col-md-3 text-center\">
    <input type=\"hidden\" name=\"token\" value=\"{{g.token}}\"  />
    {{ form.input('password', '<i class=\"bi bi-lock\"></i>', 'Entrez votre mot de passe')|raw }}
    {{ form.input('confirmPassword', '<i class=\"bi bi-lock\"></i>', 'Confirmez votre mot de passe')|raw }}
    <button class=\"btn btn-secondary ml-3\">Envoyer</button>
</form>
{% endif %}
{% endblock %}", "auth/reset.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\auth\\reset.twig");
    }
}
