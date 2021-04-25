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

/* admin/post/new.twig */
class __TwigTemplate_e03bc06cee6a9e94c0951c02e1bcc9854f4ac0da7840707c321191571d87775f extends Template
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
        $this->parent = $this->loadTemplate("admin/layout/layout.twig", "admin/post/new.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <title>";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
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
        L'article n'a pu être créé
    </div>
";
        }
        // line 13
        if (($context["success"] ?? null)) {
            // line 14
            echo "    <div class=\"alert alert-success\">
        L'article a bien été créé
    </div>
";
        }
        // line 18
        echo "
<h2>Création d'article</h2>
<hr>

";
        // line 22
        $this->loadTemplate("admin/post/_form.twig", "admin/post/new.twig", 22)->display($context);
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/post/new.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 23,  84 => 22,  78 => 18,  72 => 14,  70 => 13,  64 => 9,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout/layout.twig' %}

{% block head %}
    <title>{{title}}</title>
{% endblock %}

{% block content %}
{% if errors %}
    <div class=\"alert alert-danger\">
        L'article n'a pu être créé
    </div>
{% endif %}
{% if success %}
    <div class=\"alert alert-success\">
        L'article a bien été créé
    </div>
{% endif %}

<h2>Création d'article</h2>
<hr>

{% include 'admin/post/_form.twig' %}

{% endblock %}", "admin/post/new.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\post\\new.twig");
    }
}
