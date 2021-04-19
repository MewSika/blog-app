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

/* admin/users/users.twig */
class __TwigTemplate_967478fa44fce822a12ae03f640e0d7cfb74b034d27601822bfd26b4275bc063 extends Template
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
        $this->parent = $this->loadTemplate("admin/layout/layout.twig", "admin/users/users.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <title> Gestion des utilisateurs </title>
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<h1>Gestion des utilisateurs</h1>

";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["g"] ?? null), "success", [], "any", false, false, false, 10)) {
            // line 11
            echo "    <div class=\"alert alert-success alert-dismissible fade show\">
        L'utilisateur a bien été créé
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
    L'utilisateur a bien été supprimé
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
        <th class=\"align-middle\">n°ID</th>
        <th class=\"align-middle\">Nom</th>
        <th class=\"align-middle\">Mail</th>
        <th class=\"align-middle\">Rôle</th>
        <th class=\"text-end\"><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "admin_user_new"], "method", false, false, false, 34), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-dark\">Nouveau</a></th>
    </thead>
    <tbody>
        ";
        // line 37
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 38
            echo "            ";
            $this->loadTemplate("admin/users/_userTable.twig", "admin/users/users.twig", 38)->display($context);
            // line 39
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "admin/users/users.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 40,  124 => 39,  121 => 38,  104 => 37,  98 => 34,  89 => 27,  80 => 20,  78 => 19,  75 => 18,  66 => 11,  64 => 10,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout/layout.twig' %}

{% block head %}
    <title> Gestion des utilisateurs </title>
{% endblock %}

{% block content %}
<h1>Gestion des utilisateurs</h1>

{% if g.success %}
    <div class=\"alert alert-success alert-dismissible fade show\">
        L'utilisateur a bien été créé
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
{% endif %}

{% if g.delete %}
<div class=\"alert alert-danger alert-dismissible fade show\">
    L'utilisateur a bien été supprimé
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
</div>
{% endif %}

<table class=\"table rounded table-hover\">
    <thead>
        <th class=\"align-middle\">n°ID</th>
        <th class=\"align-middle\">Nom</th>
        <th class=\"align-middle\">Mail</th>
        <th class=\"align-middle\">Rôle</th>
        <th class=\"text-end\"><a href=\"{{ router.url('admin_user_new') }}\" class=\"btn btn-sm btn-outline-dark\">Nouveau</a></th>
    </thead>
    <tbody>
        {% for user in items %}
            {% include 'admin/users/_userTable.twig' %}
        {% endfor %}
    </tbody>
</table>
{% endblock %}", "admin/users/users.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\users\\users.twig");
    }
}
