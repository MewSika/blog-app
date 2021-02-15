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
        // line 12
        echo "
";
    }

    // line 1
    public function macro_input($__name__ = null, $__label__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "<div class=\"input-group mb-2\">
    <label class=\"input-group-text\" for=\"";
            // line 3
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "</label>
    <input type=\"text\" class=\"form-control\" id=\"";
            // line 4
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
    <div class=\"invalid-feedback\">
        ";
            // line 6
            if (($context["error"] ?? null)) {
                echo " 
            Votre pseudonyme doit comporter 3 caractères.
        ";
            }
            // line 9
            echo "    </div>
</div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 13
    public function macro_email($__name__ = null, $__label__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 14
            echo "<div class=\"input-group mb-2\">
    <label class=\"input-group-text\" for=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "</label>
    <input type=\"email\" class=\"form-control\" id=\"";
            // line 16
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
    <div class=\"invalid-feedback\">
      Veuillez indiquer un email valide
    </div>
</div>
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
        return array (  112 => 16,  106 => 15,  103 => 14,  89 => 13,  78 => 9,  72 => 6,  65 => 4,  59 => 3,  56 => 2,  42 => 1,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro input(name, label) %}
<div class=\"input-group mb-2\">
    <label class=\"input-group-text\" for=\"{{name}}\">{{label}}</label>
    <input type=\"text\" class=\"form-control\" id=\"{{ name }}\" name=\"{{name}}\">
    <div class=\"invalid-feedback\">
        {% if error %} 
            Votre pseudonyme doit comporter 3 caractères.
        {% endif %}
    </div>
</div>
{% endmacro %}

{% macro email(name, label) %}
<div class=\"input-group mb-2\">
    <label class=\"input-group-text\" for=\"{{name}}\">{{label}}</label>
    <input type=\"email\" class=\"form-control\" id=\"{{ name }}\" name=\"{{name}}\">
    <div class=\"invalid-feedback\">
      Veuillez indiquer un email valide
    </div>
</div>
{% endmacro %}
", "_form.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\_form.twig");
    }
}
