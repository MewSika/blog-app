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

/* /fighters/fighters.twig */
class __TwigTemplate_7d55fd3fe6df4f3b7ec77df74e426030c1be320cf7e69f0cdeed44ecbfbf07b9 extends Template
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
        $this->parent = $this->loadTemplate("layout/layout.twig", "/fighters/fighters.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <title> ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " </title>
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<div class=\"row\">
    <article class=\"col-12\">
        <h1 class=\"fw-bold\">CHAMPIONS <span class=\"red\">UFC</span></h1>
        <hr>
        <form class=\"form-inline form-navbar mb-2 col-3\" action=\"\">
              <input class=\"form-control\" name=\"q\" type=\"text\" placeholder=\"Rechercher un combattant..\">
        </form>
        ";
        // line 15
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
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["weight"], "id", [], "any", false, false, false, 17) === twig_get_attribute($this->env, $this->source, $context["fighter"], "getWeightCatID", [], "any", false, false, false, 17))) {
                    // line 18
                    echo "                    ";
                    $this->loadTemplate("fighters/_card.twig", "/fighters/fighters.twig", 18)->display($context);
                    // line 19
                    echo "                ";
                }
                // line 20
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
            // line 21
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
        // line 22
        echo "    </article>
    <aside class=\"text-center mb-5\">
        ";
        // line 24
        echo twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "previousLink", [0 => twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "fighters"], "method", false, false, false, 24), 1 => ($context["q"] ?? null)], "method", false, false, false, 24);
        echo "
        ";
        // line 25
        echo twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "nextLink", [0 => twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "fighters"], "method", false, false, false, 25), 1 => ($context["q"] ?? null)], "method", false, false, false, 25);
        echo "
    </aside>
</div>
";
    }

    public function getTemplateName()
    {
        return "/fighters/fighters.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 25,  147 => 24,  143 => 22,  129 => 21,  115 => 20,  112 => 19,  109 => 18,  106 => 17,  88 => 16,  71 => 15,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout/layout.twig\" %}

{% block head %}
    <title> {{ title }} </title>
{% endblock %}

{% block content %}
<div class=\"row\">
    <article class=\"col-12\">
        <h1 class=\"fw-bold\">CHAMPIONS <span class=\"red\">UFC</span></h1>
        <hr>
        <form class=\"form-inline form-navbar mb-2 col-3\" action=\"\">
              <input class=\"form-control\" name=\"q\" type=\"text\" placeholder=\"Rechercher un combattant..\">
        </form>
        {% for fighter in fighters %}
            {% for weight in weights %}
                {% if weight.id is same as fighter.getWeightCatID %}
                    {% include 'fighters/_card.twig' %}
                {% endif %}
            {% endfor %}
        {% endfor %}
    </article>
    <aside class=\"text-center mb-5\">
        {{ pagination.previousLink(router.url('fighters'), q)|raw }}
        {{ pagination.nextLink(router.url('fighters'), q)|raw }}
    </aside>
</div>
{% endblock %}", "/fighters/fighters.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\fighters\\fighters.twig");
    }
}
