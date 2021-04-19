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

/* e404.twig */
class __TwigTemplate_e0270db859f8915229492170dc7dc55756800628238e1faeb93c62e67a4a4680 extends Template
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
        $this->parent = $this->loadTemplate("layout/layout.twig", "e404.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<div class=\"text-center p-3 mb-2\">
    <h1>Whoops! <br>Page indisponible</h1>
    <i class=\"fa fa-ban text-danger fa-spin fa-5x fa-fw\"></i>
</div>
<hr>
<h2 class=\"text-center\"> Par <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "home"], "method", false, false, false, 8), "html", null, true);
        echo "\" class=\"fst-italic text-secondary\">ici</a> pour retourner à l'accueil du site ! </h2>

";
    }

    public function getTemplateName()
    {
        return "e404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/layout.twig' %}
{% block content %}
<div class=\"text-center p-3 mb-2\">
    <h1>Whoops! <br>Page indisponible</h1>
    <i class=\"fa fa-ban text-danger fa-spin fa-5x fa-fw\"></i>
</div>
<hr>
<h2 class=\"text-center\"> Par <a href=\"{{ router.url('home')}}\" class=\"fst-italic text-secondary\">ici</a> pour retourner à l'accueil du site ! </h2>

{% endblock %}", "e404.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\e404.twig");
    }
}
