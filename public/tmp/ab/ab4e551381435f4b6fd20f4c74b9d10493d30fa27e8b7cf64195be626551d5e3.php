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
class __TwigTemplate_a0b173f576b4cdd61296a3bd1d36778794406b778458e28d262181e3038dbc1f extends Template
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
        // line 12
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
            echo "    <li>
        <a class=\"nav-link text-white p-1 d-inline-block\" href=";
            // line 9
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
        return array (  96 => 9,  93 => 8,  79 => 7,  63 => 3,  60 => 2,  45 => 1,  40 => 12,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro item(link, title, name)%}
    <li class=\"text-center col-6 col-md-4 col-lg-2\">
        <a class=\"nav-link navhover {{ activeClass(name) }}\" href={{link}}>{{ title }}</a>
    </li>
{% endmacro %}

{% macro footeritem(link, title)%}
    <li>
        <a class=\"nav-link text-white p-1 d-inline-block\" href={{link}}>{{ title }}</a>
    </li>
{% endmacro %}

", "_navbar.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\_navbar.twig");
    }
}
