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
class __TwigTemplate_990cfd233760eea4647ec875efdaa9cf1d7f53bfe78bbbb4aa14b9e0099be237 extends Template
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
        echo "  <title> ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " </title>
";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<h2>Gestion des combattants UFC </h2>
<hr>
<form action=\"\" class=\"mb-4\">
    <div class=\"form-group\">
        <input type=\"text\" class=\"form-control\" name=\"q\" placeholder=\"Recherche de combattant\" value=\"";
        // line 11
        ((twig_get_attribute($this->env, $this->source, ($context["q"] ?? null), "q", [], "any", false, false, false, 11)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["q"] ?? null), "q", [], "any", false, false, false, 11), "html", null, true))) : (print ("")));
        echo "\">
    </div>
    <button class=\"btn btn-secondary\">Rechercher</button>
</form>
<table class=\"table rounded table-hover\">
    <thead>
        <th class=\"align-middle\">Nom</th>
        <th class=\"align-middle\">Catégorie poids (livres)</th>
        <th class=\"align-middle\">VICTOIRE</th>
        <th class=\"align-middle\">DEFAITE</th>
        <th class=\"align-middle\">NUL</th>
        <th class=\"align-middle\">ANNULE</th>
    </thead>
    <tbody>
      ";
        // line 25
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
            // line 26
            echo "          ";
            $this->loadTemplate("admin/fighters/_fighterTable.twig", "admin/fighters/fighters.twig", 26)->display($context);
            // line 27
            echo "      ";
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
        // line 28
        echo "    </tbody>
</table>
<aside class=\"text-center mb-5\">
    ";
        // line 31
        echo twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "previousLink", [0 => ($context["link"] ?? null)], "method", false, false, false, 31);
        echo "
    ";
        // line 32
        echo twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "nextLink", [0 => ($context["link"] ?? null)], "method", false, false, false, 32);
        echo "
</aside>

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
        return array (  129 => 32,  125 => 31,  120 => 28,  106 => 27,  103 => 26,  86 => 25,  69 => 11,  62 => 6,  58 => 5,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout/layout.twig' %}
{% block head %}
  <title> {{ title }} </title>
{% endblock %}
{% block content %}

<h2>Gestion des combattants UFC </h2>
<hr>
<form action=\"\" class=\"mb-4\">
    <div class=\"form-group\">
        <input type=\"text\" class=\"form-control\" name=\"q\" placeholder=\"Recherche de combattant\" value=\"{{ q.q ? q.q }}\">
    </div>
    <button class=\"btn btn-secondary\">Rechercher</button>
</form>
<table class=\"table rounded table-hover\">
    <thead>
        <th class=\"align-middle\">Nom</th>
        <th class=\"align-middle\">Catégorie poids (livres)</th>
        <th class=\"align-middle\">VICTOIRE</th>
        <th class=\"align-middle\">DEFAITE</th>
        <th class=\"align-middle\">NUL</th>
        <th class=\"align-middle\">ANNULE</th>
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

{% endblock %}
", "admin/fighters/fighters.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\fighters\\fighters.twig");
    }
}
