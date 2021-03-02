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

/* results/_researchPost.twig */
class __TwigTemplate_9633553817ec5cbd718ffb5fd2dd412cf2d1370cc27ec71b6d45eb4e815a1596 extends Template
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
        echo "<div class=\"col-12 card rounded border-0 bg-light\">
        <div class=\"card-body pb-2\">
            <div class=\"row\">
            ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getImage", [], "method", false, false, false, 4)) {
            // line 5
            echo "            <aside class=\"col-md-3 col-xs-12\">
                <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "article", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getId", [], "method", false, false, false, 6), "slug" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getSlug", [], "method", false, false, false, 6)]], "method", false, false, false, 6), "html", null, true);
            echo "\">
                    <div class=\"card-img-top d-flex justify-content-start align-items-center my-2\"><img class=\"rounded shadow img-fluid\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getimageURL", [0 => "small"], "method", false, false, false, 7), "html", null, true);
            echo "\" alt=\"\"></div>
                </a>
            </aside>
            ";
        }
        // line 11
        echo "                <article class=\"card-text mt-2 col-9\">
                    <p class=\"text-muted small mb-1\"> ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getAuthor", [], "method", false, false, false, 12), "html", null, true);
        echo "</p>    
                    <a class=\"text-decoration-none text-dark\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "article", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getId", [], "method", false, false, false, 13), "slug" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getSlug", [], "method", false, false, false, 13)]], "method", false, false, false, 13), "html", null, true);
        echo "\">
                        <h5 class=\"fw-bold\"> ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getName", [], "method", false, false, false, 14), "html", null, true);
        echo "</h5>
                    </a>
                    <p class=\"small\"> ";
        // line 16
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getContent", [], "method", false, false, false, 16), 0, 200), "html", null, true);
        echo " <a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "article", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getId", [], "method", false, false, false, 16), "slug" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getSlug", [], "method", false, false, false, 16)]], "method", false, false, false, 16), "html", null, true);
        echo "\" class=\"text-secondary text-decoration-none\">[...]</a></p>
                </article>
            </div>
            <small class=\"text-muted\">Publié le ";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getCreatedAt", [], "method", false, false, false, 19), "d/m/Y à H\\hi"), "html", null, true);
        echo " </small>
        </div>
    <div class=\"card-footer bg-light\">
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "results/_researchPost.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  74 => 16,  69 => 14,  65 => 13,  61 => 12,  58 => 11,  51 => 7,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-12 card rounded border-0 bg-light\">
        <div class=\"card-body pb-2\">
            <div class=\"row\">
            {% if post.getImage() %}
            <aside class=\"col-md-3 col-xs-12\">
                <a href=\"{{ router.url('article', {'id': post.getId(), 'slug': post.getSlug()}) }}\">
                    <div class=\"card-img-top d-flex justify-content-start align-items-center my-2\"><img class=\"rounded shadow img-fluid\" src=\"{{ post.getimageURL('small') }}\" alt=\"\"></div>
                </a>
            </aside>
            {% endif %}
                <article class=\"card-text mt-2 col-9\">
                    <p class=\"text-muted small mb-1\"> {{ post.getAuthor() }}</p>    
                    <a class=\"text-decoration-none text-dark\" href=\"{{ router.url('article', {'id': post.getId(), 'slug': post.getSlug()}) }}\">
                        <h5 class=\"fw-bold\"> {{ post.getName() }}</h5>
                    </a>
                    <p class=\"small\"> {{ post.getContent()[:200] }} <a href=\"{{ router.url('article', {'id': post.getId(), 'slug': post.getSlug()}) }}\" class=\"text-secondary text-decoration-none\">[...]</a></p>
                </article>
            </div>
            <small class=\"text-muted\">Publié le {{ post.getCreatedAt() | date('d/m/Y à H\\\\hi') }} </small>
        </div>
    <div class=\"card-footer bg-light\">
    </div>
</div>", "results/_researchPost.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\results\\_researchPost.twig");
    }
}
