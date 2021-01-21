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

/* blog/_homeTable.twig */
class __TwigTemplate_f839924345494049633ff499aec9eed3320d1099ec76672ddf0f88c8f33274f9 extends Template
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
        echo "<div class=\"col-md-5 col-s-12 card rounded border-0 p-0 m-2\">
    <div class=\"card-header bg-light px-0 border-0\">
        <div class=\"d-flex justify-content-start align-items-center\">
            <img width=\"24\" height=\"24\" class=\"rounded-circle mx-2\" data-src=\"https://i.picsum.photos/id/237/536/354.jpg?hmac=i0yVXW1ORpyCZpQ-CknuyV-jbtU7_x9EBQVhvT5aRr0\" src=\"https://i.picsum.photos/id/237/536/354.jpg?hmac=i0yVXW1ORpyCZpQ-CknuyV-jbtU7_x9EBQVhvT5aRr0\" lazy=\"loaded\">
            <p class=\"text-muted small m-0\"> ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getAuthor", [], "method", false, false, false, 5), "html", null, true);
        echo "</p>    
        </div>
    </div>
    <div class=\"card-body bg-light p-0\">
        ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getImage", [], "method", false, false, false, 9)) {
            // line 10
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "article", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getId", [], "method", false, false, false, 10), "slug" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getSlug", [], "method", false, false, false, 10)]], "method", false, false, false, 10), "html", null, true);
            echo "\">
                <div class=\"card-img-top d-flex justify-content-center align-items-center\"><img class=\"rounded shadow img-fluid\" src=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getimageURL", [0 => "small"], "method", false, false, false, 11), "html", null, true);
            echo "\" alt=\"\"></div>
            </a>
        ";
        }
        // line 14
        echo "        <div class=\"card-text p-2\">
            <h5 class=\"fw-bold\"> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getName", [], "method", false, false, false, 15), "html", null, true);
        echo "</h5>
            <p class=\"small m-2\"> ";
        // line 16
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getContent", [], "method", false, false, false, 16), 0, 100), "html", null, true);
        echo " <a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "article", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getId", [], "method", false, false, false, 16), "slug" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getSlug", [], "method", false, false, false, 16)]], "method", false, false, false, 16), "html", null, true);
        echo "\" class=\"text-secondary fst-italic text-decoration-none\">...lire la suite</a></p>
        </div>
    </div>
    <div class=\"card-footer bg-light text-end\">
      <small class=\"text-muted\">Publié le ";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getCreatedAt", [], "method", false, false, false, 20), "d/m/Y à H\\hi"), "html", null, true);
        echo " </small>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "blog/_homeTable.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 20,  70 => 16,  66 => 15,  63 => 14,  57 => 11,  52 => 10,  50 => 9,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-md-5 col-s-12 card rounded border-0 p-0 m-2\">
    <div class=\"card-header bg-light px-0 border-0\">
        <div class=\"d-flex justify-content-start align-items-center\">
            <img width=\"24\" height=\"24\" class=\"rounded-circle mx-2\" data-src=\"https://i.picsum.photos/id/237/536/354.jpg?hmac=i0yVXW1ORpyCZpQ-CknuyV-jbtU7_x9EBQVhvT5aRr0\" src=\"https://i.picsum.photos/id/237/536/354.jpg?hmac=i0yVXW1ORpyCZpQ-CknuyV-jbtU7_x9EBQVhvT5aRr0\" lazy=\"loaded\">
            <p class=\"text-muted small m-0\"> {{ post.getAuthor() }}</p>    
        </div>
    </div>
    <div class=\"card-body bg-light p-0\">
        {% if post.getImage() %}
            <a href=\"{{ router.url('article', {'id': post.getId(), 'slug': post.getSlug()}) }}\">
                <div class=\"card-img-top d-flex justify-content-center align-items-center\"><img class=\"rounded shadow img-fluid\" src=\"{{ post.getimageURL('small') }}\" alt=\"\"></div>
            </a>
        {% endif %}
        <div class=\"card-text p-2\">
            <h5 class=\"fw-bold\"> {{ post.getName() }}</h5>
            <p class=\"small m-2\"> {{ post.getContent()[:100] }} <a href=\"{{ router.url('article', {'id': post.getId(), 'slug': post.getSlug()}) }}\" class=\"text-secondary fst-italic text-decoration-none\">...lire la suite</a></p>
        </div>
    </div>
    <div class=\"card-footer bg-light text-end\">
      <small class=\"text-muted\">Publié le {{ post.getCreatedAt() | date('d/m/Y à H\\\\hi') }} </small>
    </div>
</div>", "blog/_homeTable.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\blog\\_homeTable.twig");
    }
}
