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
class __TwigTemplate_659ce0b00b623a814e69ebfdfeabb9e1562acffda3c1f6cb326deb00e0ada0ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\" class=\"h-100\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"<?= \$pageDescribe ?? ''?>\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Jekyll v4.1.1\">
    <script src=\"https://kit.fontawesome.com/a076d05399.js\"></script>
      ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 13
        echo "    <!-- Bootstrap core CSS -->
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
    ";
        // line 44
        $macros["navbar"] = $this->macros["navbar"] = $this->loadTemplate("_navbar.twig", "layout/layout.twig", 44)->unwrap();
        // line 45
        echo "      ";
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "home"], "method", false, false, false, 45), "Accueil", "/"], 45, $context, $this->getSourceContext());
        echo "
      ";
        // line 46
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "blog"], "method", false, false, false, 46), "Blog", "/blog"], 46, $context, $this->getSourceContext());
        echo "
      ";
        // line 47
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "contact"], "method", false, false, false, 47), "Nous contacter", "/contact"], 47, $context, $this->getSourceContext());
        echo "
      ";
        // line 48
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "table"], "method", false, false, false, 48), "Todo", "test"], 48, $context, $this->getSourceContext());
        echo "
  </ul>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarDefault\" aria-controls=\"navbarDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
</nav>

<body class=\"d-flex flex-column h-100 bg-light\">
    <div class=\"container\">
      ";
        // line 57
        $this->displayBlock('content', $context, $blocks);
        // line 59
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

    // line 10
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "        <title>Mon Site</title>
      ";
    }

    // line 57
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "      ";
    }

    public function getTemplateName()
    {
        return "layout/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 58,  140 => 57,  135 => 11,  131 => 10,  114 => 59,  112 => 57,  100 => 48,  96 => 47,  92 => 46,  87 => 45,  85 => 44,  52 => 13,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\" class=\"h-100\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"<?= \$pageDescribe ?? ''?>\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Jekyll v4.1.1\">
    <script src=\"https://kit.fontawesome.com/a076d05399.js\"></script>
      {% block head %}
        <title>Mon Site</title>
      {% endblock %}
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
    {% import \"_navbar.twig\" as navbar %}
      {{ navbar.item(router.url('home'), 'Accueil', '/') }}
      {{ navbar.item(router.url('blog'), 'Blog', '/blog') }}
      {{ navbar.item(router.url('contact'), 'Nous contacter', '/contact') }}
      {{ navbar.item(router.url('table'), 'Todo', 'test') }}
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
