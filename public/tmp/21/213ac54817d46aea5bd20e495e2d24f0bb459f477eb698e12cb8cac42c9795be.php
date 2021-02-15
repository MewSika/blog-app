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

/* blog/category.twig */
class __TwigTemplate_9732e7cc1e0ce864bd136c4b06a7be3290bf0dc7ab1bcd958ea51d47a08e36bc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout/layout.twig", "blog/category.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "   <title> Catégorie -  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "getName", [], "method", false, false, false, 3), "html", null, true);
        echo " </title>
";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"row\">
    <aside class=\"col-md-3\">
        ";
        // line 9
        $this->loadTemplate("_side.twig", "blog/category.twig", 9)->display($context);
        // line 10
        echo "    </aside>
    <div class=\"col-md-9\">
        <h1> Articles de la catégorie -  ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "getName", [], "method", false, false, false, 12), "html", null, true);
        echo " </h2>
        <hr>
        ";
        // line 14
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
            // line 15
            echo "            ";
            $this->loadTemplate("blog/_card.twig", "blog/category.twig", 15)->display($context);
            // line 16
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
        // line 17
        echo "        <aside class=\"text-center mb-5\">
            ";
        // line 18
        echo twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "previousLink", [0 => ($context["link"] ?? null)], "method", false, false, false, 18);
        echo "
            ";
        // line 19
        echo twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "nextLink", [0 => ($context["link"] ?? null)], "method", false, false, false, 19);
        echo "
        </aside>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "blog/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 19,  115 => 18,  112 => 17,  98 => 16,  95 => 15,  78 => 14,  73 => 12,  69 => 10,  67 => 9,  62 => 6,  58 => 5,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/layout.twig' %}
{% block title %}
   <title> Catégorie -  {{ category.getName() }} </title>
{% endblock %}
{% block content %}

<div class=\"row\">
    <aside class=\"col-md-3\">
        {% include '_side.twig' %}
    </aside>
    <div class=\"col-md-9\">
        <h1> Articles de la catégorie -  {{ category.getName() }} </h2>
        <hr>
        {% for post in posts %}
            {% include 'blog/_card.twig'%}
        {% endfor %}
        <aside class=\"text-center mb-5\">
            {{ pagination.previousLink(link)| raw }}
            {{ pagination.nextLink(link)| raw }}
        </aside>
    </div>
</div>
{% endblock %}
", "blog/category.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\blog\\category.twig");
    }
}
