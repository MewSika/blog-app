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
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext&display=swap' rel='stylesheet' type='text/css'>
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css\">
    <meta name=\"theme-color\" content=\"#563d7c\">
</head>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark px-3 mb-4 container-fluid sticky-top\">
    <div class=\"col-10 m-auto\">
      <button class=\"navbar-toggler mb-2\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarhome\" aria-controls=\"navbarhome\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarhome\">
        <div class=\"row g-2 col-10 m-auto\">
          <form class=\"input-group my-3 d-lg-none my-3 col\" action=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "results"], "method", false, false, false, 30), "html", null, true);
        echo "\">
              <label class=\"input-group-text\" for=\"fieldSearch\"><i class=\"bi bi-search\"></i></label>
              <input class=\"form-control\" id=\"fieldSearch\" name=\"q\" type=\"text\" placeholder=\"Rechercher\">
          </form>
          <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "home"], "method", false, false, false, 34), "html", null, true);
        echo "\" class=\"text-decoration-none col-2\">
            <img src=\"/img/front/logo_red_36x36.png\" alt=\"Logo colyseum\" class=\"d-none d-lg-inline\">
          </a>
          <h1 class=\"text-light fw-bold fst-italic d-none d-lg-inline text-center col\">
              <span class=\"red\">MMA</span> COLISEUM
          </h1>
          ";
        // line 41
        echo "          <form class=\"form-inline form-navbar d-none d-lg-block col-3\" action=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "results"], "method", false, false, false, 41), "html", null, true);
        echo "\">
              <input class=\"form-control\" name=\"q\" type=\"text\" placeholder=\"Rechercher\">
          </form>
          ";
        // line 45
        echo "          <ul class=\"navbar-nav justify-content-around\">
              ";
        // line 46
        $macros["navbar"] = $this->macros["navbar"] = $this->loadTemplate("_navbar.twig", "layout/layout.twig", 46)->unwrap();
        // line 47
        echo "              ";
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "home"], "method", false, false, false, 47), "Accueil", "/"], 47, $context, $this->getSourceContext());
        echo "
              ";
        // line 48
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "blog"], "method", false, false, false, 48), "Actus", "/blog"], 48, $context, $this->getSourceContext());
        echo "
              ";
        // line 49
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "home"], "method", false, false, false, 49), "Combattants", "/fighters"], 49, $context, $this->getSourceContext());
        echo "
              ";
        // line 50
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "contact"], "method", false, false, false, 50), "Contact", "/contact"], 50, $context, $this->getSourceContext());
        echo "
              ";
        // line 51
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "home"], "method", false, false, false, 51), "Inscription", "/signin"], 51, $context, $this->getSourceContext());
        echo "
          </ul>
      </div>
    </div>
</nav>

<body class=\"d-flex flex-column h-100 bg-light background\">
    <div class=\"container col-xs-12 col-sm-9\">
      ";
        // line 59
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "    </div>
    <footer class=\"bg-dark py-4 footer mt-auto\">
      <div class=\"container text-light\">
      Navigation + mentions légales
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
        <meta name=\"description\" content=\"Accueil de Colyseum MMA\">
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

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 60,  164 => 59,  159 => 15,  155 => 14,  149 => 10,  145 => 9,  130 => 61,  128 => 59,  117 => 51,  113 => 50,  109 => 49,  105 => 48,  100 => 47,  98 => 46,  95 => 45,  88 => 41,  79 => 34,  72 => 30,  57 => 17,  55 => 14,  52 => 13,  50 => 9,  40 => 1,);
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
        <meta name=\"description\" content=\"Accueil de Colyseum MMA\">
      {% endblock %}
    <!-- Bootstrap core CSS -->
    {% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/style/style.css\"/>
    {% endblock %}
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext&display=swap' rel='stylesheet' type='text/css'>
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css\">
    <meta name=\"theme-color\" content=\"#563d7c\">
</head>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark px-3 mb-4 container-fluid sticky-top\">
    <div class=\"col-10 m-auto\">
      <button class=\"navbar-toggler mb-2\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarhome\" aria-controls=\"navbarhome\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarhome\">
        <div class=\"row g-2 col-10 m-auto\">
          <form class=\"input-group my-3 d-lg-none my-3 col\" action=\"{{router.url('results')}}\">
              <label class=\"input-group-text\" for=\"fieldSearch\"><i class=\"bi bi-search\"></i></label>
              <input class=\"form-control\" id=\"fieldSearch\" name=\"q\" type=\"text\" placeholder=\"Rechercher\">
          </form>
          <a href=\"{{ router.url('home') }}\" class=\"text-decoration-none col-2\">
            <img src=\"/img/front/logo_red_36x36.png\" alt=\"Logo colyseum\" class=\"d-none d-lg-inline\">
          </a>
          <h1 class=\"text-light fw-bold fst-italic d-none d-lg-inline text-center col\">
              <span class=\"red\">MMA</span> COLISEUM
          </h1>
          {# Search #}
          <form class=\"form-inline form-navbar d-none d-lg-block col-3\" action=\"{{router.url('results')}}\">
              <input class=\"form-control\" name=\"q\" type=\"text\" placeholder=\"Rechercher\">
          </form>
          {# Navbar list #}
          <ul class=\"navbar-nav justify-content-around\">
              {% import \"_navbar.twig\" as navbar %}
              {{ navbar.item(router.url('home'), 'Accueil', '/') }}
              {{ navbar.item(router.url('blog'), 'Actus', '/blog') }}
              {{ navbar.item(router.url('home'), 'Combattants', '/fighters') }}
              {{ navbar.item(router.url('contact'), 'Contact', '/contact') }}
              {{ navbar.item(router.url('home'), 'Inscription', '/signin') }}
          </ul>
      </div>
    </div>
</nav>

<body class=\"d-flex flex-column h-100 bg-light background\">
    <div class=\"container col-xs-12 col-sm-9\">
      {% block content %}
      {% endblock %}
    </div>
    <footer class=\"bg-dark py-4 footer mt-auto\">
      <div class=\"container text-light\">
      Navigation + mentions légales
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
