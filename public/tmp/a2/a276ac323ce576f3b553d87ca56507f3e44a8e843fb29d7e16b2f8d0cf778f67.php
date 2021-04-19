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

/* admin/fighters/fighters.twig */
class __TwigTemplate_b133bd6aecb91c0b796a0dc9486553f2698d5e40b1f34238f8962f7c1929a20a extends Template
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
        $this->parent = $this->loadTemplate("admin/layout/layout.twig", "admin/fighters/fighters.twig", 1);
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

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["q"] ?? null), "success", [], "any", false, false, false, 6)) {
            // line 7
            echo "    <div class=\"alert alert-success alert-dismissible fade show\">
        Le combattant a bien été créé
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
";
        }
        // line 14
        echo "
";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "delete", [], "any", false, false, false, 15)) {
            // line 16
            echo "<div class=\"alert alert-danger alert-dismissible fade show\">
    Le combattant a bien été supprimé
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
</div>
";
        }
        // line 23
        echo "<h2>Gestion des combattants UFC </h2>
<hr>
<form action=\"\" class=\"mb-4\">
    <div class=\"form-group\">
        <input type=\"text\" class=\"form-control\" name=\"q\" placeholder=\"Recherche de combattant\" value=\"";
        // line 27
        ((twig_get_attribute($this->env, $this->source, ($context["q"] ?? null), "q", [], "any", false, false, false, 27)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["q"] ?? null), "q", [], "any", false, false, false, 27), "html", null, true))) : (print ("")));
        echo "\">
    </div>
    <button class=\"btn btn-secondary\">Rechercher</button>
</form>
";
        // line 31
        if (twig_test_empty(($context["fighters"] ?? null))) {
            // line 32
            echo "    <h5 class=\"font-weight-bold text-center\"> Aucun combattant ne correspond à votre recherche : ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "q", [], "any", false, false, false, 32)), "html", null, true);
            echo " <h5>
";
        } elseif (( !twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 33
($context["get"] ?? null), "q", [], "any", false, false, false, 33)) && (-1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "q", [], "any", false, false, false, 33)), 3)))) {
            // line 34
            echo "    <h5 class=\"font-weight-bold text-center\">Votre recherche doit contenir plus de 3 caractères</h5>
";
        } else {
            // line 36
            echo "    <table class=\"table rounded table-hover\">
        <thead>
            <th class=\"align-middle\">Nom</th>
            <th class=\"align-middle\">Poids (kg)</th>
            <th class=\"align-middle\">VICTOIRE</th>
            <th class=\"align-middle\">DEFAITE</th>
            <th class=\"align-middle\">NUL</th>
            <th class=\"align-middle\">ANNULE</th>
            <th><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "fighter_new"], "method", false, false, false, 44), "html", null, true);
            echo "\" class=\"btn btn-sm btn-outline-dark\">Nouveau</a></th>
        </thead>
        <tbody>
            ";
            // line 47
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
                // line 48
                echo "                ";
                $this->loadTemplate("admin/fighters/_fighterTable.twig", "admin/fighters/fighters.twig", 48)->display($context);
                // line 49
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
            // line 50
            echo "        </tbody>
    </table>
    <aside class=\"text-center mb-5\">
        ";
            // line 53
            echo twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "previousLink", [0 => ($context["link"] ?? null)], "method", false, false, false, 53);
            echo "
        ";
            // line 54
            echo twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "nextLink", [0 => ($context["link"] ?? null)], "method", false, false, false, 54);
            echo "
    </aside>
";
        }
        // line 57
        echo "

";
    }

    public function getTemplateName()
    {
        return "admin/fighters/fighters.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 57,  172 => 54,  168 => 53,  163 => 50,  149 => 49,  146 => 48,  129 => 47,  123 => 44,  113 => 36,  109 => 34,  107 => 33,  102 => 32,  100 => 31,  93 => 27,  87 => 23,  78 => 16,  76 => 15,  73 => 14,  64 => 7,  62 => 6,  58 => 5,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout/layout.twig' %}
    {% block head %}
    <title> {{ title }} </title>
    {% endblock %}
{% block content %}
{% if q.success %}
    <div class=\"alert alert-success alert-dismissible fade show\">
        Le combattant a bien été créé
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
{% endif %}

{% if get.delete %}
<div class=\"alert alert-danger alert-dismissible fade show\">
    Le combattant a bien été supprimé
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
</div>
{% endif %}
<h2>Gestion des combattants UFC </h2>
<hr>
<form action=\"\" class=\"mb-4\">
    <div class=\"form-group\">
        <input type=\"text\" class=\"form-control\" name=\"q\" placeholder=\"Recherche de combattant\" value=\"{{ q.q ? q.q }}\">
    </div>
    <button class=\"btn btn-secondary\">Rechercher</button>
</form>
{% if fighters is empty %}
    <h5 class=\"font-weight-bold text-center\"> Aucun combattant ne correspond à votre recherche : {{ get.q | upper}} <h5>
{% elseif get.q is not empty and get.q|length < 3 %}
    <h5 class=\"font-weight-bold text-center\">Votre recherche doit contenir plus de 3 caractères</h5>
{% else %}
    <table class=\"table rounded table-hover\">
        <thead>
            <th class=\"align-middle\">Nom</th>
            <th class=\"align-middle\">Poids (kg)</th>
            <th class=\"align-middle\">VICTOIRE</th>
            <th class=\"align-middle\">DEFAITE</th>
            <th class=\"align-middle\">NUL</th>
            <th class=\"align-middle\">ANNULE</th>
            <th><a href=\"{{ router.url('fighter_new') }}\" class=\"btn btn-sm btn-outline-dark\">Nouveau</a></th>
        </thead>
        <tbody>
            {% for fighter in fighters %}
                {% include 'admin/fighters/_fighterTable.twig' %}
            {% endfor %}
        </tbody>
    </table>
    <aside class=\"text-center mb-5\">
        {{ pagination.previousLink(link)|raw }}
        {{ pagination.nextLink(link)|raw }}
    </aside>
{% endif %}


{% endblock %}
", "admin/fighters/fighters.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\fighters\\fighters.twig");
    }
}
