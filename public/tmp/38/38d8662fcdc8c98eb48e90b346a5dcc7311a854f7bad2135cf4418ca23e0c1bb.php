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

/* admin/newsletters/_newsletterTable.twig */
class __TwigTemplate_93025f461a06df061285ebe06105267c734f695a9633ff563ed653023b7bd245 extends Template
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
    <td><a href=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "admin_newsletters_edit", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["newsletter"] ?? null), "getId", [], "method", false, false, false, 2)]], "method", false, false, false, 2), "html", null, true);
        echo "\" class=\"text-dark fw-bold\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["newsletter"] ?? null), "getTitle", [], "any", false, false, false, 2), "html", null, true);
        echo "</a></td>
    <td>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["newsletter"] ?? null), "getAuthor", [], "any", false, false, false, 3), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "admin_newsletters_edit", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["newsletter"] ?? null), "getId", [], "method", false, false, false, 4)]], "method", false, false, false, 4), "html", null, true);
        echo "\" class=\"text-dark fw-bold\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["newsletter"] ?? null), "getCreatedAt", [], "any", false, false, false, 4), "d-m-Y"), "html", null, true);
        echo "</a></td>
    <td class=\"text-end\">
        ";
        // line 6
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["newsletter"] ?? null), "getSent", [], "any", false, false, false, 6), 0))) {
            // line 7
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "admin_newsletters_send", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["newsletter"] ?? null), "getId", [], "method", false, false, false, 7)]], "method", false, false, false, 7), "html", null, true);
            echo "\" method=\"post\" class=\"d-inline\" onsubmit=\"return confirm('Envoyer la newsletter ?')\">
            <button type=\"submit\" class=\"btn btn-sm btn-success\" >
                Envoyer
            </button>
        </form>
        ";
        } else {
            // line 13
            echo "        <span class=\"font-italic\">Envoyée</span>
        ";
        }
        // line 15
        echo "    </td>
    <td class=\"text-end\">
        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "admin_newsletters_edit", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["newsletter"] ?? null), "getId", [], "method", false, false, false, 17)]], "method", false, false, false, 17), "html", null, true);
        echo "\" class=\"btn btn-sm btn-info\">
            Editer
        </a>
        <form action=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "admin_newsletters_delete", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["newsletter"] ?? null), "getId", [], "method", false, false, false, 20)]], "method", false, false, false, 20), "html", null, true);
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
        return "admin/newsletters/_newsletterTable.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 20,  77 => 17,  73 => 15,  69 => 13,  59 => 7,  57 => 6,  50 => 4,  46 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr>
    <td><a href=\"{{ router.url('admin_newsletters_edit', {'id' : newsletter.getId()}) }}\" class=\"text-dark fw-bold\">{{ newsletter.getTitle }}</a></td>
    <td>{{ newsletter.getAuthor }}</td>
    <td><a href=\"{{ router.url('admin_newsletters_edit', {'id' : newsletter.getId()}) }}\" class=\"text-dark fw-bold\">{{ newsletter.getCreatedAt|date('d-m-Y') }}</a></td>
    <td class=\"text-end\">
        {% if newsletter.getSent == 0 %}
        <form action=\"{{ router.url('admin_newsletters_send', {'id' : newsletter.getId()}) }}\" method=\"post\" class=\"d-inline\" onsubmit=\"return confirm('Envoyer la newsletter ?')\">
            <button type=\"submit\" class=\"btn btn-sm btn-success\" >
                Envoyer
            </button>
        </form>
        {% else %}
        <span class=\"font-italic\">Envoyée</span>
        {% endif %}
    </td>
    <td class=\"text-end\">
        <a href=\"{{ router.url('admin_newsletters_edit', {'id' : newsletter.getId()}) }}\" class=\"btn btn-sm btn-info\">
            Editer
        </a>
        <form action=\"{{ router.url('admin_newsletters_delete', {'id' : newsletter.getId()}) }}\" method=\"post\" class=\"d-inline\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer l\\'article ?')\">
            <button type=\"submit\" class=\"btn btn-sm btn-danger\" >
                Supprimer
            </button>
        </form>
    </td>
</tr>", "admin/newsletters/_newsletterTable.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\newsletters\\_newsletterTable.twig");
    }
}
