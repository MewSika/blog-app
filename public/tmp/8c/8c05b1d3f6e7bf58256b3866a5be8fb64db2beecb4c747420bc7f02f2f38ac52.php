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
class __TwigTemplate_9466a5c40ce4d7d17333a966dda667dfb9b15363a3dc688448957d13c84a6a29 extends Template
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
        echo "<div class=\"card mb-3 shadow\">
    <h6 class=\"card-header\">
        Catégories
    </h6>
    <ul class=\"nav flex-column \">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 7
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "category", 1 => ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "getId", [], "method", false, false, false, 7), "slug" => twig_get_attribute($this->env, $this->source, $context["categorie"], "getSlug", [], "method", false, false, false, 7)]], "method", false, false, false, 7), "html", null, true);
            echo "\" class=\"text-secondary text-decoration-none\">
            <li class=\"list-group-item list-group-item-action\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "getName", [], "method", false, false, false, 8), "html", null, true);
            echo "</li>
        </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
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
        return array (  62 => 11,  53 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card mb-3 shadow\">
    <h6 class=\"card-header\">
        Catégories
    </h6>
    <ul class=\"nav flex-column \">
        {% for categorie in categories %}
        <a href=\"{{ router.url('category',{'id': categorie.getId(), 'slug': categorie.getSlug()})}}\" class=\"text-secondary text-decoration-none\">
            <li class=\"list-group-item list-group-item-action\">{{ categorie.getName() }}</li>
        </a>
        {% endfor %}
    </ul>
</div>", "/sidebar/categories.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\sidebar\\categories.twig");
    }
}
