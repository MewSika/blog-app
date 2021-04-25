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

/* admin/_menu.twig */
class __TwigTemplate_fdbb0404f50a3a9f520b1e5dec9544b9d92c0b97a78edc08b8e1fe145a5e74f1 extends Template
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
";
    }

    // line 2
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
            // line 3
            echo "    <li class=\"nav-item ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\CustomExtensions']->activeClass($context, ($context["name"] ?? null)), "html", null, true);
            echo "\">
        <a class=\"nav-link\" href=";
            // line 4
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
        return "admin/_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 4,  57 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% macro item(link, title, name)%}
    <li class=\"nav-item {{ activeClass(name) }}\">
        <a class=\"nav-link\" href={{link}}>{{ title }}</a>
    </li>
{% endmacro %}", "admin/_menu.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\_menu.twig");
    }
}
