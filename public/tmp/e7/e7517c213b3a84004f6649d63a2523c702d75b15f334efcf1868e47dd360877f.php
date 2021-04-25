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

/* admin/category/_form.twig */
class __TwigTemplate_682168c70eec9342823ca716b015e678b03f986507c30eab1a00bf07838c5d6f extends Template
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
        echo "<p class=\"fw-bold mb-3\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "categories_manage"], "method", false, false, false, 2), "html", null, true);
        echo "\" class=\"text-dark\"><i class=\"bi bi-arrow-left\"></i> Retour vers la gestion des catégories</a>
</p>
<form action=\"\" method=\"post\" class=\"mb-4\">
    ";
        // line 5
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "name", 1 => "Titre"], "method", false, false, false, 5);
        echo "
    ";
        // line 6
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "slug", 1 => "URL"], "method", false, false, false, 6);
        echo "
    <button name=\"\" type=\"submit\" class=\"btn btn-success\">
        ";
        // line 8
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 8))) {
            // line 9
            echo "            Modifier
        ";
        } else {
            // line 11
            echo "            Créer
        ";
        }
        // line 13
        echo "    </button>
</form>";
    }

    public function getTemplateName()
    {
        return "admin/category/_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  61 => 11,  57 => 9,  55 => 8,  50 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"fw-bold mb-3\">
    <a href=\"{{ router.url('categories_manage')}}\" class=\"text-dark\"><i class=\"bi bi-arrow-left\"></i> Retour vers la gestion des catégories</a>
</p>
<form action=\"\" method=\"post\" class=\"mb-4\">
    {{ form.input('name', 'Titre')|raw }}
    {{ form.input('slug', 'URL')|raw}}
    <button name=\"\" type=\"submit\" class=\"btn btn-success\">
        {% if item.getID() is not null %}
            Modifier
        {% else %}
            Créer
        {% endif %}
    </button>
</form>", "admin/category/_form.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\category\\_form.twig");
    }
}
