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

/* admin/_menu.twig */
class __TwigTemplate_35c293df8cd81e1b61acc6acdf267f37b2c5611d6deb54a31f2a556cdf638046 extends Template
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
        echo "<nav id=\"sidebarMenu\" class=\"col-md-3 col-lg-2 d-md-block bg-light sidebar collapse\">
    <h6 class=\"sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted\">
        Menu
    </h6>
    <ul class=\"nav flex-column mb-2\">
        <li class=\"nav-item\">
            <a class=\"text-dark nav-link small\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "posts_manage"], "method", false, false, false, 7), "html", null, true);
        echo "\">Gestion des articles</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"text-dark nav-link small\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "categories_manage"], "method", false, false, false, 10), "html", null, true);
        echo "\">Gestion des catégories</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"text-dark nav-link small\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "fighters_manage"], "method", false, false, false, 13), "html", null, true);
        echo "\">Gestion des combattants</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"text-dark nav-link small\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "users_manage"], "method", false, false, false, 16), "html", null, true);
        echo "\">Gestion des utilisateurs</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"text-dark nav-link small\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "import"], "method", false, false, false, 19), "html", null, true);
        echo "\">Import données combattants</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"text-dark nav-link small\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "comments_manage"], "method", false, false, false, 22), "html", null, true);
        echo "\">Modération des commentaires</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"text-dark nav-link small\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "import"], "method", false, false, false, 25), "html", null, true);
        echo "\">Import données combattants</a>
        </li>
    </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "admin/_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  75 => 22,  69 => 19,  63 => 16,  57 => 13,  51 => 10,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav id=\"sidebarMenu\" class=\"col-md-3 col-lg-2 d-md-block bg-light sidebar collapse\">
    <h6 class=\"sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted\">
        Menu
    </h6>
    <ul class=\"nav flex-column mb-2\">
        <li class=\"nav-item\">
            <a class=\"text-dark nav-link small\" href=\"{{ router.url('posts_manage')}}\">Gestion des articles</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"text-dark nav-link small\" href=\"{{ router.url('categories_manage')}}\">Gestion des catégories</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"text-dark nav-link small\" href=\"{{ router.url('fighters_manage')}}\">Gestion des combattants</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"text-dark nav-link small\" href=\"{{ router.url('users_manage')}}\">Gestion des utilisateurs</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"text-dark nav-link small\" href=\"{{ router.url('import')}}\">Import données combattants</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"text-dark nav-link small\" href=\"{{ router.url('comments_manage')}}\">Modération des commentaires</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"text-dark nav-link small\" href=\"{{ router.url('import')}}\">Import données combattants</a>
        </li>
    </ul>
</nav>", "admin/_menu.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\_menu.twig");
    }
}
