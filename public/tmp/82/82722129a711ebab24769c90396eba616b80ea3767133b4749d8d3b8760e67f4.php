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

/* _navSignin.twig */
class __TwigTemplate_de2180dd850387f0c02e94d6d541794666629d303848c0f783336feb2f5eb2e0 extends Template
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
        echo "<div class=\"btn-group btn-sm m-0 col-1\">
    <button class=\"btn btn-outline-secondary border-0\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        <i class=\"bi bi-person\"></i>
    </button>
    <div class=\"dropdown-menu\">
        ";
        // line 6
        if ( !(null === ($context["user"] ?? null))) {
            // line 7
            echo "            <a class=\"dropdown-item fw-bold\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "account"], "method", false, false, false, 7), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getUsername", [], "any", false, false, false, 7), "html", null, true);
            echo "</a>
            <div class=\"dropdown-divider\"></div>
            <a class=\"dropdown-item\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "f_logout"], "method", false, false, false, 9), "html", null, true);
            echo "\">Se déconnecter</a>
        ";
        } else {
            // line 11
            echo "        <a class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "f_login"], "method", false, false, false, 11), "html", null, true);
            echo "\">Se connecter</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "signin"], "method", false, false, false, 13), "html", null, true);
            echo "\">S'inscrire</a>
        ";
        }
        // line 15
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "_navSignin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  65 => 13,  59 => 11,  54 => 9,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"btn-group btn-sm m-0 col-1\">
    <button class=\"btn btn-outline-secondary border-0\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        <i class=\"bi bi-person\"></i>
    </button>
    <div class=\"dropdown-menu\">
        {% if user is not null %}
            <a class=\"dropdown-item fw-bold\" href=\"{{router.url('account')}}\"> {{ user.getUsername }}</a>
            <div class=\"dropdown-divider\"></div>
            <a class=\"dropdown-item\" href=\"{{ router.url('f_logout')}}\">Se déconnecter</a>
        {% else %}
        <a class=\"dropdown-item\" href=\"{{ router.url('f_login')}}\">Se connecter</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" href=\"{{ router.url('signin')}}\">S'inscrire</a>
        {% endif %}
    </div>
</div>", "_navSignin.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\_navSignIn.twig");
    }
}
