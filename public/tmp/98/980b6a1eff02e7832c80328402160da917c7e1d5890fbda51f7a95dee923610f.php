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

/* admin/newsletters/_form.twig */
class __TwigTemplate_ffb56498ea580cdba973d0266629d9f3cc5ab3e05cabead1af6434c152e04159 extends Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "newsletters_manage"], "method", false, false, false, 2), "html", null, true);
        echo "\" class=\"text-dark\"><i class=\"bi bi-arrow-left\"></i> Retour vers la gestion des newsletters</a>
</p>
<form action=\"\" method=\"post\" class=\"mb-4\" enctype=\"multipart/form-data\">
    ";
        // line 5
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "title", 1 => "Titre"], "method", false, false, false, 5);
        echo "
    ";
        // line 6
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "author", 1 => "Auteur"], "method", false, false, false, 6);
        echo "
    ";
        // line 7
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "textarea", [0 => "content", 1 => "Contenu"], "method", false, false, false, 7);
        echo "

    <button name=\"\" type=\"submit\" class=\"btn btn-success\">
        ";
        // line 10
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["newsletter"] ?? null), "getID", [], "method", false, false, false, 10))) {
            // line 11
            echo "            Modifier
        ";
        } else {
            // line 13
            echo "            Créer
        ";
        }
        // line 15
        echo "    </button>
</form>";
    }

    public function getTemplateName()
    {
        return "admin/newsletters/_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  66 => 13,  62 => 11,  60 => 10,  54 => 7,  50 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"fw-bold mb-3\">
    <a href=\"{{router.url('newsletters_manage')}}\" class=\"text-dark\"><i class=\"bi bi-arrow-left\"></i> Retour vers la gestion des newsletters</a>
</p>
<form action=\"\" method=\"post\" class=\"mb-4\" enctype=\"multipart/form-data\">
    {{ form.input('title', 'Titre')|raw }}
    {{ form.input('author', 'Auteur')|raw }}
    {{ form.textarea('content', 'Contenu')|raw}}

    <button name=\"\" type=\"submit\" class=\"btn btn-success\">
        {% if newsletter.getID() is not null %}
            Modifier
        {% else %}
            Créer
        {% endif %}
    </button>
</form>", "admin/newsletters/_form.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\newsletters\\_form.twig");
    }
}
