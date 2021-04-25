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

/* admin/category/new.twig */
class __TwigTemplate_fe07d88847d5cbbe50f3205710029f3830c42783f615e00768fd723f9075672e extends Template
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
        $this->parent = $this->loadTemplate("admin/layout/layout.twig", "admin/category/new.twig", 1);
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
        La catégorie n'a pu être créée
    </div>
";
        }
        // line 11
        if (($context["success"] ?? null)) {
            // line 12
            echo "    <div class=\"alert alert-success\">
        La catégorie a bien été créée
    </div>
";
        }
        // line 16
        echo "
<h2>Création d'une catégorie</h2>
<hr>
";
        // line 19
        $this->loadTemplate("admin/category/_form.twig", "admin/category/new.twig", 19)->display($context);
    }

    public function getTemplateName()
    {
        return "admin/category/new.twig";
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
        La catégorie n'a pu être créée
    </div>
{% endif %}
{% if success %}
    <div class=\"alert alert-success\">
        La catégorie a bien été créée
    </div>
{% endif %}

<h2>Création d'une catégorie</h2>
<hr>
{% include 'admin/category/_form.twig' %}
{% endblock %}", "admin/category/new.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\category\\new.twig");
    }
}
