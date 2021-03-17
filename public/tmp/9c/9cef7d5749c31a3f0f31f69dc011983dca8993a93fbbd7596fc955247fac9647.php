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

/* fighters/_card.twig */
class __TwigTemplate_2a1166a0a214f504f91966a83623f74cdd21491536c7cce2fae06131099d4ed7 extends Template
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
        echo "<div class=\"card shadow p-2 mb-4 bg-white rounded\">
    <div class=\"row\">
        <div class=\"col-12 col-md-2 m-auto\">
            <h4 class=\"card-title text-center m-0\"><p class=\"text-decoration-none text-secondary fw-bold mb-0\">
                ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["weight"] ?? null), "getName", [], "any", false, false, false, 5), "html", null, true);
        echo "
            </p></h3>
        </div>
        <div class=\"col-12 col-md-3 height_crop text-center\">
            ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getImage", [], "method", false, false, false, 9)) {
            // line 10
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "fighter", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getID", [], "any", false, false, false, 10), "name" => twig_lower_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getName", [], "any", false, false, false, 10), [" " => "-"]))]], "method", false, false, false, 10), "html", null, true);
            echo "\">
                <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getimageURL", [0 => "medium"], "method", false, false, false, 11), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getName", [], "method", false, false, false, 11), "html", null, true);
            echo "\">
            </a>
            ";
        }
        // line 14
        echo "        </div>
        <div class=\"col-12 col-md-4 m-auto text-center\">
            <h4>
                ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getChamp", [], "any", false, false, false, 17) === 1)) {
            // line 18
            echo "                    <img src=\"/img/authors/ufc-belt-small.png\" alt=\"ufc belt\">
                ";
        }
        // line 20
        echo "                <a class=\"text-dark text-decoration-none text-center fw-bold\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "fighter", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getID", [], "method", false, false, false, 20), "name" => twig_lower_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getName", [], "any", false, false, false, 20), [" " => "-"]))]], "method", false, false, false, 20), "html", null, true);
        echo "\">
                    ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getName", [], "any", false, false, false, 21), "html", null, true);
        echo "
                </a>
            </h4>
            <p class=\"text-dark text-center fw-bold mb-0\">
                ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getWin", [], "any", false, false, false, 25), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getLose", [], "any", false, false, false, 25), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getDraw", [], "any", false, false, false, 25), "html", null, true);
        echo " (V - D - N)
            </p>
        </div>
        <div class=\"col-12 col-md-3 m-auto text-center\">
            <a class=\"text-secondary text-decoration-none fw-bold\" href=\"
                ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "category_fighter", 1 => ["name" => twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["weight"] ?? null), "getName", [], "any", false, false, false, 30)), "id" => twig_get_attribute($this->env, $this->source, ($context["weight"] ?? null), "getID", [], "any", false, false, false, 30), "sex" => twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getSex", [], "any", false, false, false, 30)]], "method", false, false, false, 30), "html", null, true);
        echo "\">Voir les ";
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getSex", [], "any", false, false, false, 30), 1))) ? ("combattants") : ("combattantes"));
        echo " de la catégorie ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["weight"] ?? null), "getName", [], "any", false, false, false, 30), "html", null, true);
        echo "</a>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "fighters/_card.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 30,  88 => 25,  81 => 21,  76 => 20,  72 => 18,  70 => 17,  65 => 14,  57 => 11,  52 => 10,  50 => 9,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card shadow p-2 mb-4 bg-white rounded\">
    <div class=\"row\">
        <div class=\"col-12 col-md-2 m-auto\">
            <h4 class=\"card-title text-center m-0\"><p class=\"text-decoration-none text-secondary fw-bold mb-0\">
                {{weight.getName}}
            </p></h3>
        </div>
        <div class=\"col-12 col-md-3 height_crop text-center\">
            {% if fighter.getImage() %}
            <a href=\"{{ router.url('fighter', {'id' : fighter.getID, 'name' : fighter.getName|replace({' ': '-'})|lower}) }}\">
                <img src=\"{{ fighter.getimageURL('medium') }}\" alt=\"{{ fighter.getName() }}\">
            </a>
            {% endif %}
        </div>
        <div class=\"col-12 col-md-4 m-auto text-center\">
            <h4>
                {% if fighter.getChamp is same as 1 %}
                    <img src=\"/img/authors/ufc-belt-small.png\" alt=\"ufc belt\">
                {% endif %}
                <a class=\"text-dark text-decoration-none text-center fw-bold\" href=\"{{ router.url('fighter', {'id' : fighter.getID(), 'name' : fighter.getName |replace({' ': '-'})|lower}) }}\">
                    {{ fighter.getName}}
                </a>
            </h4>
            <p class=\"text-dark text-center fw-bold mb-0\">
                {{ fighter.getWin }} - {{ fighter.getLose }} - {{ fighter.getDraw}} (V - D - N)
            </p>
        </div>
        <div class=\"col-12 col-md-3 m-auto text-center\">
            <a class=\"text-secondary text-decoration-none fw-bold\" href=\"
                {{ router.url('category_fighter', {'name': weight.getName|lower, 'id': weight.getID, 'sex': fighter.getSex}) }}\">Voir les {{ fighter.getSex == 1 ? 'combattants' : 'combattantes'}} de la catégorie {{ weight.getName }}</a>
        </div>
    </div>
</div>

", "fighters/_card.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\fighters\\_card.twig");
    }
}
