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

/* auth/account.twig */
class __TwigTemplate_6b88e539dab5a96b918c939f0dd4241aedc7fbd84513c559837ce85b60f40587 extends Template
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
        $this->parent = $this->loadTemplate("layout/layout.twig", "auth/account.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<h2 class=\"text-center\">Mon espace</h2><hr>

<div class=\"row\">
    <div class=\"col-lg-6 m-auto\">
        <h3 class=\"fw-bold text-center\"><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "signin"], "method", false, false, false, 7), "html", null, true);
        echo "\" class=\"text-dark\"></a></h3>
        <form action=\"\" method=\"post\" class=\"m-auto col-md-8 text-center mb-4\" onsubmit=\"return confirm('Mettre à jour l\\'adresse e-mail ?')\">
            ";
        // line 9
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "username", 1 => "<i class=\"bi bi-person-circle\"></i>", 2 => "Identifiant"], "method", false, false, false, 9);
        echo "
            ";
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "password", 1 => "<i class=\"bi bi-lock\"></i>", 2 => "Mot de passe"], "method", false, false, false, 10);
        echo "
            ";
        // line 11
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "mail", 1 => "<i class=\"bi bi-envelope\"></i>", 2 => "Email"], "method", false, false, false, 11);
        echo "
            ";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "checkbox", [0 => "newsletter", 1 => "Recevoir la newsletter"], "method", false, false, false, 12);
        echo "
            <button class=\"btn btn-sm btn-secondary\" type=\"submit\" name=\"update\">Modifier</button>
        </form>
        <hr>
        <form action=\"\" method=\"post\" class=\"m-auto col-md-8 text-center\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer votre compte utilisateur ?')\">
            <button class=\"btn btn-sm btn-danger ml-3\" type=\"submit\" name=\"delete\">Supprimer son compte</button>
        </form>
    </div>
    <div class=\"col-lg-6 text-center\">
        <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "f_logout"], "method", false, false, false, 21), "html", null, true);
        echo "\" class=\"btn btn-sm btn-secondary\">Se déconnecter</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "auth/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 21,  73 => 12,  69 => 11,  65 => 10,  61 => 9,  56 => 7,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/layout.twig' %}
{% block content %}
<h2 class=\"text-center\">Mon espace</h2><hr>

<div class=\"row\">
    <div class=\"col-lg-6 m-auto\">
        <h3 class=\"fw-bold text-center\"><a href=\"{{router.url('signin')}}\" class=\"text-dark\"></a></h3>
        <form action=\"\" method=\"post\" class=\"m-auto col-md-8 text-center mb-4\" onsubmit=\"return confirm('Mettre à jour l\\'adresse e-mail ?')\">
            {{ form.input('username', '<i class=\"bi bi-person-circle\"></i>', 'Identifiant')|raw }}
            {{ form.input('password', '<i class=\"bi bi-lock\"></i>', 'Mot de passe')|raw }}
            {{ form.input('mail', '<i class=\"bi bi-envelope\"></i>', 'Email')|raw }}
            {{ form.checkbox(\"newsletter\", \"Recevoir la newsletter\") | raw}}
            <button class=\"btn btn-sm btn-secondary\" type=\"submit\" name=\"update\">Modifier</button>
        </form>
        <hr>
        <form action=\"\" method=\"post\" class=\"m-auto col-md-8 text-center\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer votre compte utilisateur ?')\">
            <button class=\"btn btn-sm btn-danger ml-3\" type=\"submit\" name=\"delete\">Supprimer son compte</button>
        </form>
    </div>
    <div class=\"col-lg-6 text-center\">
        <a href=\"{{ router.url('f_logout')}}\" class=\"btn btn-sm btn-secondary\">Se déconnecter</a>
    </div>
</div>
{% endblock %}", "auth/account.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\auth\\account.twig");
    }
}
