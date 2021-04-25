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

/* /fighters/category.twig */
class __TwigTemplate_285752c6d6b74f7cee66cde460c42d62b1bbfe5a57b487d0f57f78006ea4b217 extends Template
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
        return "layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout/layout.twig", "/fighters/category.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <title> ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["title"] ?? null)), "html", null, true);
        echo " </title>
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div class=\"row\">
    <article class=\"col-12\">
        <h1 class=\"fw-bold\">CHAMPIONS <span class=\"red\">UFC</span></h1>
        <hr>
        <form class=\"form-inline form-navbar mb-2 col-3\" action=\"\">
              <input class=\"form-control\" name=\"q\" type=\"text\" placeholder=\"Rechercher un combattant..\">
        </form>
        ";
        // line 14
        $this->loadTemplate("fighters/_breadcrumb.twig", "/fighters/category.twig", 14)->display($context);
        // line 15
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fighters"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["fighter"]) {
            // line 16
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["weights"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["weight"]) {
                // line 17
                echo "                    ";
                $this->loadTemplate("fighters/_card.twig", "/fighters/category.twig", 17)->display($context);
                // line 18
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fighter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </article>
    <aside class=\"text-center mb-5\">
        ";
        // line 22
        echo twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "previousLink", [0 => ($context["link"] ?? null)], "method", false, false, false, 22);
        echo "
        ";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "nextLink", [0 => ($context["link"] ?? null)], "method", false, false, false, 23);
        echo "
    </aside>
</div>
";
    }

    public function getTemplateName()
    {
        return "/fighters/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 23,  144 => 22,  140 => 20,  126 => 19,  112 => 18,  109 => 17,  91 => 16,  73 => 15,  71 => 14,  62 => 7,  58 => 6,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout/layout.twig\" %}
{% block head %}
    <title> {{ title|capitalize }} </title>
{% endblock %}

{% block content %}
<div class=\"row\">
    <article class=\"col-12\">
        <h1 class=\"fw-bold\">CHAMPIONS <span class=\"red\">UFC</span></h1>
        <hr>
        <form class=\"form-inline form-navbar mb-2 col-3\" action=\"\">
              <input class=\"form-control\" name=\"q\" type=\"text\" placeholder=\"Rechercher un combattant..\">
        </form>
        {% include 'fighters/_breadcrumb.twig' %}
        {% for fighter in fighters %}
            {% for weight in weights %}
                    {% include 'fighters/_card.twig' %}
            {% endfor %}
        {% endfor %}
    </article>
    <aside class=\"text-center mb-5\">
        {{ pagination.previousLink(link)|raw }}
        {{ pagination.nextLink(link)|raw }}
    </aside>
</div>
{% endblock %}", "/fighters/category.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\fighters\\category.twig");
    }
}
