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

/* blog/_card.twig */
class __TwigTemplate_0fc2890598e21fd65d2203a958d4d64bd59d6d24cbf9c0de309555d96a6b002d extends Template
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
    <div class=\"card-body\">
        <div class=\"container p-0\">
            <h3 class=\"card-title text-center\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getName", [], "method", false, false, false, 4), "html", null, true);
        echo "</h3>
        <hr>
            ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getImage", [], "method", false, false, false, 6)) {
            // line 7
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "article", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getID", [], "method", false, false, false, 7), "slug" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getSlug", [], "method", false, false, false, 7)]], "method", false, false, false, 7), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getimageURL", [0 => "large"], "method", false, false, false, 7), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getName", [], "method", false, false, false, 7), "html", null, true);
            echo "\" class=\"card-img-top mb-3 rounded\"></a>
            ";
        }
        // line 9
        echo "        </div>
        ";
        // line 10
        echo nl2br(twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getContent", [], "method", false, false, false, 10), 0, 300), "html", null, true));
        echo "

        <a class=\"text-secondary fst-italic\" href=\"
            ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "article", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getID", [], "method", false, false, false, 13), "slug" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getSlug", [], "method", false, false, false, 13)]], "method", false, false, false, 13), "html", null, true);
        echo "\">...lire la suite</a>
        <footer class=\"blockquote-footer text-end pt-3\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getAuthor", [], "method", false, false, false, 14), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getCreatedAt", [], "method", false, false, false, 14), "j F Y à H\\hi"), "html", null, true);
        echo "
        ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getCategories", [], "method", false, false, false, 15)) {
            // line 16
            echo "            <hr>
            Catégories associées :
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getCategories", [], "method", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["assocCat"]) {
                // line 19
                echo "                   <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "category", 1 => ["id" => twig_get_attribute($this->env, $this->source, $context["assocCat"], "getId", [], "method", false, false, false, 19), "slug" => twig_get_attribute($this->env, $this->source, $context["assocCat"], "getSlug", [], "method", false, false, false, 19)]], "method", false, false, false, 19), "html", null, true);
                echo "\" class=\"text-dark text-muted fw-light fst-italic\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["assocCat"], "getName", [], "method", false, false, false, 19), "html", null, true);
                echo "</a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assocCat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        ";
        }
        // line 22
        echo "        </footer>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "blog/_card.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 22,  99 => 21,  88 => 19,  84 => 18,  80 => 16,  78 => 15,  72 => 14,  68 => 13,  62 => 10,  59 => 9,  49 => 7,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card shadow p-2 mb-4 bg-white rounded\">
    <div class=\"card-body\">
        <div class=\"container p-0\">
            <h3 class=\"card-title text-center\">{{ post.getName() }}</h3>
        <hr>
            {% if post.getImage() %}
                <a href=\"{{ router.url('article', {'id': post.getID(), 'slug': post.getSlug()}) }}\"><img src=\"{{ post.getimageURL('large') }}\" alt=\"{{ post.getName() }}\" class=\"card-img-top mb-3 rounded\"></a>
            {% endif %}
        </div>
        {{ post.getContent()[:300] | nl2br }}

        <a class=\"text-secondary fst-italic\" href=\"
            {{ router.url('article', {'id': post.getID(), 'slug': post.getSlug()}) }}\">...lire la suite</a>
        <footer class=\"blockquote-footer text-end pt-3\">{{ post.getAuthor() }}, le {{ post.getCreatedAt() | date('j F Y à H\\\\hi') }}
        {% if post.getCategories() %}
            <hr>
            Catégories associées :
                {% for assocCat in post.getCategories() %}
                   <a href=\"{{router.url(\"category\", {\"id\": assocCat.getId(), \"slug\": assocCat.getSlug()}) }}\" class=\"text-dark text-muted fw-light fst-italic\">{{ assocCat.getName()}}</a>
                {% endfor %}
        {% endif %}
        </footer>
    </div>
</div>", "blog/_card.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\blog\\_card.twig");
    }
}
