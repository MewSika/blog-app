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

/* admin/fighters/_form.twig */
class __TwigTemplate_ffabdca4069ad5db0dce9374629dfc985edba3269b00fee0f666ded5e249da74 extends Template
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
        echo "<p class=\"fw-bold mb-3\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "fighters_manage"], "method", false, false, false, 2), "html", null, true);
        echo "\" class=\"text-dark\"><i class=\"bi bi-arrow-left\"></i> Retour vers la gestion des combattants</a>
</p>
<form action=\"\" method=\"post\" class=\"mb-4\" enctype=\"multipart/form-data\">
    ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getImage", [], "method", false, false, false, 5)) {
            // line 6
            echo "        <p class=\"fw-bold\">Image à la une :</p>
        <img src=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getImageURL", [0 => "medium"], "method", false, false, false, 7), "html", null, true);
            echo "\" alt=\"\" class=\"rounded shadow-sm mb-4\" loading=\"lazy\">
    ";
        }
        // line 9
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "checkbox", [0 => "champ", 1 => "Champion", 2 => "pl-4"], "method", false, false, false, 9);
        echo "
    <div class=\"row\">
        ";
        // line 11
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "name", 1 => "Nom", 2 => null, 3 => "col-12 col-lg-4"], "method", false, false, false, 11);
        echo "
        ";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "dob", 1 => "Date de naissance", 2 => null, 3 => "col-12 col-lg-4"], "method", false, false, false, 12);
        echo "
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sexes"] ?? null));
        foreach ($context['_seq'] as $context["value"] => $context["key"]) {
            // line 14
            echo "            ";
            echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "radio", [0 => "sex", 1 => $context["key"], 2 => $context["value"], 3 => "col-12 col-lg-1"], "method", false, false, false, 14);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </div>
    <div class=\"row\">
        ";
        // line 18
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "win", 1 => "Victoire", 2 => null, 3 => "col-12 col-lg-3"], "method", false, false, false, 18);
        echo "
        ";
        // line 19
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "lose", 1 => "Défaite", 2 => null, 3 => "col-12 col-lg-3"], "method", false, false, false, 19);
        echo "
        ";
        // line 20
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "draw", 1 => "Egalité", 2 => null, 3 => "col-12 col-lg-3"], "method", false, false, false, 20);
        echo "
        ";
        // line 21
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "nc", 1 => "No contest", 2 => null, 3 => "col-12 col-lg-3"], "method", false, false, false, 21);
        echo "
    </div>

    <h5 class=\"p-0\"> Catégorie de Poids </h5><hr class=\"mt-0\">
    <div class=\"row\">

        ";
        // line 27
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "select", [0 => "weight_cat_id", 1 => "Catégories de poids", 2 => ($context["categories"] ?? null), 3 => true, 4 => "col-12 col-lg-8 m-0"], "method", false, false, false, 27);
        echo "
    </div>
    <div class=\"row\">
        ";
        // line 30
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "stance", 1 => "Garde", 2 => null, 3 => "col-12 col-lg-3"], "method", false, false, false, 30);
        echo "
        ";
        // line 31
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "weight", 1 => "Poids (kg)", 2 => null, 3 => "col-12 col-lg-3"], "method", false, false, false, 31);
        echo "
        ";
        // line 32
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "height", 1 => "Taille (cm)", 2 => null, 3 => "col-12 col-lg-3"], "method", false, false, false, 32);
        echo "
        ";
        // line 33
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "reach", 1 => "Portée (cm)", 2 => null, 3 => "col-12 col-lg-3"], "method", false, false, false, 33);
        echo "
    </div>
    <h5> Statistiques de combat</h5><hr class=\"mt-0\">
    <div class=\"row\">
        ";
        // line 37
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "SLpM", 1 => "Frappes portées /mn", 2 => null, 3 => "col-12 col-lg-4"], "method", false, false, false, 37);
        echo "
        ";
        // line 38
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "Str_Acc", 1 => "Précision frappes %", 2 => null, 3 => "col-12 col-lg-4"], "method", false, false, false, 38);
        echo "
        ";
        // line 39
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "SApM", 1 => "Frappes encaissées/mn", 2 => null, 3 => "col-12 col-lg-4"], "method", false, false, false, 39);
        echo "
        ";
        // line 40
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "Str_Def", 1 => "Précision défense %", 2 => null, 3 => "col-12 col-lg-4"], "method", false, false, false, 40);
        echo "
        ";
        // line 41
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "TD_Avg", 1 => "Takedown/15mn", 2 => null, 3 => "col-12 col-lg-4"], "method", false, false, false, 41);
        echo "
        ";
        // line 42
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "TD_Acc", 1 => "Précision TD %", 2 => null, 3 => "col-12 col-lg-4"], "method", false, false, false, 42);
        echo "
        ";
        // line 43
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "TD_Def", 1 => "Déf. TD %", 2 => null, 3 => "col-12 col-lg-4"], "method", false, false, false, 43);
        echo "
        ";
        // line 44
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "Sub_Avg", 1 => "Tent. soumission /15mn", 2 => null, 3 => "col-12 col-lg-4"], "method", false, false, false, 44);
        echo "
    </div>
    ";
        // line 46
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "last_updated", 1 => "Dernière modification"], "method", false, false, false, 46);
        echo "
    ";
        // line 47
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [0 => "image", 1 => "Img"], "method", false, false, false, 47);
        echo "

    <button name=\"\" type=\"submit\" class=\"btn btn-success\">
        ";
        // line 50
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getID", [], "any", false, false, false, 50))) {
            // line 51
            echo "            Modifier
        ";
        } else {
            // line 53
            echo "            Créer
        ";
        }
        // line 55
        echo "    </button>
</form>";
    }

    public function getTemplateName()
    {
        return "admin/fighters/_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 55,  182 => 53,  178 => 51,  176 => 50,  170 => 47,  166 => 46,  161 => 44,  157 => 43,  153 => 42,  149 => 41,  145 => 40,  141 => 39,  137 => 38,  133 => 37,  126 => 33,  122 => 32,  118 => 31,  114 => 30,  108 => 27,  99 => 21,  95 => 20,  91 => 19,  87 => 18,  83 => 16,  74 => 14,  70 => 13,  66 => 12,  62 => 11,  56 => 9,  51 => 7,  48 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"fw-bold mb-3\">
    <a href=\"{{router.url('fighters_manage')}}\" class=\"text-dark\"><i class=\"bi bi-arrow-left\"></i> Retour vers la gestion des combattants</a>
</p>
<form action=\"\" method=\"post\" class=\"mb-4\" enctype=\"multipart/form-data\">
    {% if fighter.getImage() %}
        <p class=\"fw-bold\">Image à la une :</p>
        <img src=\"{{ fighter.getImageURL('medium') }}\" alt=\"\" class=\"rounded shadow-sm mb-4\" loading=\"lazy\">
    {% endif %}
    {{ form.checkbox('champ', 'Champion', 'pl-4')|raw}}
    <div class=\"row\">
        {{ form.input('name', 'Nom', null, 'col-12 col-lg-4')|raw }}
        {{ form.input('dob', 'Date de naissance', null, 'col-12 col-lg-4')|raw}}
        {% for value, key in sexes %}
            {{ form.radio('sex', key, value, 'col-12 col-lg-1')|raw}}
        {% endfor %}
    </div>
    <div class=\"row\">
        {{ form.input('win', 'Victoire', null, 'col-12 col-lg-3')|raw }}
        {{ form.input('lose', 'Défaite', null, 'col-12 col-lg-3')|raw }}
        {{ form.input('draw', 'Egalité', null, 'col-12 col-lg-3' )|raw }}
        {{ form.input('nc', 'No contest', null, 'col-12 col-lg-3')|raw }}
    </div>

    <h5 class=\"p-0\"> Catégorie de Poids </h5><hr class=\"mt-0\">
    <div class=\"row\">

        {{ form.select('weight_cat_id', 'Catégories de poids', categories, true, 'col-12 col-lg-8 m-0')|raw}}
    </div>
    <div class=\"row\">
        {{ form.input('stance', 'Garde', null, 'col-12 col-lg-3')|raw }}
        {{ form.input('weight', 'Poids (kg)', null, 'col-12 col-lg-3')|raw }}
        {{ form.input('height', 'Taille (cm)', null, 'col-12 col-lg-3')|raw }}
        {{ form.input('reach', 'Portée (cm)', null, 'col-12 col-lg-3')|raw }}
    </div>
    <h5> Statistiques de combat</h5><hr class=\"mt-0\">
    <div class=\"row\">
        {{ form.input('SLpM', 'Frappes portées /mn', null, 'col-12 col-lg-4')|raw }}
        {{ form.input('Str_Acc', 'Précision frappes %', null, 'col-12 col-lg-4')|raw }}
        {{ form.input('SApM', 'Frappes encaissées/mn', null, 'col-12 col-lg-4')|raw }}
        {{ form.input('Str_Def', 'Précision défense %', null, 'col-12 col-lg-4')|raw }}
        {{ form.input('TD_Avg', 'Takedown/15mn', null, 'col-12 col-lg-4')|raw }}
        {{ form.input('TD_Acc', 'Précision TD %', null, 'col-12 col-lg-4')|raw }}
        {{ form.input('TD_Def', 'Déf. TD %', null, 'col-12 col-lg-4')|raw }}
        {{ form.input('Sub_Avg', 'Tent. soumission /15mn', null, 'col-12 col-lg-4')|raw }}
    </div>
    {{ form.input('last_updated', 'Dernière modification')|raw}}
    {{ form.file('image', 'Img')|raw}}

    <button name=\"\" type=\"submit\" class=\"btn btn-success\">
        {% if fighter.getID is not null %}
            Modifier
        {% else %}
            Créer
        {% endif %}
    </button>
</form>", "admin/fighters/_form.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\fighters\\_form.twig");
    }
}
