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

/* admin/forbidden.twig */
class __TwigTemplate_d1b8f5e8e4f622fa734dc98712a938b6b209d96288d9baf760c51d8042704212 extends Template
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
        $this->parent = $this->loadTemplate("admin/layout/layout.twig", "admin/forbidden.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <title>Err</title>
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
<div class=\"text-center p-3 m-auto\">
    <h1>Vous n'avez pas accès à cette page</h1>
    <i class=\"bi bi-exclamation-circle-fill text-warning display-2\"></i>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/forbidden.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout/layout.twig' %}

{% block head %}
    <title>Err</title>
{% endblock %}

{% block content %}

<div class=\"text-center p-3 m-auto\">
    <h1>Vous n'avez pas accès à cette page</h1>
    <i class=\"bi bi-exclamation-circle-fill text-warning display-2\"></i>
</div>
{% endblock %}", "admin/forbidden.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\forbidden.twig");
    }
}
