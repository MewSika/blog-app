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

/* layout/layout.twig */
class __TwigTemplate_19a43f6491eaaafb61ffd5de63ab833bb8a2c0e147520782038293cb604a3242 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<?php
use App\\HTML\\Nav;
?>

<!DOCTYPE html>
<html lang=\"fr\" class=\"h-100\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"<?= \$pageDescribe ?? ''?>\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Jekyll v4.1.1\">
    <script src=\"https://kit.fontawesome.com/a076d05399.js\"></script>
    <title>
      ";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        // line 18
        echo "    </title>
    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"<?= CSS_PATH ?>\"/>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
    <!-- Favicons -->
    <meta name=\"theme-color\" content=\"#563d7c\">

    <style>
      .text-border {
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
</head>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark mb-4 px-3\">
  <a class=\"navbar-brand\" href=\"/\"><i class='fas fa-home'></i></a>
  <ul class=\"navbar-nav mr-auto\">
    <?= Nav::nav_menu('nav-link', \$router) ?>
  </ul>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarDefault\" aria-controls=\"navbarDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
</nav>

<body class=\"d-flex flex-column h-100 bg-light\">
    <div class=\"container\">
      ";
        // line 59
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "    </div>
    <footer class=\"bg-dark py-4 footer mt-auto\">
      <div class=\"container text-light\">
          <?php if(DEBUG_TIME) :?>
            Générée en <?= round(1000* (microtime(true) - DEBUG_TIME)) ?>ms
          <?php endif; ?>
      </div>
    </footer>
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
</body>
</html>
";
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "        Mon Site
      ";
    }

    // line 59
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "      ";
    }

    public function getTemplateName()
    {
        return "layout/layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  132 => 60,  128 => 59,  123 => 16,  119 => 15,  102 => 61,  100 => 59,  57 => 18,  55 => 15,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
use App\\HTML\\Nav;
?>

<!DOCTYPE html>
<html lang=\"fr\" class=\"h-100\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"<?= \$pageDescribe ?? ''?>\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Jekyll v4.1.1\">
    <script src=\"https://kit.fontawesome.com/a076d05399.js\"></script>
    <title>
      {% block title %}
        Mon Site
      {% endblock %}
    </title>
    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"<?= CSS_PATH ?>\"/>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
    <!-- Favicons -->
    <meta name=\"theme-color\" content=\"#563d7c\">

    <style>
      .text-border {
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
</head>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark mb-4 px-3\">
  <a class=\"navbar-brand\" href=\"/\"><i class='fas fa-home'></i></a>
  <ul class=\"navbar-nav mr-auto\">
    <?= Nav::nav_menu('nav-link', \$router) ?>
  </ul>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarDefault\" aria-controls=\"navbarDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
</nav>

<body class=\"d-flex flex-column h-100 bg-light\">
    <div class=\"container\">
      {% block content %}
      {% endblock %}
    </div>
    <footer class=\"bg-dark py-4 footer mt-auto\">
      <div class=\"container text-light\">
          <?php if(DEBUG_TIME) :?>
            Générée en <?= round(1000* (microtime(true) - DEBUG_TIME)) ?>ms
          <?php endif; ?>
      </div>
    </footer>
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
</body>
</html>
", "layout/layout.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\layout\\layout.twig");
    }
}
