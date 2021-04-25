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

/* admin/category/edit.twig */
class __TwigTemplate_a82ec923585e3d4c78984e7152c65e28472b3766dac0af42f603029a5b039a1f extends Template
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
        $this->parent = $this->loadTemplate("admin/layout/layout.twig", "admin/category/edit.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <title>Modification de : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getName", [], "method", false, false, false, 4), "html", null, true);
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
        if (($context["success"] ?? null)) {
            // line 14
            echo "    <div class=\"alert alert-success\">
        La catégorie a bien été modifiée
    </div>
";
        }
        // line 18
        echo "
<h2>Editer la catégorie : ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getName", [], "method", false, false, false, 19), "html", null, true);
        echo "</h2>
<hr>
";
        // line 21
        $this->loadTemplate("admin/category/_form.twig", "admin/category/edit.twig", 21)->display($context);
    }

    public function getTemplateName()
    {
        return "admin/category/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 21,  81 => 19,  78 => 18,  72 => 14,  70 => 13,  64 => 9,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout/layout.twig' %}

{% block head %}
    <title>Modification de : {{ item.getName() }}</title>
{% endblock %}

{% block content %}
{% if errors %}
    <div class=\"alert alert-danger\">
        La modification n'a pas pu être effectuée
    </div>
{% endif %}
{% if success %}
    <div class=\"alert alert-success\">
        La catégorie a bien été modifiée
    </div>
{% endif %}

<h2>Editer la catégorie : {{ item.getName()}}</h2>
<hr>
{% include 'admin/category/_form.twig' %}
{% endblock %}", "admin/category/edit.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\category\\edit.twig");
    }
}
