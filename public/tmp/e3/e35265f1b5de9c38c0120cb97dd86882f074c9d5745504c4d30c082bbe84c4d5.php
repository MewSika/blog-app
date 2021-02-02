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

/* admin/dashboard.twig */
class __TwigTemplate_138d58cc4cb156a55bf1dfee222d0277a135c571c5db0dbf2147e3442a0ccee2 extends Template
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
        return "admin/layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/layout/layout.twig", "admin/dashboard.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <title>Accueil administrator</title>
";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<h1>Dashboard</h1>
  <hr>
  <?php if(isset(\$_GET['login'])) : ?>
      <div class=\"alert alert-success alert-dismissible fade show\">
          Vous êtes bien identifié(e)
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
              <span aria-hidden=\"true\">&times;</span>
          </button>
      </div>
  <?php endif; ?>

  <?php if(\$user) : ?>
      <p class=>Vous êtes connecté en tant que <span class=\"fw-bold\"><?= \$user->getUsername() ;?></span></p>
  <?php endif; ?>
  <?php if(isset(\$_GET['denied'])) : ?>
      <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
        <strong>Accès à la page interdit</strong>
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
  </div>
  <?php endif; ?>
";
    }

    public function getTemplateName()
    {
        return "admin/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  56 => 5,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout/layout.twig' %}
{% block head %}
    <title>Accueil administrator</title>
{% endblock %}
{% block content %}
<h1>Dashboard</h1>
  <hr>
  <?php if(isset(\$_GET['login'])) : ?>
      <div class=\"alert alert-success alert-dismissible fade show\">
          Vous êtes bien identifié(e)
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
              <span aria-hidden=\"true\">&times;</span>
          </button>
      </div>
  <?php endif; ?>

  <?php if(\$user) : ?>
      <p class=>Vous êtes connecté en tant que <span class=\"fw-bold\"><?= \$user->getUsername() ;?></span></p>
  <?php endif; ?>
  <?php if(isset(\$_GET['denied'])) : ?>
      <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
        <strong>Accès à la page interdit</strong>
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
  </div>
  <?php endif; ?>
{% endblock %}", "admin/dashboard.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\dashboard.twig");
    }
}
