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
class __TwigTemplate_5abb0f173ef285215b46a3789ea3ecf48e669c2994e1cac904624845fd3353a5 extends Template
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
        if (twig_test_empty(($context["fighters"] ?? null))) {
            // line 16
            echo "            <h4 class=\"fw-bold text-center mb-2\"> Aucun combattant ne correspond à votre recherche : ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["q"] ?? null), "q", [], "any", false, false, false, 16)), "html", null, true);
            echo " <h4>
        ";
        } elseif (( !twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 17
($context["q"] ?? null), "q", [], "any", false, false, false, 17)) && (-1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["q"] ?? null), "q", [], "any", false, false, false, 17)), 3)))) {
            echo "  
            <h4 class=\"fw-bold text-center mb-2\"> Votre recherche doit contenir plus de 3 caractères <h4>
        ";
        } else {
            // line 20
            echo "            ";
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
                // line 21
                echo "                ";
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
                    // line 22
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["weight"], "id", [], "any", false, false, false, 22) === twig_get_attribute($this->env, $this->source, $context["fighter"], "getWeightCatID", [], "any", false, false, false, 22))) {
                        // line 23
                        echo "                        ";
                        $this->loadTemplate("fighters/_card.twig", "/fighters/fighters.twig", 23)->display($context);
                        // line 24
                        echo "                    ";
                    }
                    // line 25
                    echo "                ";
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
                // line 26
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fighter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    </article>
    <aside class=\"text-center mb-5\">
        ";
            // line 29
            echo twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "previousLink", [0 => twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "fighters"], "method", false, false, false, 29), 1 => ($context["q"] ?? null)], "method", false, false, false, 29);
            echo "
        ";
            // line 30
            echo twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "nextLink", [0 => twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "fighters"], "method", false, false, false, 30), 1 => ($context["q"] ?? null)], "method", false, false, false, 30);
            echo "
    </aside>
    ";
        }
        // line 33
        echo "</div>
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
        return array (  171 => 33,  165 => 30,  161 => 29,  157 => 27,  143 => 26,  129 => 25,  126 => 24,  123 => 23,  120 => 22,  102 => 21,  84 => 20,  78 => 17,  73 => 16,  71 => 15,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
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
        {% if fighters is empty %}
            <h4 class=\"fw-bold text-center mb-2\"> Aucun combattant ne correspond à votre recherche : {{ q.q | upper}} <h4>
        {% elseif q.q is not empty and q.q|length < 3 %}  
            <h4 class=\"fw-bold text-center mb-2\"> Votre recherche doit contenir plus de 3 caractères <h4>
        {% else %}
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
    {% endif %}
</div>
{% endblock %}", "/fighters/fighters.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\fighters\\fighters.twig");
    }
}
