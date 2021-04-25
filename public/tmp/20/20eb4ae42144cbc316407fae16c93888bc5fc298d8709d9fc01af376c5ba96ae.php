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

/* home.twig */
class __TwigTemplate_38aeb56800dcfae27f4e411694dbd1664ff175ccdffa1ebebc24032fdf046fcb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'sidebar' => [$this, 'block_sidebar'],
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
        $this->parent = $this->loadTemplate("layout/layout.twig", "home.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<h1 class=\"display-3 fw-bold\">ACCUEIL</h1>
<hr>
<div class=\"row\">
    <div class=\"col-md-9\">
        <h2>Dernières actualités : </h2>
        <div class=\"row justify-content-center\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lastPosts"] ?? null));
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
            // line 11
            echo "                    ";
            $this->loadTemplate("blog/_homeTable.twig", "home.twig", 11)->display($context);
            // line 12
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </div>
    </div>
    <aside class=\"col-md-3\">
        ";
        // line 16
        $this->displayBlock('sidebar', $context, $blocks);
        // line 19
        echo "    </aside>
</div>
";
    }

    // line 16
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "            ";
        $this->loadTemplate("_side.twig", "home.twig", 17)->display($context);
        // line 18
        echo "        ";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 18,  110 => 17,  106 => 16,  100 => 19,  98 => 16,  93 => 13,  79 => 12,  76 => 11,  59 => 10,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/layout.twig' %}

{% block content %}
<h1 class=\"display-3 fw-bold\">ACCUEIL</h1>
<hr>
<div class=\"row\">
    <div class=\"col-md-9\">
        <h2>Dernières actualités : </h2>
        <div class=\"row justify-content-center\">
                {% for post in lastPosts %}
                    {% include 'blog/_homeTable.twig' %}
                {% endfor %}
        </div>
    </div>
    <aside class=\"col-md-3\">
        {% block sidebar %}
            {% include '_side.twig' %}
        {% endblock %}
    </aside>
</div>
{% endblock %}", "home.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\home.twig");
    }
}
