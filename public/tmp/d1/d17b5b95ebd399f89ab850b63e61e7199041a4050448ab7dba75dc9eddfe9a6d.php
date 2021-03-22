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

/* admin/comments/_commentTable.twig */
class __TwigTemplate_433e8adeffee1a7a240061df76a19c45c613a3533529938548393768b71952d8 extends Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getIDUser", [], "any", false, false, false, 2), "html", null, true);
        echo "</td>
    <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "comments_manage", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getId", [], "any", false, false, false, 3)]], "method", false, false, false, 3), "html", null, true);
        echo "\"}>
    <td>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getContent", [], "any", false, false, false, 4), "html", null, true);
        echo "</td>
    <td>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getRole", [], "any", false, false, false, 5), "html", null, true);
        echo "</td>
    <td class=\"text-end\">
        <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "admin_message_authorize", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getId", [], "method", false, false, false, 7)]], "method", false, false, false, 7), "html", null, true);
        echo "\" method=\"post\" class=\"d-inline\">
            <button type=\"submit\" name=\"authorize\" class=\"btn btn-sm btn-success\" >
                Autoriser
            </button>
        </form>
        <form action=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "admin_message_moderate", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getId", [], "method", false, false, false, 12)]], "method", false, false, false, 12), "html", null, true);
        echo "\" method=\"post\" class=\"d-inline\">
            <button type=\"submit\" name=\"moderate\" class=\"btn btn-sm btn-warning\" >
                Supprimer
            </button>
        </form>
    </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "admin/comments/_commentTable.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  57 => 7,  52 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr>
    <td>#{{ message.getIDUser }}</td>
    <a href=\"{{ router.url('comments_manage', {'id' : message.getId}) }}\"}>
    <td>{{ message.getContent }}</td>
    <td>{{ message.getRole }}</td>
    <td class=\"text-end\">
        <form action=\"{{ router.url('admin_message_authorize', {'id' : message.getId()}) }}\" method=\"post\" class=\"d-inline\">
            <button type=\"submit\" name=\"authorize\" class=\"btn btn-sm btn-success\" >
                Autoriser
            </button>
        </form>
        <form action=\"{{ router.url('admin_message_moderate', {'id' : message.getId()}) }}\" method=\"post\" class=\"d-inline\">
            <button type=\"submit\" name=\"moderate\" class=\"btn btn-sm btn-warning\" >
                Supprimer
            </button>
        </form>
    </td>
</tr>", "admin/comments/_commentTable.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\comments\\_commentTable.twig");
    }
}
