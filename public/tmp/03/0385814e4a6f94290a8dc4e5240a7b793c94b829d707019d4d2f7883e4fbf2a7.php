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

/* admin/post/posts.twig */
class __TwigTemplate_a7e11bea60935c8b84ba5a8d11bb9aac18422ab32d51b45b8339dcb566de665c extends Template
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
        $this->parent = $this->loadTemplate("admin/layout/layout.twig", "admin/post/posts.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <title> ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " </title>
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<h1>Gestion des articles</h1>

";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["g"] ?? null), "success", [], "any", false, false, false, 9)) {
            // line 10
            echo "    <div class=\"alert alert-success alert-dismissible fade show\">
        L'article a bien été créé
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
";
        }
        // line 17
        echo "
";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["g"] ?? null), "delete", [], "any", false, false, false, 18)) {
            // line 19
            echo "<div class=\"alert alert-danger alert-dismissible fade show\">
    L'article a bien été supprimé
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
</div>
";
        }
        // line 26
        echo "
<table class=\"table rounded table-hover\">
    <thead>
        <th class=\"align-middle\">n°ID</th>
        <th class=\"align-middle\">Titre</th>
        <th class=\"align-middle\">Date de création</th>
        <th class=\"text-end\"><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "admin_post_new"], "method", false, false, false, 32), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-dark\">Nouveau</a></th>
    </thead>
    <tbody>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 36
            echo "            ";
            $this->loadTemplate("admin/post/_postTable.twig", "admin/post/posts.twig", 36)->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    </tbody>
</table>
<aside class=\"text-center mb-5\">
    ";
        // line 41
        echo twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "previousLink", [0 => ($context["link"] ?? null)], "method", false, false, false, 41);
        echo "
    ";
        // line 42
        echo twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "nextLink", [0 => ($context["link"] ?? null)], "method", false, false, false, 42);
        echo "
</aside>
";
    }

    public function getTemplateName()
    {
        return "admin/post/posts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 42,  144 => 41,  139 => 38,  125 => 37,  122 => 36,  105 => 35,  99 => 32,  91 => 26,  82 => 19,  80 => 18,  77 => 17,  68 => 10,  66 => 9,  62 => 7,  58 => 6,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout/layout.twig' %}
{% block head %}
    <title> {{ title }} </title>
{% endblock %}

{% block content %}
<h1>Gestion des articles</h1>

{% if g.success %}
    <div class=\"alert alert-success alert-dismissible fade show\">
        L'article a bien été créé
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
{% endif %}

{% if g.delete %}
<div class=\"alert alert-danger alert-dismissible fade show\">
    L'article a bien été supprimé
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
</div>
{% endif %}

<table class=\"table rounded table-hover\">
    <thead>
        <th class=\"align-middle\">n°ID</th>
        <th class=\"align-middle\">Titre</th>
        <th class=\"align-middle\">Date de création</th>
        <th class=\"text-end\"><a href=\"{{ router.url('admin_post_new') }}\" class=\"btn btn-sm btn-outline-dark\">Nouveau</a></th>
    </thead>
    <tbody>
        {% for post in posts %}
            {% include 'admin/post/_postTable.twig' %}
        {% endfor %}
    </tbody>
</table>
<aside class=\"text-center mb-5\">
    {{ pagination.previousLink(link)|raw }}
    {{ pagination.nextLink(link)|raw }}
</aside>
{% endblock %}", "admin/post/posts.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\post\\posts.twig");
    }
}
