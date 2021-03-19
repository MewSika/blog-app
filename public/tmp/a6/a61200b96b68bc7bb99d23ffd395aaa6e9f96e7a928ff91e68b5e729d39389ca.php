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

/* auth/login.twig */
class __TwigTemplate_b4a11ca6519dae70c723c78b1e74cd5a0cbd2a3d62d0c3663ade1a0f7c83d42e extends Template
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
        $this->parent = $this->loadTemplate("layout/layout.twig", "auth/login.twig", 1);
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
        echo "<h2 class=\"text-center\">S'authentifier</h2><hr>

";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["g"] ?? null), "login", [], "any", true, true, false, 8)) {
            // line 9
            echo "    <div class=\"alert alert-success\">
        Votre compte a bien été créé
    </div>
";
        }
        // line 13
        echo "
<div class=\"row\">
    <div class=\"col-lg-5 m-auto\">
        <h3 class=\"fw-bold text-center\"><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "signin"], "method", false, false, false, 16), "html", null, true);
        echo "\" class=\"text-dark\">Créer un compte</a></h3>
    </div>
    <div class=\"col-lg-2 sep\">
        <span class=\"sepText\">
            Authentification
        </span>
    </div>
    <div class=\"col-lg-5\">
        <h3 class=\"fw-bold text-center\">Connexion</h3>
        <form action=\"\" method=\"post\" class=\"m-auto col-md-8 text-center\">
            ";
        // line 26
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "username", 1 => "<i class=\"bi bi-person-circle\"></i>", 2 => "Identifiant"], "method", false, false, false, 26);
        echo "
            ";
        // line 27
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "password", 1 => "<i class=\"bi bi-lock\"></i>", 2 => "Mot de passe"], "method", false, false, false, 27);
        echo "
            <a class=\"d-block mb-2 text-dark\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "forgot"], "method", false, false, false, 28), "html", null, true);
        echo "\">Récupérer mon mot de passe</a>
            <button class=\"btn btn-secondary ml-3\"> Se connecter</button>
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "auth/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 28,  96 => 27,  92 => 26,  79 => 16,  74 => 13,  68 => 9,  66 => 8,  62 => 6,  58 => 5,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/layout.twig' %}
{% block head %}
    <title> {{ title }} </title>
{% endblock %}
{% block content %}
<h2 class=\"text-center\">S'authentifier</h2><hr>

{% if g.login is defined %}
    <div class=\"alert alert-success\">
        Votre compte a bien été créé
    </div>
{% endif %}

<div class=\"row\">
    <div class=\"col-lg-5 m-auto\">
        <h3 class=\"fw-bold text-center\"><a href=\"{{router.url('signin')}}\" class=\"text-dark\">Créer un compte</a></h3>
    </div>
    <div class=\"col-lg-2 sep\">
        <span class=\"sepText\">
            Authentification
        </span>
    </div>
    <div class=\"col-lg-5\">
        <h3 class=\"fw-bold text-center\">Connexion</h3>
        <form action=\"\" method=\"post\" class=\"m-auto col-md-8 text-center\">
            {{ form.input('username', '<i class=\"bi bi-person-circle\"></i>', 'Identifiant')|raw }}
            {{ form.input('password', '<i class=\"bi bi-lock\"></i>', 'Mot de passe')|raw }}
            <a class=\"d-block mb-2 text-dark\" href=\"{{router.url('forgot')}}\">Récupérer mon mot de passe</a>
            <button class=\"btn btn-secondary ml-3\"> Se connecter</button>
        </form>
    </div>
</div>
{% endblock %}", "auth/login.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\auth\\login.twig");
    }
}
