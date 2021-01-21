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
class __TwigTemplate_4e164ca6ced40e93782429099e8ddf11b6e0bdfdd8203393b306e5358af29466 extends Template
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
    public function macro_item($__link__ = null, $__title__ = null, ...$__varargs__)
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
            // line 2
            echo "
    <li class=\"\$class\">
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
        return "_navbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 4,  53 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro item(link, title)%}

    <li class=\"\$class\">
        <a class=\"nav-link\" href={{link}}>{{ title }}</a>
    </li>

{% endmacro %}", "_navbar.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\_navbar.twig");
    }
}
