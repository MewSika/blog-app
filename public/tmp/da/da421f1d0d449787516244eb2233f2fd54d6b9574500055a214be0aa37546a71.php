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

/* admin/users/_userTable.twig */
class __TwigTemplate_bbd2db8a625354685c7f160445ac5a90c82fb875f9a4be95ff5af433d677916b extends Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getID", [], "method", false, false, false, 2), "html", null, true);
        echo "</td>
    <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "admin_user", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getId", [], "any", false, false, false, 3)]], "method", false, false, false, 3), "html", null, true);
        echo "\"}>
    <td><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "admin_user", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getId", [], "any", false, false, false, 4)]], "method", false, false, false, 4), "html", null, true);
        echo "\" class=\"text-dark fw-bold\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getUsername", [], "method", false, false, false, 4), "html", null, true);
        echo "</a></td>
    <td>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getMail", [], "any", false, false, false, 5), "html", null, true);
        echo "</td>
    <td>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getRole", [], "any", false, false, false, 6), "html", null, true);
        echo "</td>
    <td class=\"text-end\">
        <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "admin_user", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getId", [], "method", false, false, false, 8)]], "method", false, false, false, 8), "html", null, true);
        echo "\" class=\"btn btn-sm btn-info\">
            Editer
        </a>
        <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "admin_user_delete", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getId", [], "method", false, false, false, 11)]], "method", false, false, false, 11), "html", null, true);
        echo "\" method=\"post\" class=\"d-inline\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cet utilisateur ?')\">
            <button type=\"submit\" class=\"btn btn-sm btn-danger\" >
                Supprimer
            </button>
        </form>
    </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "admin/users/_userTable.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 11,  63 => 8,  58 => 6,  54 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr>
    <td>#{{ user.getID() }}</td>
    <a href=\"{{ router.url('admin_user', {'id' : user.getId}) }}\"}>
    <td><a href=\"{{ router.url('admin_user', {'id' : user.getId}) }}\" class=\"text-dark fw-bold\">{{ user.getUsername() }}</a></td>
    <td>{{ user.getMail }}</td>
    <td>{{ user.getRole }}</td>
    <td class=\"text-end\">
        <a href=\"{{ router.url('admin_user', {'id' : user.getId()}) }}\" class=\"btn btn-sm btn-info\">
            Editer
        </a>
        <form action=\"{{ router.url('admin_user_delete', {'id' : user.getId()}) }}\" method=\"post\" class=\"d-inline\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cet utilisateur ?')\">
            <button type=\"submit\" class=\"btn btn-sm btn-danger\" >
                Supprimer
            </button>
        </form>
    </td>
</tr>", "admin/users/_userTable.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\users\\_userTable.twig");
    }
}
