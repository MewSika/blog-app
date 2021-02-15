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
class __TwigTemplate_f0d3526b12cdde5c6068215931da69f0509cfd1b29ecfc27f46d56e167c41221 extends Template
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
        echo "<h1 class=\"display-3 fw-bold\">Bienvenue sur Pixel Blog !</h1>
<hr>
<div class=\"row\">
    <aside class=\"col-md-3\">
        ";
        // line 8
        $this->displayBlock('sidebar', $context, $blocks);
        // line 11
        echo "    </aside>
    <div class=\"col-md-9\">
        <h2>Dernières actualités : </h2>
        <div class=\"row justify-content-center\">
                ";
        // line 15
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
            // line 16
            echo "                    ";
            $this->loadTemplate("blog/_homeTable.twig", "home.twig", 16)->display($context);
            // line 17
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
        // line 18
        echo "        </div>
    </div>
</div>
";
    }

    // line 8
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "            ";
        $this->loadTemplate("_side.twig", "home.twig", 9)->display($context);
        // line 10
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
        return array (  113 => 10,  110 => 9,  106 => 8,  99 => 18,  85 => 17,  82 => 16,  65 => 15,  59 => 11,  57 => 8,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/layout.twig' %}

{% block content %}
<h1 class=\"display-3 fw-bold\">Bienvenue sur Pixel Blog !</h1>
<hr>
<div class=\"row\">
    <aside class=\"col-md-3\">
        {% block sidebar %}
            {% include '_side.twig' %}
        {% endblock %}
    </aside>
    <div class=\"col-md-9\">
        <h2>Dernières actualités : </h2>
        <div class=\"row justify-content-center\">
                {% for post in lastPosts %}
                    {% include 'blog/_homeTable.twig' %}
                {% endfor %}
        </div>
    </div>
</div>
{% endblock %}", "home.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\home.twig");
    }
}
