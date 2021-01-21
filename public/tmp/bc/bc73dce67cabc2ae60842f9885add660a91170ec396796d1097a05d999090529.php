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

/* /sidebar/posts.twig */
class __TwigTemplate_64629e1b4cb63854e080d7de9dcf7b916614d8b941589769956445208ef0f69e extends Template
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
        echo "<div class=\"card mb-3 shadow\">
    <h6 class=\"card-header\">
        Articles récents
    </h6>
    <ul class=\"nav flex-column p-2\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lastPosts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "category", 1 => ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "getId", [], "method", false, false, false, 7), "slug" => twig_get_attribute($this->env, $this->source, $context["post"], "getSlug", [], "method", false, false, false, 7)]], "method", false, false, false, 7), "html", null, true);
            echo "\" class=\"text-secondary text-decoration-none\">
            <li class=\"nav-link fw-light py-1 list-group-item-action\"><strong>";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getCreatedAt", [], "method", false, false, false, 8), "d.m.y"), "html", null, true);
            echo "</strong> : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getName", [], "method", false, false, false, 8), "html", null, true);
            echo "</li>
        </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "/sidebar/posts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  53 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card mb-3 shadow\">
    <h6 class=\"card-header\">
        Articles récents
    </h6>
    <ul class=\"nav flex-column p-2\">
        {% for post in lastPosts %}
        <a href=\"{{ router.url('category', {'id': post.getId(), 'slug': post.getSlug()})}}\" class=\"text-secondary text-decoration-none\">
            <li class=\"nav-link fw-light py-1 list-group-item-action\"><strong>{{ post.getCreatedAt() | date('d.m.y') }}</strong> : {{ post.getName() }}</li>
        </a>
        {% endfor %}
    </ul>
</div>", "/sidebar/posts.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\sidebar\\posts.twig");
    }
}
