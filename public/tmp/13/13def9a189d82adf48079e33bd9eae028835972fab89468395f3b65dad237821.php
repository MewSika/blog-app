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
class __TwigTemplate_0d6b4c8fb2877b10f68086c5676142c4b3d34ee6f1c3d87e287c1c6011280a51 extends Template
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
        echo "
";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["g"] ?? null), "updated", [], "any", false, false, false, 4)) {
            // line 5
            echo "<div class=\"alert alert-success\">
    Vos informations ont bien été mises à jour
</div>
";
        }
        // line 9
        echo "
<h2 class=\"text-center\">Mon espace : ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userName", [], "any", false, false, false, 10), "html", null, true);
        echo " </h2><hr>

<div class=\"row mb-4\">
    <div class=\"col-lg-6 m-auto\">
        <h3 class=\"fw-bold text-center\"><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "signin"], "method", false, false, false, 14), "html", null, true);
        echo "\" class=\"text-dark\"></a></h3>
        <form action=\"\" method=\"post\" class=\"m-auto col-md-8 text-center mb-4\" onsubmit=\"return confirm('Mettre à jour les informations ?')\">
            ";
        // line 16
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "username", 1 => "<i class=\"bi bi-person-circle\"></i>", 2 => "Identifiant"], "method", false, false, false, 16);
        echo "
            ";
        // line 17
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "mail", 1 => "<i class=\"bi bi-envelope\"></i>", 2 => "Email"], "method", false, false, false, 17);
        echo "
            ";
        // line 18
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "checkbox", [0 => "newsletter", 1 => "Recevoir la newsletter"], "method", false, false, false, 18);
        echo "
            <hr>
            ";
        // line 20
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "password", 1 => "<i class=\"bi bi-lock\"></i>", 2 => "Veuillez indiquer votre mot de passe"], "method", false, false, false, 20);
        echo "
            <button class=\"btn btn-sm btn-secondary\" type=\"submit\" name=\"update\">Modifier</button>
        </form>
        <hr>
        <form action=\"\" method=\"post\" class=\"m-auto col-md-8 text-center\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer votre compte utilisateur ? Toute suppression est définitive, vos informations utilisateurs seront effacés des données du site. ')\">
            <button class=\"btn btn-sm btn-danger ml-3\" type=\"submit\" name=\"delete\">Supprimer son compte</button>
        </form>
    </div>
    <div class=\"col-lg-6 text-center\">
        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "f_logout"], "method", false, false, false, 29), "html", null, true);
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
        return array (  101 => 29,  89 => 20,  84 => 18,  80 => 17,  76 => 16,  71 => 14,  64 => 10,  61 => 9,  55 => 5,  53 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/layout.twig' %}
{% block content %}

{% if g.updated %}
<div class=\"alert alert-success\">
    Vos informations ont bien été mises à jour
</div>
{% endif %}

<h2 class=\"text-center\">Mon espace : {{ user.userName }} </h2><hr>

<div class=\"row mb-4\">
    <div class=\"col-lg-6 m-auto\">
        <h3 class=\"fw-bold text-center\"><a href=\"{{router.url('signin')}}\" class=\"text-dark\"></a></h3>
        <form action=\"\" method=\"post\" class=\"m-auto col-md-8 text-center mb-4\" onsubmit=\"return confirm('Mettre à jour les informations ?')\">
            {{ form.input('username', '<i class=\"bi bi-person-circle\"></i>', 'Identifiant')|raw }}
            {{ form.input('mail', '<i class=\"bi bi-envelope\"></i>', 'Email')|raw }}
            {{ form.checkbox(\"newsletter\", \"Recevoir la newsletter\") | raw}}
            <hr>
            {{ form.input('password', '<i class=\"bi bi-lock\"></i>', 'Veuillez indiquer votre mot de passe')|raw }}
            <button class=\"btn btn-sm btn-secondary\" type=\"submit\" name=\"update\">Modifier</button>
        </form>
        <hr>
        <form action=\"\" method=\"post\" class=\"m-auto col-md-8 text-center\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer votre compte utilisateur ? Toute suppression est définitive, vos informations utilisateurs seront effacés des données du site. ')\">
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
