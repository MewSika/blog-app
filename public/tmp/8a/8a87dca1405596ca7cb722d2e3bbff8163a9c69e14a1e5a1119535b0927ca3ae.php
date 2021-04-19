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

/* fighters\fighter.twig */
class __TwigTemplate_52224b299b4347654d2266ca004723a283a0fc9005afe08f3efbb74394d9a75f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout/layout.twig", "fighters\\fighter.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <title> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getName", [], "any", false, false, false, 4), "html", null, true);
        echo "</title>
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $this->loadTemplate("fighters/_breadcrumb.twig", "fighters\\fighter.twig", 8)->display($context);
        // line 9
        echo "    <div class=\"card mb-3\">
        <div class=\"row\">
            ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getImage", [], "method", false, false, false, 11)) {
            // line 12
            echo "                <section class=\"col-lg-4 text-center pt-2\">
                    <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getImageURL", [0 => "medium"], "method", false, false, false, 13), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getName", [], "method", false, false, false, 13), "html", null, true);
            echo "\">
                </section>
            ";
        } else {
            // line 16
            echo "                <section class=\"col-lg-4 m-auto text-center d-none d-lg-block\">
                    <img src=\"/img/authors/UFC.png\" alt=\"No picture\" class=\"w-50\">
                </section>
            ";
        }
        // line 20
        echo "            <article class=\"col-lg-8\">
                <div class=\"row g-0\">
                    <h1 class=\"fw-bold border-bottom my-2 p-2\"> 
                        ";
        // line 23
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getChamp", [], "any", false, false, false, 23), 1))) {
            // line 24
            echo "                            <img src=\"/img/authors/ufc-belt-small.png\" alt=\"ufc belt\">
                        ";
        }
        // line 26
        echo "                        ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getName", [], "any", false, false, false, 26), "html", null, true);
        echo "
                    </h1>
                    <h3 class=\"fw-bold mx-3 mb-0\"> Record : ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getWin", [], "any", false, false, false, 28), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getLose", [], "any", false, false, false, 28), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getDraw", [], "any", false, false, false, 28), "html", null, true);
        echo " ";
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getNC", [], "any", false, false, false, 28), 0))) {
            echo "(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getNC", [], "any", false, false, false, 28), "html", null, true);
            echo " NC) ";
        }
        echo "</h3>

                    <section class=\"card-body col-lg-5\">
                        <h4 class=\"card-title\">Informations générales</h3>
                        <p class=\"card-text\"><b>Taille :</b> ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getHeight", [], "any", false, false, false, 32), "html", null, true);
        echo " cm</p>
                        <p class=\"card-text\"><b>Poids :</b> ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getWeight", [], "any", false, false, false, 33), "html", null, true);
        echo " kg</p>
                        <p class=\"card-text\"><b>Allonge :</b> ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getReach", [], "any", false, false, false, 34), "html", null, true);
        echo " cm</p>
                        <p class=\"card-text\"><b>Garde :</b> ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getStance", [], "any", false, false, false, 35), "html", null, true);
        echo " </p>
                        <p class=\"card-text\"><b>Date de naissance :</b> ";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getDob", [], "any", false, false, false, 36), "medium", "", null, "gregorian", "fr"), "html", null, true);
        echo "</p>
                    </section>

                    <section class=\"card-body col-lg-7\">
                        <div class=\"row\">
                            <h4 class=\"card-title\">Statistiques de carrière</h3>
                            <div class=\"col-5 border-end\">
                                <p class=\"card-text mb-0\"><b>FpM :</b> ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getSLpM", [], "any", false, false, false, 43), "html", null, true);
        echo "</p>
                                <p class=\"card-text mb-0\"><b>FEpM :</b> ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getSApM", [], "any", false, false, false, 44), "html", null, true);
        echo "</p>
                                <p class=\"card-text mb-0\"><b>Préc. F:</b> ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getStrAcc", [], "any", false, false, false, 45), "html", null, true);
        echo "%</p>
                                <p class=\"card-text\"><b>Préc. D :</b> ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getStrDef", [], "any", false, false, false, 46), "html", null, true);
        echo "%</p>

                                <p class=\"card-text mb-0\"><b>Moy. TD :</b> ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getTDAvg", [], "any", false, false, false, 48), "html", null, true);
        echo "</p>
                                <p class=\"card-text mb-0\"><b>Préc. TD :</b> ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getTDAcc", [], "any", false, false, false, 49), "html", null, true);
        echo "%</p>
                                <p class=\"card-text mb-0\"><b>Def. TD :</b> ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getTDDef", [], "any", false, false, false, 50), "html", null, true);
        echo "%</p>
                                <p class=\"card-text mb-0\"><b>Moy. Soum. :</b> ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fighter"] ?? null), "getSubAVG", [], "any", false, false, false, 51), "html", null, true);
        echo "</p>
                            </div>
                            <div class=\"col-7\">
                                <p class=\"card-text mb-0 small\"><b>FpM :</b> Frappes significatives portées/mn</p>
                                <p class=\"card-text mb-0 small\"><b>FEpM :</b> Frappe encaissées par minute</b></p>
                                <p class=\"card-text mb-0 small\"><b>Préc F :</b> Précision des frappes significatives</b></p>
                                <p class=\"card-text small\"><b>Préc. D :</b> Précision défensive (% des frappes adverses défendues)</p>
                                
                                <p class=\"card-text mb-0 small\"><b>Moy. TD :</b> Moyenne des amenées au sol/15mn</p>
                                <p class=\"card-text mb-0 small\"><b>Préc. TD :</b> Précision des amenées au sol</p>
                                <p class=\"card-text mb-0 small\"><b>Def. TD :</b> Défense des amenées au sol (% des amenées au sol défendues)</p>
                                <p class=\"card-text small\"><b>Moy. Soum. :</b> Moyenne des tentatives de soumission/15mn</p>
                            </div>
                        </row>
                    </section>
                </div>
            </article>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "fighters\\fighter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 51,  173 => 50,  169 => 49,  165 => 48,  160 => 46,  156 => 45,  152 => 44,  148 => 43,  138 => 36,  134 => 35,  130 => 34,  126 => 33,  122 => 32,  105 => 28,  99 => 26,  95 => 24,  93 => 23,  88 => 20,  82 => 16,  74 => 13,  71 => 12,  69 => 11,  65 => 9,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/layout.twig' %}

{% block head %}
    <title> {{ fighter.getName }}</title>
{% endblock %}

{% block content %}
    {% include 'fighters/_breadcrumb.twig' %}
    <div class=\"card mb-3\">
        <div class=\"row\">
            {% if fighter.getImage() %}
                <section class=\"col-lg-4 text-center pt-2\">
                    <img src=\"{{ fighter.getImageURL('medium') }}\" alt=\"{{ fighter.getName() }}\">
                </section>
            {% else %}
                <section class=\"col-lg-4 m-auto text-center d-none d-lg-block\">
                    <img src=\"/img/authors/UFC.png\" alt=\"No picture\" class=\"w-50\">
                </section>
            {% endif %}
            <article class=\"col-lg-8\">
                <div class=\"row g-0\">
                    <h1 class=\"fw-bold border-bottom my-2 p-2\"> 
                        {% if fighter.getChamp == 1 %}
                            <img src=\"/img/authors/ufc-belt-small.png\" alt=\"ufc belt\">
                        {% endif %}
                        {{ fighter.getName }}
                    </h1>
                    <h3 class=\"fw-bold mx-3 mb-0\"> Record : {{ fighter.getWin }}-{{ fighter.getLose }}-{{ fighter.getDraw }} {% if fighter.getNC > 0 %}({{fighter.getNC}} NC) {% endif %}</h3>

                    <section class=\"card-body col-lg-5\">
                        <h4 class=\"card-title\">Informations générales</h3>
                        <p class=\"card-text\"><b>Taille :</b> {{ fighter.getHeight }} cm</p>
                        <p class=\"card-text\"><b>Poids :</b> {{ fighter.getWeight }} kg</p>
                        <p class=\"card-text\"><b>Allonge :</b> {{ fighter.getReach }} cm</p>
                        <p class=\"card-text\"><b>Garde :</b> {{ fighter.getStance }} </p>
                        <p class=\"card-text\"><b>Date de naissance :</b> {{fighter.getDob|format_date(locale='fr') }}</p>
                    </section>

                    <section class=\"card-body col-lg-7\">
                        <div class=\"row\">
                            <h4 class=\"card-title\">Statistiques de carrière</h3>
                            <div class=\"col-5 border-end\">
                                <p class=\"card-text mb-0\"><b>FpM :</b> {{fighter.getSLpM}}</p>
                                <p class=\"card-text mb-0\"><b>FEpM :</b> {{ fighter.getSApM}}</p>
                                <p class=\"card-text mb-0\"><b>Préc. F:</b> {{fighter.getStrAcc}}%</p>
                                <p class=\"card-text\"><b>Préc. D :</b> {{fighter.getStrDef}}%</p>

                                <p class=\"card-text mb-0\"><b>Moy. TD :</b> {{fighter.getTDAvg}}</p>
                                <p class=\"card-text mb-0\"><b>Préc. TD :</b> {{fighter.getTDAcc}}%</p>
                                <p class=\"card-text mb-0\"><b>Def. TD :</b> {{fighter.getTDDef}}%</p>
                                <p class=\"card-text mb-0\"><b>Moy. Soum. :</b> {{fighter.getSubAVG}}</p>
                            </div>
                            <div class=\"col-7\">
                                <p class=\"card-text mb-0 small\"><b>FpM :</b> Frappes significatives portées/mn</p>
                                <p class=\"card-text mb-0 small\"><b>FEpM :</b> Frappe encaissées par minute</b></p>
                                <p class=\"card-text mb-0 small\"><b>Préc F :</b> Précision des frappes significatives</b></p>
                                <p class=\"card-text small\"><b>Préc. D :</b> Précision défensive (% des frappes adverses défendues)</p>
                                
                                <p class=\"card-text mb-0 small\"><b>Moy. TD :</b> Moyenne des amenées au sol/15mn</p>
                                <p class=\"card-text mb-0 small\"><b>Préc. TD :</b> Précision des amenées au sol</p>
                                <p class=\"card-text mb-0 small\"><b>Def. TD :</b> Défense des amenées au sol (% des amenées au sol défendues)</p>
                                <p class=\"card-text small\"><b>Moy. Soum. :</b> Moyenne des tentatives de soumission/15mn</p>
                            </div>
                        </row>
                    </section>
                </div>
            </article>
        </div>
    </div>
{% endblock %}", "fighters\\fighter.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\fighters\\fighter.twig");
    }
}
