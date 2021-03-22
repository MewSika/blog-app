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
class __TwigTemplate_ae22fd283e11d0786faaa9d1ae0723d1d111066a89ae13fd21d1e5b55bd07a04 extends Template
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
        echo "


<div class=\"card shadow-sm p-2 mb-4 bg-white border-0 rounded\">
    <div class=\"card-body d-flex\">
        <div id=\"author-thumbnail\" class=\"me-3\">
            <img width=\"40\" height=\"40\" class=\"rounded-circle\" src=\"/img/authors/default.png\" lazy=\"loaded\">
        </div>
        <div class=\"d-flex flex-column w-100\">
            <div id=\"header\" class=\"d-flex\">
                <p class=\"fw-bold me-2\">Auteur name</p>
                <p class=\"text-muted\">";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "createdAt", [], "any", false, false, false, 12), "long"), "html", null, true);
        echo "</p>
            </div>
            <p class=\"m-0 h6\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getContent", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
        </div>
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
        return array (  55 => 14,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


<div class=\"card shadow-sm p-2 mb-4 bg-white border-0 rounded\">
    <div class=\"card-body d-flex\">
        <div id=\"author-thumbnail\" class=\"me-3\">
            <img width=\"40\" height=\"40\" class=\"rounded-circle\" src=\"/img/authors/default.png\" lazy=\"loaded\">
        </div>
        <div class=\"d-flex flex-column w-100\">
            <div id=\"header\" class=\"d-flex\">
                <p class=\"fw-bold me-2\">Auteur name</p>
                <p class=\"text-muted\">{{ message.createdAt|date('long') }}</p>
            </div>
            <p class=\"m-0 h6\">{{ message.getContent }}</p>
        </div>
    </div>
</div>", "blog/_message.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\blog\\_message.twig");
    }
}
