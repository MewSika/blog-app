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

/* admin/category/categories.twig */
class __TwigTemplate_05b4bb5bdfb2d4a00d03e886237a0bd46b6f340de3b3941a81f0a161ef10e3ca extends Template
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
        $this->parent = $this->loadTemplate("admin/layout/layout.twig", "admin/category/categories.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <title> Gestion des catégories </title>
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<h1>Gestion des catégories</h1>

";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["g"] ?? null), "success", [], "any", false, false, false, 10)) {
            // line 11
            echo "    <div class=\"alert alert-success alert-dismissible fade show\">
        La categorie a bien été créée
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
";
        }
        // line 18
        echo "
";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["g"] ?? null), "delete", [], "any", false, false, false, 19)) {
            // line 20
            echo "<div class=\"alert alert-danger alert-dismissible fade show\">
    La catégorie a bien été supprimée
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
</div>
";
        }
        // line 27
        echo "<table class=\"table rounded table-hover\">
    <thead>
        <th class=\"align-middle\">n°ID</th>
        <th class=\"align-middle\">Titre</th>
        <th class=\"text-end\"><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "admin_category_new"], "method", false, false, false, 31), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-dark\">Nouveau</a></th>
    </thead>
    <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 35
            echo "            ";
            $this->loadTemplate("admin/category/_categoryTable.twig", "admin/category/categories.twig", 35)->display($context);
            // line 36
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "admin/category/categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 37,  121 => 36,  118 => 35,  101 => 34,  95 => 31,  89 => 27,  80 => 20,  78 => 19,  75 => 18,  66 => 11,  64 => 10,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout/layout.twig' %}

{% block head %}
    <title> Gestion des catégories </title>
{% endblock %}

{% block content %}
<h1>Gestion des catégories</h1>

{% if g.success %}
    <div class=\"alert alert-success alert-dismissible fade show\">
        La categorie a bien été créée
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
{% endif %}

{% if g.delete %}
<div class=\"alert alert-danger alert-dismissible fade show\">
    La catégorie a bien été supprimée
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
</div>
{% endif %}
<table class=\"table rounded table-hover\">
    <thead>
        <th class=\"align-middle\">n°ID</th>
        <th class=\"align-middle\">Titre</th>
        <th class=\"text-end\"><a href=\"{{ router.url('admin_category_new') }}\" class=\"btn btn-sm btn-outline-dark\">Nouveau</a></th>
    </thead>
    <tbody>
        {% for item in items %}
            {% include 'admin/category/_categoryTable.twig' %}
        {% endfor %}
    </tbody>
</table>
{% endblock %}", "admin/category/categories.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\category\\categories.twig");
    }
}
