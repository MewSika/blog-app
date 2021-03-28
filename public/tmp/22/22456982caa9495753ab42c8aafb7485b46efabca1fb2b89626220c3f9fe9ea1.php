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

/* blog/_message.twig */
class __TwigTemplate_83823864e13f12a87672588bd1044b5a63ec9610e3e978f7cbb6285fa2734d2d extends Template
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
        echo "<div class=\"card shadow-sm p-2 mb-2 bg-white border-0 rounded\">
    <div class=\"card-body d-flex\">
        <div id=\"author-thumbnail\" class=\"me-3\">
            <img width=\"40\" height=\"40\" class=\"rounded-circle\" src=\"/img/authors/default.png\" lazy=\"loaded\">
        </div>
        <div class=\"d-flex flex-column w-100\">
            ";
        // line 7
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getModerated", [], "any", false, false, false, 7), 1))) {
            // line 8
            echo "            <div id=\"header\" class=\"d-flex\">
            <p class=\"fw-bold me-2 align-self-end\">";
            // line 9
            ((twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "username", [], "any", false, false, false, 9)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "username", [], "any", false, false, false, 9), "html", null, true))) : (print ("Anon")));
            echo "</p>
            <p class=\"text-muted small align-self-end\">";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "createdAt", [], "any", false, false, false, 10), "h:m:i - d.m.Y"), "html", null, true);
            echo "</p>
                ";
            // line 11
            if ( !(null === ($context["user"] ?? null))) {
                // line 12
                echo "                    <div class=\"dropdown ms-auto\">
                        <button class=\"btn btn-sm btn-outline-secondary border-0 ";
                // line 13
                (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getReport", [], "any", false, false, false, 13), 0))) ? (print (twig_escape_filter($this->env, (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getReport", [], "any", false, false, false, 13), 0)), "html", null, true))) : (print ("disabled")));
                echo "\" type=\"button\" id=\"reportButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"bi bi-flag\"></i>
                        </button>
                        <form method=\"post\" action=\"";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "report", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getId", [], "any", false, false, false, 16)]], "method", false, false, false, 16), "html", null, true);
                echo "\" class=\"dropdown-menu\" aria-labelledby=\"reportButton\" onsubmit=\"return confirm('Signaler ce commentaire ?')\">
                            <input name=\"report\" type=\"hidden\" value=\"1\">
                            <input type=\"submit\" class=\"dropdown-item\" value=\"Signaler\" >
                        </form>
                    </div>
                ";
            }
            // line 22
            echo "            </div>
            <p class=\"m-0 h6\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getContent", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
            ";
        } else {
            // line 25
            echo "            <p class=\"m-0 small fst-italic text-secondary\">Le message a été supprimé</p>
            ";
        }
        // line 27
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "blog/_message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 27,  86 => 25,  81 => 23,  78 => 22,  69 => 16,  63 => 13,  60 => 12,  58 => 11,  54 => 10,  50 => 9,  47 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card shadow-sm p-2 mb-2 bg-white border-0 rounded\">
    <div class=\"card-body d-flex\">
        <div id=\"author-thumbnail\" class=\"me-3\">
            <img width=\"40\" height=\"40\" class=\"rounded-circle\" src=\"/img/authors/default.png\" lazy=\"loaded\">
        </div>
        <div class=\"d-flex flex-column w-100\">
            {% if message.getModerated != 1 %}
            <div id=\"header\" class=\"d-flex\">
            <p class=\"fw-bold me-2 align-self-end\">{{ message.username ?: \"Anon\" }}</p>
            <p class=\"text-muted small align-self-end\">{{ message.createdAt|date('h:m:i - d.m.Y') }}</p>
                {% if user is not null %}
                    <div class=\"dropdown ms-auto\">
                        <button class=\"btn btn-sm btn-outline-secondary border-0 {{ message.getReport == 0 ?: 'disabled' }}\" type=\"button\" id=\"reportButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"bi bi-flag\"></i>
                        </button>
                        <form method=\"post\" action=\"{{router.url('report', { 'id' : message.getId})}}\" class=\"dropdown-menu\" aria-labelledby=\"reportButton\" onsubmit=\"return confirm('Signaler ce commentaire ?')\">
                            <input name=\"report\" type=\"hidden\" value=\"1\">
                            <input type=\"submit\" class=\"dropdown-item\" value=\"Signaler\" >
                        </form>
                    </div>
                {% endif %}
            </div>
            <p class=\"m-0 h6\">{{ message.getContent }}</p>
            {% else %}
            <p class=\"m-0 small fst-italic text-secondary\">Le message a été supprimé</p>
            {% endif %}
        </div>
    </div>
</div>", "blog/_message.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\blog\\_message.twig");
    }
}
