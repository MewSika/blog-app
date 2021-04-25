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

/* admin/fighters/import/_importForm.twig */
class __TwigTemplate_ee30b264aaef73abee77d38d7e892367fca934f86a5427d190a182f7c4bc202f extends Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "fighters_manage"], "method", false, false, false, 2), "html", null, true);
        echo "\" class=\"text-dark\"><i class=\"bi bi-arrow-left\"></i> Retour vers la gestion des combattants</a>
</p>
<form action=\"\" method=\"post\" class=\"mb-4\" enctype=\"multipart/form-data\">
    ";
        // line 5
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [0 => "file", 1 => "Fichier"], "method", false, false, false, 5);
        echo "
    <button name=\"\" type=\"submit\" class=\"btn btn-success\">
        Créer
    </button>
</form>";
    }

    public function getTemplateName()
    {
        return "admin/fighters/import/_importForm.twig";
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
    <a href=\"{{ router.url('fighters_manage')}}\" class=\"text-dark\"><i class=\"bi bi-arrow-left\"></i> Retour vers la gestion des combattants</a>
</p>
<form action=\"\" method=\"post\" class=\"mb-4\" enctype=\"multipart/form-data\">
    {{ form.file('file', 'Fichier')|raw }}
    <button name=\"\" type=\"submit\" class=\"btn btn-success\">
        Créer
    </button>
</form>", "admin/fighters/import/_importForm.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\fighters\\import\\_importForm.twig");
    }
}
