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

/* admin/fighters/_fighterTable.twig */
class __TwigTemplate_636657569b9bd168ea3933b46da118a1822d6914775ddf6a8b790a727c4f2053 extends Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "admin_fighter", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getID", [], "method", false, false, false, 2), "name" => twig_lower_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getName", [], "any", false, false, false, 2), [" " => "-"]))]], "method", false, false, false, 2), "html", null, true);
        echo "\" class=\"text-dark fw-bold\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getName", [], "any", false, false, false, 2), "html", null, true);
        echo "</a></td>
    <td class=\"text-end\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getWeight", [], "any", false, false, false, 3), "html", null, true);
        echo "</td>
    <td class=\"text-end\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getWin", [], "any", false, false, false, 4), "html", null, true);
        echo "</td>
    <td class=\"text-end\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getLose", [], "any", false, false, false, 5), "html", null, true);
        echo "</td>
    <td class=\"text-end\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getDraw", [], "any", false, false, false, 6), "html", null, true);
        echo "</td>
    <td class=\"text-end\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getNc", [], "any", false, false, false, 7), "html", null, true);
        echo "</td>
    <td class=\"text-end\">
        <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "admin_fighter", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getID", [], "method", false, false, false, 9), "name" => twig_lower_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getName", [], "any", false, false, false, 9), [" " => "-"]))]], "method", false, false, false, 9), "html", null, true);
        echo "\" class=\"btn btn-sm btn-info\">
            Editer
        </a>
        <form action=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "fighter_delete", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getID", [], "method", false, false, false, 12)]], "method", false, false, false, 12), "html", null, true);
        echo "\" method=\"post\" class=\"d-inline\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce combattant ?')\">
            <button type=\"submit\" class=\"btn btn-sm btn-danger\" >
                Supprimer
            </button>
        </form>
    </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "admin/fighters/_fighterTable.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 12,  67 => 9,  62 => 7,  58 => 6,  54 => 5,  50 => 4,  46 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr>
    <td><a href=\"{{ router.url('admin_fighter', {'id' : fighter.getID(), 'name' : fighter.getName |replace({' ': '-'})|lower}) }}\" class=\"text-dark fw-bold\">{{ fighter.getName }}</a></td>
    <td class=\"text-end\">{{fighter.getWeight}}</td>
    <td class=\"text-end\">{{fighter.getWin}}</td>
    <td class=\"text-end\">{{fighter.getLose}}</td>
    <td class=\"text-end\">{{fighter.getDraw}}</td>
    <td class=\"text-end\">{{fighter.getNc}}</td>
    <td class=\"text-end\">
        <a href=\"{{ router.url('admin_fighter', {'id' : fighter.getID(), 'name' : fighter.getName |replace({' ': '-'})|lower}) }}\" class=\"btn btn-sm btn-info\">
            Editer
        </a>
        <form action=\"{{ router.url('fighter_delete', {'id' : fighter.getID()}) }}\" method=\"post\" class=\"d-inline\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce combattant ?')\">
            <button type=\"submit\" class=\"btn btn-sm btn-danger\" >
                Supprimer
            </button>
        </form>
    </td>
</tr>", "admin/fighters/_fighterTable.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\fighters\\_fighterTable.twig");
    }
}
