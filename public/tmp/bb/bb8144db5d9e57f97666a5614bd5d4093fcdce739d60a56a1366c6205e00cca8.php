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

/* admin/fighters/import/importFighters.twig */
class __TwigTemplate_fd2318c0ecbecb000c28bd83fcb7258a32044d900125016dba918a700462b793 extends Template
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
        $this->parent = $this->loadTemplate("admin/layout/layout.twig", "admin/fighters/import/importFighters.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "  <title> ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " </title>
";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if (($context["errors"] ?? null)) {
            // line 7
            echo "    <div class=\"alert alert-danger\">
        Le fichier ne doit pas excéder 500ko et doit être en .csv
    </div>
";
        }
        // line 11
        if (($context["success"] ?? null)) {
            // line 12
            echo "    <div class=\"alert alert-success\">
        Le fichier a bien été importé en base de données
    </div>
";
        }
        // line 16
        echo "
<h2>Import données combattants</h2>
<hr>
";
        // line 19
        $this->loadTemplate("admin/fighters/import/_importForm.twig", "admin/fighters/import/importFighters.twig", 19)->display($context);
    }

    public function getTemplateName()
    {
        return "admin/fighters/import/importFighters.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 19,  78 => 16,  72 => 12,  70 => 11,  64 => 7,  62 => 6,  58 => 5,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout/layout.twig' %}
{% block head %}
  <title> {{ title }} </title>
{% endblock %}
{% block content %}
{% if errors %}
    <div class=\"alert alert-danger\">
        Le fichier ne doit pas excéder 500ko et doit être en .csv
    </div>
{% endif %}
{% if success %}
    <div class=\"alert alert-success\">
        Le fichier a bien été importé en base de données
    </div>
{% endif %}

<h2>Import données combattants</h2>
<hr>
{% include 'admin/fighters/import/_importForm.twig' %}
{% endblock %}", "admin/fighters/import/importFighters.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\fighters\\import\\importFighters.twig");
    }
}
