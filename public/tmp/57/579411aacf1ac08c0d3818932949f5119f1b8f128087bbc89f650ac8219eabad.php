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
class __TwigTemplate_d8bb0f56987465824a9e5b8192198232aa5265362e11e3a49c8858132ab4b84b extends Template
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
        echo "

<div class=\"col-md-5 card rounded border-0 p-0 m-2\">
    <div class=\"card-header bg-light px-0 border-0\">
        <div class=\"d-flex justify-content-start align-items-center\">
            <img width=\"24\" height=\"24\" class=\"rounded-circle mx-2\" data-src=\"https://i.picsum.photos/id/237/536/354.jpg?hmac=i0yVXW1ORpyCZpQ-CknuyV-jbtU7_x9EBQVhvT5aRr0\" src=\"https://i.picsum.photos/id/237/536/354.jpg?hmac=i0yVXW1ORpyCZpQ-CknuyV-jbtU7_x9EBQVhvT5aRr0\" lazy=\"loaded\">
            <p class=\"text-muted small m-0\"><?= e(\$post->getAuthor()) ?></p>    
        </div>
    </div>
    <div class=\"card-body bg-light p-0\">
        ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getImage", [], "method", false, false, false, 11)) {
            // line 12
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dump"] ?? null), "post", [], "any", false, false, false, 12), "getImage", [], "method", false, false, false, 12), "html", null, true);
            echo "
            <a href=\"<?= \$router->url('article', ['id' => \$post->getId(), 'slug' => \$post->getSlug()]);?>\">
                <div class=\"card-img-top d-flex justify-content-center align-items-center\"><img class=\"rounded shadow\" src=\"<?= \$post->getimageURL('small');?>\" alt=\"\"></div>
            </a>
        ";
        }
        // line 17
        echo "        <div class=\"card-text p-2\">
            <h5 class=\"fw-bold\"> ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getName", [], "method", false, false, false, 18), "html", null, true);
        echo "</h5>
            <p class=\"small m-2\"><?= \$post->getExcerpt(100) ?> <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "article", 1 => ["id" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getId", [], "method", false, false, false, 19), "slug" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getSlug", [], "method", false, false, false, 19)]], "method", false, false, false, 19), "html", null, true);
        echo "\" class=\"text-secondary fst-italic\">...lire la suite</a></p>
        </div>
    </div>
    <div class=\"card-footer bg-light text-end\">
      <small class=\"text-muted\">Publié le <?= \$post->getCreatedAt()->format('d/m/Y à H\\hi') ?></small>
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
        return array (  67 => 19,  63 => 18,  60 => 17,  51 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<div class=\"col-md-5 card rounded border-0 p-0 m-2\">
    <div class=\"card-header bg-light px-0 border-0\">
        <div class=\"d-flex justify-content-start align-items-center\">
            <img width=\"24\" height=\"24\" class=\"rounded-circle mx-2\" data-src=\"https://i.picsum.photos/id/237/536/354.jpg?hmac=i0yVXW1ORpyCZpQ-CknuyV-jbtU7_x9EBQVhvT5aRr0\" src=\"https://i.picsum.photos/id/237/536/354.jpg?hmac=i0yVXW1ORpyCZpQ-CknuyV-jbtU7_x9EBQVhvT5aRr0\" lazy=\"loaded\">
            <p class=\"text-muted small m-0\"><?= e(\$post->getAuthor()) ?></p>    
        </div>
    </div>
    <div class=\"card-body bg-light p-0\">
        {% if post.getImage() %}
        {{ dump.post.getImage() }}
            <a href=\"<?= \$router->url('article', ['id' => \$post->getId(), 'slug' => \$post->getSlug()]);?>\">
                <div class=\"card-img-top d-flex justify-content-center align-items-center\"><img class=\"rounded shadow\" src=\"<?= \$post->getimageURL('small');?>\" alt=\"\"></div>
            </a>
        {% endif %}
        <div class=\"card-text p-2\">
            <h5 class=\"fw-bold\"> {{ post.getName() }}</h5>
            <p class=\"small m-2\"><?= \$post->getExcerpt(100) ?> <a href=\"{{ router.url('article', {'id': post.getId(), 'slug': post.getSlug()}) }}\" class=\"text-secondary fst-italic\">...lire la suite</a></p>
        </div>
    </div>
    <div class=\"card-footer bg-light text-end\">
      <small class=\"text-muted\">Publié le <?= \$post->getCreatedAt()->format('d/m/Y à H\\hi') ?></small>
    </div>
</div>", "blog/_homeTable.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\blog\\_homeTable.twig");
    }
}
