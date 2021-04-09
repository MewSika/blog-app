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

/* admin/category/_categoryTable.twig */
class __TwigTemplate_02b8cfc0539ea3a7d660a729fb04bd2bb845db63a6b16f90e1accb12ebc5ec38 extends Template
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
        echo "<tr>
    <td>#";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 2), "html", null, true);
        echo "</td>

    <td><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "admin_category", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getId", [], "method", false, false, false, 4)]], "method", false, false, false, 4), "html", null, true);
        echo "\" class=\"text-dark fw-bold\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getName", [], "method", false, false, false, 4), "html", null, true);
        echo "</a></td>
    <td class=\"text-end\">
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "admin_category", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getId", [], "method", false, false, false, 6)]], "method", false, false, false, 6), "html", null, true);
        echo "\" class=\"btn btn-sm btn-info\">
            Editer
        </a>
        <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "admin_category_delete", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getId", [], "method", false, false, false, 9)]], "method", false, false, false, 9), "html", null, true);
        echo "\" method=\"post\" class=\"d-inline\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer l\\'article ?')\">
            <button type=\"submit\" class=\"btn btn-sm btn-danger\" >
                Supprimer
            </button>
        </form>
    </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "admin/category/_categoryTable.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  52 => 6,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr>
    <td>#{{ item.getID() }}</td>

    <td><a href=\"{{ router.url('admin_category', {'id' : item.getId()}) }}\" class=\"text-dark fw-bold\">{{ item.getName() }}</a></td>
    <td class=\"text-end\">
        <a href=\"{{ router.url('admin_category', {'id' : item.getId()}) }}\" class=\"btn btn-sm btn-info\">
            Editer
        </a>
        <form action=\"{{ router.url('admin_category_delete', {'id' : item.getId()}) }}\" method=\"post\" class=\"d-inline\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer l\\'article ?')\">
            <button type=\"submit\" class=\"btn btn-sm btn-danger\" >
                Supprimer
            </button>
        </form>
    </td>
</tr>", "admin/category/_categoryTable.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\category\\_categoryTable.twig");
    }
}
