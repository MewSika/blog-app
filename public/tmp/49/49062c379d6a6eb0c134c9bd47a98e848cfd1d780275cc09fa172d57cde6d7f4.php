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

/* _form.twig */
class __TwigTemplate_9127346b6239050ebc72d5838293eb8e7395c68629b8d3c325c498c19e005b87 extends Template
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
    }

    // line 1
    public function macro_form(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    <form class=\"form-inline form-navbar my-2 my-lg-0 ms-auto\" action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "blog"], "method", false, false, false, 2), "html", null, true);
            echo "\">
        <input class=\"form-control\" name=\"q\" type=\"text\" placeholder=\"Rechercher\">
    </form>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro form() %}
    <form class=\"form-inline form-navbar my-2 my-lg-0 ms-auto\" action=\"{{ router.url('blog')}}\">
        <input class=\"form-control\" name=\"q\" type=\"text\" placeholder=\"Rechercher\">
    </form>
{% endmacro %}", "_form.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\_form.twig");
    }
}
