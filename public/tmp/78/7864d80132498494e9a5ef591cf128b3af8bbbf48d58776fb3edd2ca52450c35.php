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
        echo "    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\"   rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext&display=swap' rel='stylesheet' type='text/css'>
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap\"          rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css\">
    <meta name=\"theme-color\" content=\"#563d7c\">



    ";
        // line 26
        echo "    <meta property=\"og:url\"           content=\"https://www.your-domain.com/your-page.html\" />
    <meta property=\"og:type\"          content=\"website\" />
    <meta property=\"og:title\"         content=\"MMA Coliseum\" />
    <meta property=\"og:description\"   content=\"Accueil de MMA Coliseum\" />
    <meta property=\"og:image\"         content=\"https://www.your-domain.com/path/image.jpg\" />
</head>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark bg-gradient px-3 mb-4 container-fluid sticky-top\">
    <div class=\"col-10 m-auto\">
      <button class=\"navbar-toggler mb-2\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarhome\" aria-controls=\"navbarhome\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarhome\">
        <div class=\"row g-2 col-10 m-auto\">
          <form class=\"input-group my-3 d-lg-none my-3 col\" action=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "results"], "method", false, false, false, 39), "html", null, true);
        echo "\">
              <label class=\"input-group-text\" for=\"fieldSearch\"><i class=\"bi bi-search\"></i></label>
              <input class=\"form-control\" id=\"fieldSearch\" name=\"q\" type=\"text\" placeholder=\"Rechercher un article...\">
          </form>
          <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "home"], "method", false, false, false, 43), "html", null, true);
        echo "\" class=\"text-decoration-none col-2\">
            <img src=\"/img/front/logo_red_36x36.png\" alt=\"Logo colyseum\" class=\"d-none d-lg-inline\">
          </a>
          <h1 class=\"text-light fw-bold fst-italic d-none d-lg-inline text-center col\">
            <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "home"], "method", false, false, false, 47), "html", null, true);
        echo "\" class=\"text-decoration-none text-light\">
              <span class=\"red\">MMA</span>COLISEUM
            </a>
          </h1>
          ";
        // line 52
        echo "          <form class=\"form-inline form-navbar d-none d-lg-block col-3\" action=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "results"], "method", false, false, false, 52), "html", null, true);
        echo "\">
              <input class=\"form-control\" name=\"q\" type=\"text\" placeholder=\"Rechercher un article...\">
          </form>
          ";
        // line 56
        echo "          <ul class=\"navbar-nav justify-content-around\">
              ";
        // line 57
        $macros["navbar"] = $this->macros["navbar"] = $this->loadTemplate("_navbar.twig", "layout/layout.twig", 57)->unwrap();
        // line 58
        echo "              ";
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "home"], "method", false, false, false, 58), "Accueil", "/"], 58, $context, $this->getSourceContext());
        echo "
              ";
        // line 59
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "blog"], "method", false, false, false, 59), "Actus", "/news"], 59, $context, $this->getSourceContext());
        echo "
              ";
        // line 60
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "fighters"], "method", false, false, false, 60), "Combattants", "/fighters"], 60, $context, $this->getSourceContext());
        echo "
              ";
        // line 61
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "contact"], "method", false, false, false, 61), "Contact", "/contact"], 61, $context, $this->getSourceContext());
        echo "
              ";
        // line 62
        if ( !(null === ($context["user"] ?? null))) {
            // line 63
            echo "                ";
            echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "account"], "method", false, false, false, 63), "Mon compte", "/account"], 63, $context, $this->getSourceContext());
            echo "
              ";
        } else {
            // line 65
            echo "                ";
            echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "f_login"], "method", false, false, false, 65), "Connexion", "/login"], 65, $context, $this->getSourceContext());
            echo "
              ";
        }
        // line 67
        echo "          </ul>
      </div>
    </div>
</nav>
<body class=\"d-flex flex-column h-100 bg-light background\">
    ";
        // line 73
        echo "    <div id=\"fb-root\"></div>
    <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0\" nonce=\"iGEZyMRh\"></script>
    <div class=\"container col-sm-9\">
      ";
        // line 76
        $this->displayBlock('content', $context, $blocks);
        // line 78
        echo "    </div>
    <footer class=\"bg-dark py-4 footer mt-auto\">
      <div class=\"container text-light\">
          <ul class=\"nav flex-column\">
              ";
        // line 82
        echo twig_call_macro($macros["navbar"], "macro_footeritem", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "home"], "method", false, false, false, 82), "Accueil"], 82, $context, $this->getSourceContext());
        echo "
              ";
        // line 83
        echo twig_call_macro($macros["navbar"], "macro_footeritem", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "blog"], "method", false, false, false, 83), "Actus", "/news"], 83, $context, $this->getSourceContext());
        echo "
              ";
        // line 84
        echo twig_call_macro($macros["navbar"], "macro_footeritem", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "fighters"], "method", false, false, false, 84), "Combattants"], 84, $context, $this->getSourceContext());
        echo "
              ";
        // line 85
        echo twig_call_macro($macros["navbar"], "macro_footeritem", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "contact"], "method", false, false, false, 85), "Contact"], 85, $context, $this->getSourceContext());
        echo "
              ";
        // line 86
        if ( !(null === ($context["user"] ?? null))) {
            // line 87
            echo "                ";
            echo twig_call_macro($macros["navbar"], "macro_footeritem", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "account"], "method", false, false, false, 87), "Mon compte"], 87, $context, $this->getSourceContext());
            echo "
              ";
        } else {
            // line 89
            echo "                ";
            echo twig_call_macro($macros["navbar"], "macro_footeritem", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "f_login"], "method", false, false, false, 89), "Connexion"], 89, $context, $this->getSourceContext());
            echo "
              ";
        }
        // line 91
        echo "          </ul>
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
        echo "        <title>MMA Coliseum</title>
        <meta name=\"description\" content=\"Accueil de MMA Coliseum\">
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

    // line 76
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
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
        return array (  231 => 77,  227 => 76,  222 => 15,  218 => 14,  212 => 10,  208 => 9,  196 => 91,  190 => 89,  184 => 87,  182 => 86,  178 => 85,  174 => 84,  170 => 83,  166 => 82,  160 => 78,  158 => 76,  153 => 73,  146 => 67,  140 => 65,  134 => 63,  132 => 62,  128 => 61,  124 => 60,  120 => 59,  115 => 58,  113 => 57,  110 => 56,  103 => 52,  96 => 47,  89 => 43,  82 => 39,  67 => 26,  57 => 17,  55 => 14,  52 => 13,  50 => 9,  40 => 1,);
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
        <title>MMA Coliseum</title>
        <meta name=\"description\" content=\"Accueil de MMA Coliseum\">
      {% endblock %}
    <!-- Bootstrap core CSS -->
    {% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/style/style.css\"/>
    {% endblock %}
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\"   rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext&display=swap' rel='stylesheet' type='text/css'>
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap\"          rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css\">
    <meta name=\"theme-color\" content=\"#563d7c\">



    {# FB API #}
    <meta property=\"og:url\"           content=\"https://www.your-domain.com/your-page.html\" />
    <meta property=\"og:type\"          content=\"website\" />
    <meta property=\"og:title\"         content=\"MMA Coliseum\" />
    <meta property=\"og:description\"   content=\"Accueil de MMA Coliseum\" />
    <meta property=\"og:image\"         content=\"https://www.your-domain.com/path/image.jpg\" />
</head>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark bg-gradient px-3 mb-4 container-fluid sticky-top\">
    <div class=\"col-10 m-auto\">
      <button class=\"navbar-toggler mb-2\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarhome\" aria-controls=\"navbarhome\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarhome\">
        <div class=\"row g-2 col-10 m-auto\">
          <form class=\"input-group my-3 d-lg-none my-3 col\" action=\"{{router.url('results')}}\">
              <label class=\"input-group-text\" for=\"fieldSearch\"><i class=\"bi bi-search\"></i></label>
              <input class=\"form-control\" id=\"fieldSearch\" name=\"q\" type=\"text\" placeholder=\"Rechercher un article...\">
          </form>
          <a href=\"{{ router.url('home') }}\" class=\"text-decoration-none col-2\">
            <img src=\"/img/front/logo_red_36x36.png\" alt=\"Logo colyseum\" class=\"d-none d-lg-inline\">
          </a>
          <h1 class=\"text-light fw-bold fst-italic d-none d-lg-inline text-center col\">
            <a href=\"{{ router.url('home') }}\" class=\"text-decoration-none text-light\">
              <span class=\"red\">MMA</span>COLISEUM
            </a>
          </h1>
          {# Search #}
          <form class=\"form-inline form-navbar d-none d-lg-block col-3\" action=\"{{router.url('results')}}\">
              <input class=\"form-control\" name=\"q\" type=\"text\" placeholder=\"Rechercher un article...\">
          </form>
          {# Navbar list #}
          <ul class=\"navbar-nav justify-content-around\">
              {% import \"_navbar.twig\" as navbar %}
              {{ navbar.item(router.url('home'), 'Accueil', '/') }}
              {{ navbar.item(router.url('blog'), 'Actus', '/news') }}
              {{ navbar.item(router.url('fighters'), 'Combattants', '/fighters') }}
              {{ navbar.item(router.url('contact'), 'Contact', '/contact') }}
              {% if user is not null %}
                {{ navbar.item(router.url('account'), 'Mon compte', '/account') }}
              {% else %}
                {{ navbar.item(router.url('f_login'), 'Connexion', '/login') }}
              {% endif %}
          </ul>
      </div>
    </div>
</nav>
<body class=\"d-flex flex-column h-100 bg-light background\">
    {# API FACEBOOK SHARE #}
    <div id=\"fb-root\"></div>
    <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0\" nonce=\"iGEZyMRh\"></script>
    <div class=\"container col-sm-9\">
      {% block content %}
      {% endblock %}
    </div>
    <footer class=\"bg-dark py-4 footer mt-auto\">
      <div class=\"container text-light\">
          <ul class=\"nav flex-column\">
              {{ navbar.footeritem(router.url('home'), 'Accueil') }}
              {{ navbar.footeritem(router.url('blog'), 'Actus', '/news') }}
              {{ navbar.footeritem(router.url('fighters'), 'Combattants') }}
              {{ navbar.footeritem(router.url('contact'), 'Contact') }}
              {% if user is not null %}
                {{ navbar.footeritem(router.url('account'), 'Mon compte') }}
              {% else %}
                {{ navbar.footeritem(router.url('f_login'), 'Connexion') }}
              {% endif %}
          </ul>
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
