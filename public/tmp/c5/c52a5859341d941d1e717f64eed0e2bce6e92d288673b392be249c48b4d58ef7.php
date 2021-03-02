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

/* /sidebar/categories.twig */
class __TwigTemplate_123d9558cba8c00ab50de4c7d93ee5e3811e355d8b16d2405f6493e212b093a5 extends Template
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
        Catégories
    </h6>
    <ul class=\"nav flex-column\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sideCategory"]) {
            // line 7
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "category", 1 => ["id" => twig_get_attribute($this->env, $this->source, $context["sideCategory"], "getId", [], "method", false, false, false, 7), "slug" => twig_get_attribute($this->env, $this->source, $context["sideCategory"], "getSlug", [], "method", false, false, false, 7)]], "method", false, false, false, 7), "html", null, true);
            echo "\" class=\"text-secondary text-decoration-none\">
            <li class=\"list-group-item list-group-item-action\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sideCategory"], "getName", [], "method", false, false, false, 8), "html", null, true);
            echo "</li>
        </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sideCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </ul>
</div>

<div class=\"card mb-3 shadow d-block d-sm-none\">
    <h6 class=\"card-header fw-bold\" data-toggle=\"collapse\" href=\"#categoryCollapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"categoryCollapse\">
         Catégories
    </h6>
    <ul class=\"nav flex-column collapse\" id=\"categoryCollapse\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sideCategory"]) {
            // line 20
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "category", 1 => ["id" => twig_get_attribute($this->env, $this->source, $context["sideCategory"], "getId", [], "method", false, false, false, 20), "slug" => twig_get_attribute($this->env, $this->source, $context["sideCategory"], "getSlug", [], "method", false, false, false, 20)]], "method", false, false, false, 20), "html", null, true);
            echo "\" class=\"text-secondary text-decoration-none\">
            <li class=\"list-group-item list-group-item-action\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sideCategory"], "getName", [], "method", false, false, false, 21), "html", null, true);
            echo "</li>
        </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sideCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "/sidebar/categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 24,  81 => 21,  76 => 20,  72 => 19,  62 => 11,  53 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card mb-3 shadow d-none d-sm-block\">
    <h6 class=\"card-header fw-bold\">
        Catégories
    </h6>
    <ul class=\"nav flex-column\">
        {% for sideCategory in categories %}
        <a href=\"{{ router.url('category',{'id': sideCategory.getId(), 'slug': sideCategory.getSlug()})}}\" class=\"text-secondary text-decoration-none\">
            <li class=\"list-group-item list-group-item-action\">{{ sideCategory.getName() }}</li>
        </a>
        {% endfor %}
    </ul>
</div>

<div class=\"card mb-3 shadow d-block d-sm-none\">
    <h6 class=\"card-header fw-bold\" data-toggle=\"collapse\" href=\"#categoryCollapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"categoryCollapse\">
         Catégories
    </h6>
    <ul class=\"nav flex-column collapse\" id=\"categoryCollapse\">
        {% for sideCategory in categories %}
        <a href=\"{{ router.url('category',{'id': sideCategory.getId(), 'slug': sideCategory.getSlug()})}}\" class=\"text-secondary text-decoration-none\">
            <li class=\"list-group-item list-group-item-action\">{{ sideCategory.getName() }}</li>
        </a>
        {% endfor %}
    </ul>
</div>", "/sidebar/categories.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\sidebar\\categories.twig");
    }
}
