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

/* admin/post/_postTable.twig */
class __TwigTemplate_5ff5de251f47a7b09a88b2a4adf8c97f2a4e2a70da1afdfb99cd6413cafd0714 extends Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getID", [], "method", false, false, false, 2), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "admin_post", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getID", [], "method", false, false, false, 3)]], "method", false, false, false, 3), "html", null, true);
        echo "\" class=\"text-dark fw-bold\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getName", [], "method", false, false, false, 3), "html", null, true);
        echo "</a></td>
    <td class=\"fst-italic\">";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getCreatedAt", [], "method", false, false, false, 4), "d/m/Y"), "html", null, true);
        echo "</td>
    <td class=\"text-end\">
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "admin_post", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getID", [], "method", false, false, false, 6)]], "method", false, false, false, 6), "html", null, true);
        echo "\" class=\"btn btn-sm btn-info\">
            Editer
        </a>
        <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "admin_post_delete", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getID", [], "method", false, false, false, 9)]], "method", false, false, false, 9), "html", null, true);
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
        return "admin/post/_postTable.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  55 => 6,  50 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr>
    <td>#{{ post.getID() }}</td>
    <td><a href=\"{{ router.url('admin_post', {'id' : post.getID()}) }}\" class=\"text-dark fw-bold\">{{ post.getName() }}</a></td>
    <td class=\"fst-italic\">{{ post.getCreatedAt()|date('d/m/Y') }}</td>
    <td class=\"text-end\">
        <a href=\"{{ router.url('admin_post', {'id' : post.getID()}) }}\" class=\"btn btn-sm btn-info\">
            Editer
        </a>
        <form action=\"{{ router.url('admin_post_delete', {'id' : post.getID()}) }}\" method=\"post\" class=\"d-inline\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer l\\'article ?')\">
            <button type=\"submit\" class=\"btn btn-sm btn-danger\" >
                Supprimer
            </button>
        </form>
    </td>
</tr>", "admin/post/_postTable.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\post\\_postTable.twig");
    }
}
