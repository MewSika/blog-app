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

/* admin/post/_form.twig */
class __TwigTemplate_0ec49b2abf0c5d085021f138f0f3c2029d2a350a977c5e44b99d9af2b9e09f82 extends Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "posts_manage"], "method", false, false, false, 2), "html", null, true);
        echo "\" class=\"text-dark\"><i class=\"bi bi-arrow-left\"></i> Retour vers la gestion des articles</a>
</p>
<form action=\"\" method=\"post\" class=\"mb-4\" enctype=\"multipart/form-data\">
    ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getImage", [], "method", false, false, false, 5)) {
            // line 6
            echo "        <p class=\"fw-bold\">Image à la une :</p>
        <img src=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getImageURL", [0 => "medium"], "method", false, false, false, 7), "html", null, true);
            echo "\" alt=\"\" class=\"rounded shadow-sm mb-4\">
    ";
        }
        // line 9
        echo "
    ";
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "name", 1 => "Titre"], "method", false, false, false, 10);
        echo "
    ";
        // line 11
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "slug", 1 => "URL"], "method", false, false, false, 11);
        echo "
    ";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "input", [0 => "author", 1 => "Auteur"], "method", false, false, false, 12);
        echo "
    ";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [0 => "image", 1 => "image"], "method", false, false, false, 13);
        echo "
    ";
        // line 14
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "select", [0 => "categories_ids", 1 => "Catég.", 2 => ($context["categories"] ?? null)], "method", false, false, false, 14);
        echo "
    ";
        // line 15
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "textarea", [0 => "content", 1 => "Contenu"], "method", false, false, false, 15);
        echo "

    <button name=\"\" type=\"submit\" class=\"btn btn-success\">
        ";
        // line 18
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getID", [], "method", false, false, false, 18))) {
            // line 19
            echo "            Modifier
        ";
        } else {
            // line 21
            echo "            Créer
        ";
        }
        // line 23
        echo "    </button>
</form>

<script>
    var simplemde = new SimpleMDE({ element: document.getElementById(\"content\") });
</script>";
    }

    public function getTemplateName()
    {
        return "admin/post/_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 23,  91 => 21,  87 => 19,  85 => 18,  79 => 15,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  59 => 10,  56 => 9,  51 => 7,  48 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"fw-bold mb-3\">
    <a href=\"{{router.url('posts_manage')}}\" class=\"text-dark\"><i class=\"bi bi-arrow-left\"></i> Retour vers la gestion des articles</a>
</p>
<form action=\"\" method=\"post\" class=\"mb-4\" enctype=\"multipart/form-data\">
    {% if post.getImage() %}
        <p class=\"fw-bold\">Image à la une :</p>
        <img src=\"{{ post.getImageURL('medium') }}\" alt=\"\" class=\"rounded shadow-sm mb-4\">
    {% endif %}

    {{ form.input('name', 'Titre')|raw }}
    {{ form.input('slug', 'URL')|raw}}
    {{ form.input('author', 'Auteur')|raw }}
    {{ form.file('image', 'image')|raw}}
    {{ form.select('categories_ids', 'Catég.', categories)|raw}}
    {{ form.textarea('content', 'Contenu')|raw}}

    <button name=\"\" type=\"submit\" class=\"btn btn-success\">
        {% if post.getID() is not null %}
            Modifier
        {% else %}
            Créer
        {% endif %}
    </button>
</form>

<script>
    var simplemde = new SimpleMDE({ element: document.getElementById(\"content\") });
</script>", "admin/post/_form.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\post\\_form.twig");
    }
}
