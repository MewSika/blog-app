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

/* admin/users/edit.twig */
class __TwigTemplate_09ed73f8235c615e5fde8ecb96670da4df0a0e557dbd67a1bf5f5e480d4988d5 extends Template
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
        $this->parent = $this->loadTemplate("admin/layout/layout.twig", "admin/users/edit.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <title>Modification de : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getuserName", [], "any", false, false, false, 4), "html", null, true);
        echo "</title>
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        if (($context["errors"] ?? null)) {
            // line 9
            echo "    <div class=\"alert alert-danger\">
        La modification n'a pas pu être effectuée
    </div>
";
        }
        // line 13
        echo "
";
        // line 14
        if (($context["success"] ?? null)) {
            // line 15
            echo "    <div class=\"alert alert-success\">
        La modification a bien été effectuée
    </div>
";
        }
        // line 19
        echo "<h2>Modification : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getuserName", [], "any", false, false, false, 19), "html", null, true);
        echo "</h2>
<hr>
";
        // line 21
        $this->loadTemplate("admin/users/_form.twig", "admin/users/edit.twig", 21)->display($context);
    }

    public function getTemplateName()
    {
        return "admin/users/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 21,  81 => 19,  75 => 15,  73 => 14,  70 => 13,  64 => 9,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout/layout.twig' %}

{% block head %}
    <title>Modification de : {{ user.getuserName }}</title>
{% endblock %}

{% block content %}
{% if errors %}
    <div class=\"alert alert-danger\">
        La modification n'a pas pu être effectuée
    </div>
{% endif %}

{% if success %}
    <div class=\"alert alert-success\">
        La modification a bien été effectuée
    </div>
{% endif %}
<h2>Modification : {{ user.getuserName }}</h2>
<hr>
{% include 'admin/users/_form.twig' %}
{% endblock %}", "admin/users/edit.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\users\\edit.twig");
    }
}
