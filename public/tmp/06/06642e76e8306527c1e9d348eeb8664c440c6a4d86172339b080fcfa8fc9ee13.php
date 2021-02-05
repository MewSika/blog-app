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
            <a class=\"text-dark nav-link small\" href=\"<?= \$router->url('admin_post_new');?>\">Créer un article</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"text-dark nav-link small\" href=\"<?= \$router->url('posts_manage');?>\">Gestion des articles</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"text-dark nav-link small\" href=\"<?= \$router->url('admin_category_new');?>\">Créer une catégorie</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"text-dark nav-link small\" href=\"<?= \$router->url('categories_manage');?>\">Gestion des catégories</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"text-dark nav-link small\" href=\"<?= \$router->url('user');?>\">Gestion utilisateurs</a>
        </li>
    </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "admin/_menu.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav id=\"sidebarMenu\" class=\"col-md-3 col-lg-2 d-md-block bg-light sidebar collapse\">
    <h6 class=\"sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted\">
        Menu
    </h6>
    <ul class=\"nav flex-column mb-2\">
        <li class=\"nav-item\">
            <a class=\"text-dark nav-link small\" href=\"<?= \$router->url('admin_post_new');?>\">Créer un article</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"text-dark nav-link small\" href=\"<?= \$router->url('posts_manage');?>\">Gestion des articles</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"text-dark nav-link small\" href=\"<?= \$router->url('admin_category_new');?>\">Créer une catégorie</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"text-dark nav-link small\" href=\"<?= \$router->url('categories_manage');?>\">Gestion des catégories</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"text-dark nav-link small\" href=\"<?= \$router->url('user');?>\">Gestion utilisateurs</a>
        </li>
    </ul>
</nav>", "admin/_menu.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\_menu.twig");
    }
}