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
class __TwigTemplate_97e6da710ea507b91eafd7ab56906686bcceebbcc5e99de003cfb30cc43e6922 extends Template
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
            <h3 class=\"card-title\"><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "article", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getID", [], "method", false, false, false, 4), "slug" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getSlug", [], "method", false, false, false, 4)]], "method", false, false, false, 4), "html", null, true);
        echo "\" class=\"text-decoration-none text-dark fw-bold\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getName", [], "method", false, false, false, 4), "html", null, true);
        echo "</a></h3>
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
            echo "\" class=\"card-img-top mb-3 rounded\" loading=\"lazy\"></a>
            ";
        }
        // line 9
        echo "        </div>
        ";
        // line 10
        echo twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString($this->env->getRuntime('Twig\Extra\Markdown\MarkdownRuntime')->convert(nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getContent", [], "any", false, false, false, 10), "html", null, true)))), "truncate", [0 => 300, 1 => "", 2 => false], "method", false, false, false, 10);
        echo "
        <a class=\"text-secondary text-decoration-none \" href=\"
            ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "article", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getID", [], "method", false, false, false, 12), "slug" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getSlug", [], "method", false, false, false, 12)]], "method", false, false, false, 12), "html", null, true);
        echo "\">[...]</a>
        <footer class=\"blockquote-footer text-end pt-3\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getAuthor", [], "method", false, false, false, 13), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getCreatedAt", [], "method", false, false, false, 13), "medium", "", null, "gregorian", "fr"), "html", null, true);
        echo "
        ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getCategories", [], "any", false, false, false, 14)) {
            // line 15
            echo "            <hr>
            Catégories associées :
                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getCategories", [], "method", false, false, false, 17));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["assocCat"]) {
                // line 18
                echo "                    ";
                if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 18), 1))) {
                    // line 19
                    echo "                        <span class=\"fw-light\">|</span> 
                    ";
                }
                // line 21
                echo "                   <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "category", 1 => ["id" => twig_get_attribute($this->env, $this->source, $context["assocCat"], "getId", [], "method", false, false, false, 21), "slug" => twig_get_attribute($this->env, $this->source, $context["assocCat"], "getSlug", [], "method", false, false, false, 21)]], "method", false, false, false, 21), "html", null, true);
                echo "\" class=\"text-dark text-muted text-decoration-none ";
                echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["assocCat"], "getName", [], "method", false, false, false, 21), twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "getName", [], "method", false, false, false, 21)))) ? ("fw-bold") : ("fw-light"));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["assocCat"], "getName", [], "method", false, false, false, 21), "html", null, true);
                echo "</a>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assocCat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ";
        }
        // line 24
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
        return array (  133 => 24,  130 => 23,  109 => 21,  105 => 19,  102 => 18,  85 => 17,  81 => 15,  79 => 14,  73 => 13,  69 => 12,  64 => 10,  61 => 9,  51 => 7,  49 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card shadow p-2 mb-4 bg-white rounded\">
    <div class=\"card-body\">
        <div class=\"container p-0\">
            <h3 class=\"card-title\"><a href=\"{{ router.url('article', {'id': post.getID(), 'slug': post.getSlug()}) }}\" class=\"text-decoration-none text-dark fw-bold\">{{ post.getName() }}</a></h3>
        <hr>
            {% if post.getImage() %}
                <a href=\"{{ router.url('article', {'id': post.getID(), 'slug': post.getSlug()}) }}\"><img src=\"{{ post.getimageURL('large') }}\" alt=\"{{ post.getName() }}\" class=\"card-img-top mb-3 rounded\" loading=\"lazy\"></a>
            {% endif %}
        </div>
        {{ post.getContent | nl2br | markdown_to_html | u.truncate(300, '', false) | raw}}
        <a class=\"text-secondary text-decoration-none \" href=\"
            {{ router.url('article', {'id': post.getID(), 'slug': post.getSlug()}) }}\">[...]</a>
        <footer class=\"blockquote-footer text-end pt-3\">{{ post.getAuthor() }}, le {{ post.getCreatedAt() | format_date('medium', locale='fr') }}
        {% if post.getCategories %}
            <hr>
            Catégories associées :
                {% for assocCat in post.getCategories() %}
                    {% if loop.index > 1 %}
                        <span class=\"fw-light\">|</span> 
                    {% endif %}
                   <a href=\"{{router.url(\"category\", {\"id\": assocCat.getId(), \"slug\": assocCat.getSlug()}) }}\" class=\"text-dark text-muted text-decoration-none {{ (assocCat.getName() == category.getName()) ? 'fw-bold' : 'fw-light' }}\">{{ assocCat.getName()}}</a>
                {% endfor %}
        {% endif %}
        </footer>
    </div>
</div>", "blog/_card.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\blog\\_card.twig");
    }
}
