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

/* _navbar.twig */
class __TwigTemplate_910976e53468ffe8ffa84ab0d64f5f0a9c866737342af47b685c7c5cee5e78a5 extends Template
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
        // line 6
        echo "
";
        // line 10
        echo "
";
    }

    // line 1
    public function macro_item($__link__ = null, $__title__ = null, $__name__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "link" => $__link__,
            "title" => $__title__,
            "name" => $__name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    <li class=\"text-center col-6 col-md-4 col-lg-2\">
        <a class=\"nav-link navhover ";
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\CustomExtensions']->activeClass($context, ($context["name"] ?? null)), "html", null, true);
            echo "\" href=";
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</a>
    </li>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 7
    public function macro_footeritem($__link__ = null, $__title__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "link" => $__link__,
            "title" => $__title__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 8
            echo "    &nbsp;<a class=\"nav-link text-secondary p-0 d-inline-block\" href=";
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</a>&nbsp;
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "_navbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 8,  79 => 7,  63 => 3,  60 => 2,  45 => 1,  40 => 10,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro item(link, title, name)%}
    <li class=\"text-center col-6 col-md-4 col-lg-2\">
        <a class=\"nav-link navhover {{ activeClass(name) }}\" href={{link}}>{{ title }}</a>
    </li>
{% endmacro %}

{% macro footeritem(link, title)%}
    &nbsp;<a class=\"nav-link text-secondary p-0 d-inline-block\" href={{link}}>{{ title }}</a>&nbsp;
{% endmacro %}

", "_navbar.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\_navbar.twig");
    }
}
