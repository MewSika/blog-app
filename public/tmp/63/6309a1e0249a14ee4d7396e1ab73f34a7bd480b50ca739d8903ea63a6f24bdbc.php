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

/* results.twig */
class __TwigTemplate_c1dbc44a8fb120e77e3ea64f80c9366c23f35f83d75b5f0f205b4efe221cf1ae extends Template
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
        $this->parent = $this->loadTemplate("layout/layout.twig", "results.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <title> Résultats de recherche ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, ($context["g"] ?? null)), "html", null, true);
        echo " </title>
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<h3 class=\"fw-bold\">Résultats de recherche :</h3>
<hr>
<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"row justify-content-center\">
        ";
        // line 13
        if (twig_test_empty(($context["posts"] ?? null))) {
            // line 14
            echo "            <h4 class=\"fw-bold text-center mb-2\"> Désolé ! Aucun article ne correspond à votre recherche : ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, ($context["g"] ?? null)), "html", null, true);
            echo " <h4>
            <h4 class=\"fw-bold text-center\">Retourner à <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "home"], "method", false, false, false, 15), "html", null, true);
            echo "\" class=\"text-dark\">l'accueil</a> du site</h4>
        </div>
        ";
        } elseif ((-1 === twig_compare(twig_length_filter($this->env,         // line 17
($context["g"] ?? null)), 2))) {
            // line 18
            echo "            <h4 class=\"fw-bold text-center mb-2\"> Votre recherche doit contenir au moins 2 caractères<h4>
            <h4 class=\"fw-bold text-center\">Retourner à <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "home"], "method", false, false, false, 19), "html", null, true);
            echo "\" class=\"text-dark\">l'accueil</a> du site</h4>
        </div>
        ";
        } else {
            // line 22
            echo "            ";
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
                // line 23
                echo "                ";
                $this->loadTemplate("results/_researchPost.twig", "results.twig", 23)->display($context);
                // line 24
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        </div>
        <aside class=\"text-center mb-5\">
            ";
            // line 27
            echo twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "previousLink", [0 => twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "results"], "method", false, false, false, 27)], "method", false, false, false, 27);
            echo "
            ";
            // line 28
            echo twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "nextLink", [0 => twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "results"], "method", false, false, false, 28)], "method", false, false, false, 28);
            echo "
        </aside>
        ";
        }
        // line 31
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "results.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 31,  135 => 28,  131 => 27,  127 => 25,  113 => 24,  110 => 23,  92 => 22,  86 => 19,  83 => 18,  81 => 17,  76 => 15,  71 => 14,  69 => 13,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/layout.twig' %}

{% block head %}
    <title> Résultats de recherche {{ g | upper}} </title>
{% endblock %}

{% block content %}
<h3 class=\"fw-bold\">Résultats de recherche :</h3>
<hr>
<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"row justify-content-center\">
        {% if posts is empty %}
            <h4 class=\"fw-bold text-center mb-2\"> Désolé ! Aucun article ne correspond à votre recherche : {{ g | upper}} <h4>
            <h4 class=\"fw-bold text-center\">Retourner à <a href=\"{{ router.url('home')}}\" class=\"text-dark\">l'accueil</a> du site</h4>
        </div>
        {% elseif g|length < 2 %}
            <h4 class=\"fw-bold text-center mb-2\"> Votre recherche doit contenir au moins 2 caractères<h4>
            <h4 class=\"fw-bold text-center\">Retourner à <a href=\"{{ router.url('home')}}\" class=\"text-dark\">l'accueil</a> du site</h4>
        </div>
        {% else %}
            {% for post in posts %}
                {% include \"results/_researchPost.twig\" %}
            {% endfor %}
        </div>
        <aside class=\"text-center mb-5\">
            {{ pagination.previousLink(router.url('results'))|raw }}
            {{ pagination.nextLink(router.url('results'))|raw }}
        </aside>
        {% endif %}
    </div>
</div>
{% endblock %}", "results.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\results.twig");
    }
}
