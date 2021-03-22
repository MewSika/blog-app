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

/* admin/comments/comments.twig */
class __TwigTemplate_8a15eca4665afeaba7baa80fab918b319074da2820f13fc92074f9707d894aad extends Template
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
        $this->parent = $this->loadTemplate("admin/layout/layout.twig", "admin/comments/comments.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <title> Commentaires </title>
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<h1>Gestion des commentaire</h1>

";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["g"] ?? null), "valid", [], "any", false, false, false, 10)) {
            // line 11
            echo "    <div class=\"alert alert-success alert-dismissible fade show\">
        Le commentaire est autorisé
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
    Le commentaire a été restreint 
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
</div>
";
        }
        // line 27
        echo "
<table class=\"table rounded table-hover\">
    <thead>
        <th class=\"align-middle\">Utilisateur</th>
        <th class=\"align-middle\">Commentaire</th>
        <th class=\"align-middle\"></th>
    </thead>
    <tbody>
        ";
        // line 35
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
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 36
            echo "            ";
            $this->loadTemplate("admin/comments/_commentTable.twig", "admin/comments/comments.twig", 36)->display($context);
            // line 37
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "admin/comments/comments.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 38,  119 => 37,  116 => 36,  99 => 35,  89 => 27,  80 => 20,  78 => 19,  75 => 18,  66 => 11,  64 => 10,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout/layout.twig' %}

{% block head %}
    <title> Commentaires </title>
{% endblock %}

{% block content %}
<h1>Gestion des commentaire</h1>

{% if g.valid %}
    <div class=\"alert alert-success alert-dismissible fade show\">
        Le commentaire est autorisé
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
{% endif %}

{% if g.delete %}
<div class=\"alert alert-danger alert-dismissible fade show\">
    Le commentaire a été restreint 
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
</div>
{% endif %}

<table class=\"table rounded table-hover\">
    <thead>
        <th class=\"align-middle\">Utilisateur</th>
        <th class=\"align-middle\">Commentaire</th>
        <th class=\"align-middle\"></th>
    </thead>
    <tbody>
        {% for message in items %}
            {% include 'admin/comments/_commentTable.twig' %}
        {% endfor %}
    </tbody>
</table>
{% endblock %}", "admin/comments/comments.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\comments\\comments.twig");
    }
}
