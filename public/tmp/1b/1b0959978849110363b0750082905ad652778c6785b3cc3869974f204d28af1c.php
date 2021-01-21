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

/* blog/blog.twig */
class __TwigTemplate_46ef8337b2494558e6c6a2d920e3d32d994bb36bfed1974e89f66833598e4a2e extends Template
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
        $this->parent = $this->loadTemplate("layout/layout.twig", "blog/blog.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <title> Articles </title>
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<div class=\"row\">
    <aside class=\"col-md-3\">
        ";
        // line 10
        $this->displayBlock('sidebar', $context, $blocks);
        // line 13
        echo "    </aside>
    <div class=\"col-md-9\">
        <h1>Index des articles</h1>
        <hr>
        ";
        // line 17
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
            // line 18
            echo "            ";
            $this->loadTemplate("blog/_card.twig", "blog/blog.twig", 18)->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        <aside class=\"text-center mb-5\">
            ";
        // line 21
        echo twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "previousLink", [0 => ($context["link"] ?? null)], "method", false, false, false, 21);
        echo "
            ";
        // line 22
        echo twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "nextLink", [0 => ($context["link"] ?? null)], "method", false, false, false, 22);
        echo "
        </aside>
    </div>
</div>
";
    }

    // line 10
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "            ";
        $this->loadTemplate("_side.twig", "blog/blog.twig", 11)->display($context);
        // line 12
        echo "        ";
    }

    public function getTemplateName()
    {
        return "blog/blog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 12,  127 => 11,  123 => 10,  114 => 22,  110 => 21,  107 => 20,  93 => 19,  90 => 18,  73 => 17,  67 => 13,  65 => 10,  61 => 8,  57 => 7,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout/layout.twig\" %}

{% block head %}
    <title> Articles </title>
{% endblock %}

{% block content %}
<div class=\"row\">
    <aside class=\"col-md-3\">
        {% block sidebar %}
            {% include '_side.twig' %}
        {% endblock %}
    </aside>
    <div class=\"col-md-9\">
        <h1>Index des articles</h1>
        <hr>
        {% for post in posts %}
            {% include 'blog/_card.twig' %}
        {% endfor %}
        <aside class=\"text-center mb-5\">
            {{ pagination.previousLink(link)|raw }}
            {{ pagination.nextLink(link)|raw }}
        </aside>
    </div>
</div>
{% endblock %}", "blog/blog.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\blog\\blog.twig");
    }
}
