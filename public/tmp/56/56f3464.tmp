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

/* blog/_form.twig */
class __TwigTemplate_6dcaf9642795a23df849c5a0279ed684c8aa7297ee02cb7f2ec171d633ccdbaa extends Template
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
        // line 7
        echo "
";
    }

    // line 1
    public function macro_textarea($__name__ = null, $__label__ = null, $__value__ = null, $__placeholder__ = null, $__options__ = [], $__rows__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "label" => $__label__,
            "value" => $__value__,
            "placeholder" => $__placeholder__,
            "options" => $__options__,
            "rows" => $__rows__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "class", [], "any", false, false, false, 2), "html", null, true);
            echo "\">
        <label for=\"";
            // line 3
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"text-secondary small d-none\">";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "</label>
        <textarea rows=\"";
            // line 4
            echo twig_escape_filter($this->env, ($context["rows"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, ($context["placeholder"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "</textarea>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 8
    public function macro_input($__name__ = null, $__label__ = null, $__value__ = null, $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "label" => $__label__,
            "value" => $__value__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 9
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "class", [], "any", false, false, false, 9), "html", null, true);
            echo "\">
        <label for=\"";
            // line 10
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"text-secondary small\">";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "</label>
        <input type =\"";
            // line 11
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "type", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "type", [], "any", false, false, false, 11), "text")) : ("text")), "html", null, true);
            echo "\" name=\"content\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"form-control\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "</textarea>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "blog/_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 11,  112 => 10,  107 => 9,  91 => 8,  71 => 4,  65 => 3,  60 => 2,  42 => 1,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro textarea(name, label, value = null, placeholder = null, options = [], rows) %}
    <div class=\"form-group {{ options.class }}\">
        <label for=\"{{name}}\" class=\"text-secondary small d-none\">{{label}}</label>
        <textarea rows=\"{{rows}}\" name=\"{{name}}\" id=\"{{name}}\" class=\"form-control\" placeholder=\"{{placeholder}}\">{{ value }}</textarea>
    </div>
{% endmacro %}

{% macro input(name, label, value = null, options = []) %}
    <div class=\"form-group {{ options.class }}\">
        <label for=\"{{name}}\" class=\"text-secondary small\">{{label}}</label>
        <input type =\"{{ options.type | default('text') }}\" name=\"content\" id=\"{{name}}\" class=\"form-control\">{{ value }}</textarea>
    </div>
{% endmacro %}", "blog/_form.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\blog\\_form.twig");
    }
}
