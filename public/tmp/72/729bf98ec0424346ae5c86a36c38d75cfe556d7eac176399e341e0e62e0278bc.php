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

/* admin/fighters/_importForm.twig */
class __TwigTemplate_f70080e6606d630142d8663421752211bb8d20c86728117ffe5a9715bb6c670d extends Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "dashboard"], "method", false, false, false, 2), "html", null, true);
        echo "\" class=\"text-dark\"><i class=\"bi bi-arrow-left\"></i> Retour vers la gestion des catégories</a>
</p>
<form action=\"\" method=\"post\" class=\"mb-4\" enctype=\"multipart/form-data\">
    ";
        // line 5
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [0 => "csv", 1 => "csv"], "method", false, false, false, 5);
        echo "
    <button name=\"\" type=\"submit\" class=\"btn btn-success\">
        Créer
    </button>
</form>";
    }

    public function getTemplateName()
    {
        return "admin/fighters/_importForm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"fw-bold mb-3\">
    <a href=\"{{ router.url('dashboard')}}\" class=\"text-dark\"><i class=\"bi bi-arrow-left\"></i> Retour vers la gestion des catégories</a>
</p>
<form action=\"\" method=\"post\" class=\"mb-4\" enctype=\"multipart/form-data\">
    {{ form.file('csv', 'csv')|raw }}
    <button name=\"\" type=\"submit\" class=\"btn btn-success\">
        Créer
    </button>
</form>", "admin/fighters/_importForm.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\fighters\\_importForm.twig");
    }
}
