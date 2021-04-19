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

/* blog/_breadcrumb.twig */
class __TwigTemplate_157ace0022917aac82c67c62579fce052ddba774812ae93b203b5dd8220518e7 extends Template
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
        echo "<nav aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item fst-italic\"><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "home"], "method", false, false, false, 3), "html", null, true);
        echo "\" class=\"text-muted\">Accueil</a></li>
        <li class=\"breadcrumb-item fst-italic\"><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "blog"], "method", false, false, false, 4), "html", null, true);
        echo "\" class=\"text-muted\">Articles</a></li>
        <li class=\"breadcrumb-item fst-italic\" aria-current=\"page\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getName", [], "any", false, false, false, 5), "html", null, true);
        echo "</li>
    </ol>
</nav>";
    }

    public function getTemplateName()
    {
        return "blog/_breadcrumb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item fst-italic\"><a href=\"{{ router.url('home') }}\" class=\"text-muted\">Accueil</a></li>
        <li class=\"breadcrumb-item fst-italic\"><a href=\"{{ router.url('blog') }}\" class=\"text-muted\">Articles</a></li>
        <li class=\"breadcrumb-item fst-italic\" aria-current=\"page\">{{ post.getName }}</li>
    </ol>
</nav>", "blog/_breadcrumb.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\blog\\_breadcrumb.twig");
    }
}
