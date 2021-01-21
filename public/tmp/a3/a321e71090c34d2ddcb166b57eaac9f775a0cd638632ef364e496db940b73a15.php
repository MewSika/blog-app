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
class __TwigTemplate_4d7e868f7bcd102a30e10038b178fff486c2c7239817eab2c8c74d49f9ea71db extends Template
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
      ";
        // line 14
        $this->displayBlock('head', $context, $blocks);
        // line 17
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
        // line 48
        $macros["navbar"] = $this->macros["navbar"] = $this->loadTemplate("_navbar.twig", "layout/layout.twig", 48)->unwrap();
        // line 49
        echo "      ";
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "home"], "method", false, false, false, 49), "Accueil", "home"], 49, $context, $this->getSourceContext());
        echo "
      ";
        // line 50
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "blog"], "method", false, false, false, 50), "Blog", "blog"], 50, $context, $this->getSourceContext());
        echo "
      ";
        // line 51
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "contact"], "method", false, false, false, 51), "Nous contacter", "contact"], 51, $context, $this->getSourceContext());
        echo "
      ";
        // line 52
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "table"], "method", false, false, false, 52), "Todo", "test"], 52, $context, $this->getSourceContext());
        echo "
  </ul>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarDefault\" aria-controls=\"navbarDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
</nav>

<body class=\"d-flex flex-column h-100 bg-light\">
    <div class=\"container\">
      ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 63
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

    // line 14
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "        <title>Mon Site</title>
      ";
    }

    // line 61
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
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
        return array (  148 => 62,  144 => 61,  139 => 15,  135 => 14,  118 => 63,  116 => 61,  104 => 52,  100 => 51,  96 => 50,  91 => 49,  89 => 48,  56 => 17,  54 => 14,  39 => 1,);
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
      {{ navbar.item(router.url('home'), 'Accueil', 'home') }}
      {{ navbar.item(router.url('blog'), 'Blog', 'blog') }}
      {{ navbar.item(router.url('contact'), 'Nous contacter', 'contact') }}
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
