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
            echo "    <li class=\"nav_item text-center col-3 col-lg-5\">
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
        return array (  60 => 3,  57 => 2,  42 => 1,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro item(link, title, name)%}
    <li class=\"nav_item text-center col-3 col-lg-5\">
        <a class=\"nav-link navhover {{ activeClass(name) }}\" href={{link}}>{{ title }}</a>
    </li>
{% endmacro %}

", "_navbar.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\_navbar.twig");
    }
}
