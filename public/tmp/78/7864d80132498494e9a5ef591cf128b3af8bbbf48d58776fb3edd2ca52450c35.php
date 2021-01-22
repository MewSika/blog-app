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
class __TwigTemplate_fa95102433346699e323a413baf0ebcb6b02145a1a573d08a93b04c62b76a1c2 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Jekyll v4.1.1\">
    <script src=\"https://kit.fontawesome.com/a076d05399.js\"></script>
      ";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 13
        echo "    <!-- Bootstrap core CSS -->
    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!-- Favicons -->
    <meta name=\"theme-color\" content=\"#563d7c\">
    <!-- Custom styles for this template -->
</head>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark mb-4 px-3\">
  <a class=\"navbar-brand\" href=\"/\"><i class='fas fa-home'></i></a>
  <ul class=\"navbar-nav mr-auto\">
    ";
        // line 27
        $macros["navbar"] = $this->macros["navbar"] = $this->loadTemplate("_navbar.twig", "layout/layout.twig", 27)->unwrap();
        // line 28
        echo "      ";
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "home"], "method", false, false, false, 28), "Accueil", "/"], 28, $context, $this->getSourceContext());
        echo "
      ";
        // line 29
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "blog"], "method", false, false, false, 29), "Blog", "/blog"], 29, $context, $this->getSourceContext());
        echo "
      ";
        // line 30
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "contact"], "method", false, false, false, 30), "Contact", "/contact"], 30, $context, $this->getSourceContext());
        echo "
      ";
        // line 31
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "table"], "method", false, false, false, 31), "Todo", "test"], 31, $context, $this->getSourceContext());
        echo "
  </ul>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarDefault\" aria-controls=\"navbarDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
</nav>

<body class=\"d-flex flex-column h-100 bg-light\">
    <div class=\"container\">
      ";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 42
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

    // line 9
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "        <title>Mon Site</title>
        <meta name=\"description\" content=\"Accueil de Pixel Blog\">
      ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"/style/style.css\"/>
    ";
    }

    // line 40
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
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
        return array (  138 => 41,  134 => 40,  129 => 15,  125 => 14,  119 => 10,  115 => 9,  98 => 42,  96 => 40,  84 => 31,  80 => 30,  76 => 29,  71 => 28,  69 => 27,  57 => 17,  55 => 14,  52 => 13,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\" class=\"h-100\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Jekyll v4.1.1\">
    <script src=\"https://kit.fontawesome.com/a076d05399.js\"></script>
      {% block head %}
        <title>Mon Site</title>
        <meta name=\"description\" content=\"Accueil de Pixel Blog\">
      {% endblock %}
    <!-- Bootstrap core CSS -->
    {% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/style/style.css\"/>
    {% endblock %}
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!-- Favicons -->
    <meta name=\"theme-color\" content=\"#563d7c\">
    <!-- Custom styles for this template -->
</head>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark mb-4 px-3\">
  <a class=\"navbar-brand\" href=\"/\"><i class='fas fa-home'></i></a>
  <ul class=\"navbar-nav mr-auto\">
    {% import \"_navbar.twig\" as navbar %}
      {{ navbar.item(router.url('home'), 'Accueil', '/') }}
      {{ navbar.item(router.url('blog'), 'Blog', '/blog') }}
      {{ navbar.item(router.url('contact'), 'Contact', '/contact') }}
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
