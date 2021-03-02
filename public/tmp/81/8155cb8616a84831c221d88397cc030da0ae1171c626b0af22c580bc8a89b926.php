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

/* /sidebar/posts.twig */
class __TwigTemplate_d034f5009102d780e6be29399b1a72497d98cbeeb0972c1a6223fb02ccfb0b86 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"card mb-3 shadow d-none d-sm-block\">
    <h6 class=\"card-header fw-bold\">
        Articles récents
    </h6>
    <ul class=\"nav flex-column p-2\">
        ";
        // line 6
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
            // line 7
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "article", 1 => ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "getId", [], "method", false, false, false, 7), "slug" => twig_get_attribute($this->env, $this->source, $context["post"], "getSlug", [], "method", false, false, false, 7)]], "method", false, false, false, 7), "html", null, true);
            echo "\" class=\"text-secondary text-decoration-none\">
            <li class=\"nav-link fw-light py-1 list-group-item-action ";
            // line 8
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 8)) ? ("") : ("border-bottom"));
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getCreatedAt", [], "method", false, false, false, 8), "d.m.y"), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getName", [], "method", false, false, false, 8), "html", null, true);
            echo "</li>
        </a>
        ";
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
        // line 11
        echo "    </ul>
</div>

<div class=\"card mb-3 shadow d-block d-sm-none\">
    <h6 class=\"card-header fw-bold\" data-toggle=\"collapse\" href=\"#lastPostCollapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"lastPostCollapse\">
        Articles récents
    </h6>
    <ul class=\"nav flex-column p-2 collapse\" id=\"lastPostCollapse\">
        ";
        // line 19
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
            // line 20
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "article", 1 => ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "getId", [], "method", false, false, false, 20), "slug" => twig_get_attribute($this->env, $this->source, $context["post"], "getSlug", [], "method", false, false, false, 20)]], "method", false, false, false, 20), "html", null, true);
            echo "\" class=\"text-secondary text-decoration-none\">
            <li class=\"nav-link fw-light py-1 list-group-item-action ";
            // line 21
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 21)) ? ("") : ("border-bottom"));
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getCreatedAt", [], "method", false, false, false, 21), "d.m.y"), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getName", [], "method", false, false, false, 21), "html", null, true);
            echo "</li>
        </a>
        ";
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
        // line 24
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "/sidebar/posts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 24,  119 => 21,  114 => 20,  97 => 19,  87 => 11,  66 => 8,  61 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card mb-3 shadow d-none d-sm-block\">
    <h6 class=\"card-header fw-bold\">
        Articles récents
    </h6>
    <ul class=\"nav flex-column p-2\">
        {% for post in lastPosts %}
        <a href=\"{{ router.url('article', {'id': post.getId(), 'slug': post.getSlug()})}}\" class=\"text-secondary text-decoration-none\">
            <li class=\"nav-link fw-light py-1 list-group-item-action {{ (loop.last) ? '' : 'border-bottom' }}\">{{ post.getCreatedAt() | date('d.m.y') }} : {{ post.getName() }}</li>
        </a>
        {% endfor %}
    </ul>
</div>

<div class=\"card mb-3 shadow d-block d-sm-none\">
    <h6 class=\"card-header fw-bold\" data-toggle=\"collapse\" href=\"#lastPostCollapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"lastPostCollapse\">
        Articles récents
    </h6>
    <ul class=\"nav flex-column p-2 collapse\" id=\"lastPostCollapse\">
        {% for post in lastPosts %}
        <a href=\"{{ router.url('article', {'id': post.getId(), 'slug': post.getSlug()})}}\" class=\"text-secondary text-decoration-none\">
            <li class=\"nav-link fw-light py-1 list-group-item-action {{ (loop.last) ? '' : 'border-bottom' }}\">{{ post.getCreatedAt() | date('d.m.y') }} : {{ post.getName() }}</li>
        </a>
        {% endfor %}
    </ul>
</div>
", "/sidebar/posts.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\sidebar\\posts.twig");
    }
}
