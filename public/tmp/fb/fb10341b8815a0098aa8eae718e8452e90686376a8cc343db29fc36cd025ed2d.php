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

/* _side.twig */
class __TwigTemplate_53243d06d01daee63602ea50e2e61a3b71d14602daf4d87e374eaa1e4c6854c8 extends Template
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
        $this->loadTemplate("/sidebar/posts.twig", "_side.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("/sidebar/categories.twig", "_side.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "_side.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '/sidebar/posts.twig' %}

{% include '/sidebar/categories.twig' %}
", "_side.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\_side.twig");
    }
}
