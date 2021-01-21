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
class __TwigTemplate_49d165e56c5e5ac865fb39e4a22b6a3a6aeb55e0c8fed5b87129f702b324cfab extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("layout/layout.twig", "home.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<h1 class=\"display-3 fw-bold\">Bienvenue sur Pixel Blog !</h1>
<hr>
<div class=\"row\">
    <aside class=\"col-md-3\">
        <?php require __DIR__.'/blog/_side.php'; ?>
    </aside>
    <div class=\"col-md-9\">
        <h2>Dernières actualités : </h2>
        <div class=\"row justify-content-center\">
                ";
        // line 14
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
            // line 15
            echo "                    ";
            $this->loadTemplate("blog/_homeTable.twig", "home.twig", 15)->display($context);
            // line 16
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
        // line 17
        echo "        </div>
    </div>
</div>

";
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
        return array (  95 => 17,  81 => 16,  78 => 15,  61 => 14,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/layout.twig' %}


{% block content %}
<h1 class=\"display-3 fw-bold\">Bienvenue sur Pixel Blog !</h1>
<hr>
<div class=\"row\">
    <aside class=\"col-md-3\">
        <?php require __DIR__.'/blog/_side.php'; ?>
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
