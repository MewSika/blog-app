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

/* admin/users/_form.twig */
class __TwigTemplate_7b1851534e77f8c8a15e3ef8c02bcfa4082c06086b19e52bb9b6a068c17d512f extends Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "users_manage"], "method", false, false, false, 2), "html", null, true);
        echo "\" class=\"text-dark\"><i class=\"bi bi-arrow-left\"></i> Retour vers la gestion utilisateurs</a>
</p>
<form action=\"\" method=\"post\" class=\"mb-4\">
    <div class=\"row\">
    ";
        // line 6
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "username", 1 => "Nom", 2 => "nom", 3 => "col-12 col-lg-5"], "method", false, false, false, 6);
        echo "
    ";
        // line 7
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "password", 1 => "password", 2 => "Mot de passe...", 3 => "col-12 col-lg-5"], "method", false, false, false, 7);
        echo "
    ";
        // line 8
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "mail", 1 => "Email", 2 => "mail", 3 => "col-12 col-lg-5"], "method", false, false, false, 8);
        echo "
    ";
        // line 9
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "role", 1 => "Role", 2 => "role", 3 => "col-12 col-lg-5"], "method", false, false, false, 9);
        echo "
    </div>
    <div class=\"ml-4\">
    ";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "checkbox", [0 => "newsletter", 1 => "Newsletter"], "method", false, false, false, 12);
        echo "
    </div>
    <button name=\"\" type=\"submit\" class=\"btn btn-success\">
        ";
        // line 15
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getID", [], "any", false, false, false, 15))) {
            // line 16
            echo "            Modifier
        ";
        } else {
            // line 18
            echo "            Créer
        ";
        }
        // line 20
        echo "    </button>
</form>";
    }

    public function getTemplateName()
    {
        return "admin/users/_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  77 => 18,  73 => 16,  71 => 15,  65 => 12,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"fw-bold mb-3\">
    <a href=\"{{ router.url('users_manage')}}\" class=\"text-dark\"><i class=\"bi bi-arrow-left\"></i> Retour vers la gestion utilisateurs</a>
</p>
<form action=\"\" method=\"post\" class=\"mb-4\">
    <div class=\"row\">
    {{ form.input('username', 'Nom', 'nom', 'col-12 col-lg-5')|raw }}
    {{ form.input('password', 'password', 'Mot de passe...', 'col-12 col-lg-5')|raw }}
    {{ form.input('mail', 'Email', 'mail', 'col-12 col-lg-5')|raw }}
    {{ form.input('role', 'Role', 'role', 'col-12 col-lg-5')|raw }}
    </div>
    <div class=\"ml-4\">
    {{ form.checkbox(\"newsletter\", \"Newsletter\") | raw}}
    </div>
    <button name=\"\" type=\"submit\" class=\"btn btn-success\">
        {% if user.getID is not null %}
            Modifier
        {% else %}
            Créer
        {% endif %}
    </button>
</form>", "admin/users/_form.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\users\\_form.twig");
    }
}
