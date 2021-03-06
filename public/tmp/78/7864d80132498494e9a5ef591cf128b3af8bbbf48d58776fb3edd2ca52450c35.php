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


    <link rel=\"shortcut icon\" type=\"image/ico\" href=\"/img/front/logo_red_24x24.png\" />
    <link rel=\"icon\" type=\"image/ico\" href=\"/img/front/logo_red_24x24.png\" />

    ";
        // line 28
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
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "results"], "method", false, false, false, 41), "html", null, true);
        echo "\">
              <label class=\"input-group-text\" for=\"fieldSearch\"><i class=\"bi bi-search\"></i></label>
              <input class=\"form-control\" id=\"fieldSearch\" name=\"q\" type=\"text\" placeholder=\"Rechercher un article...\">
          </form>
          <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "home"], "method", false, false, false, 45), "html", null, true);
        echo "\" class=\"text-decoration-none col-2\">
            <img src=\"/img/front/logo_red_36x36.png\" alt=\"Logo colyseum\" class=\"d-none d-lg-inline\">
          </a>
          <h1 class=\"text-light fw-bold fst-italic d-none d-lg-inline text-center col\">
            <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "home"], "method", false, false, false, 49), "html", null, true);
        echo "\" class=\"text-decoration-none text-light\">
              <span class=\"red\">MMA</span>COLISEUM
            </a>
          </h1>
          ";
        // line 54
        echo "          <form class=\"form-inline form-navbar d-none d-lg-block col-3\" action=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "results"], "method", false, false, false, 54), "html", null, true);
        echo "\">
              <input class=\"form-control\" name=\"q\" type=\"text\" placeholder=\"Rechercher un article...\">
          </form>
          ";
        // line 58
        echo "          <ul class=\"navbar-nav justify-content-around\">
              ";
        // line 59
        $macros["navbar"] = $this->macros["navbar"] = $this->loadTemplate("_navbar.twig", "layout/layout.twig", 59)->unwrap();
        // line 60
        echo "              ";
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "home"], "method", false, false, false, 60), "Accueil", "/"], 60, $context, $this->getSourceContext());
        echo "
              ";
        // line 61
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "blog"], "method", false, false, false, 61), "Actus", "/news"], 61, $context, $this->getSourceContext());
        echo "
              ";
        // line 62
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "fighters"], "method", false, false, false, 62), "Combattants", "/fighters"], 62, $context, $this->getSourceContext());
        echo "
              ";
        // line 63
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "contact"], "method", false, false, false, 63), "Contact", "/contact"], 63, $context, $this->getSourceContext());
        echo "
              ";
        // line 64
        if ( !(null === ($context["user"] ?? null))) {
            // line 65
            echo "                ";
            echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "account"], "method", false, false, false, 65), "Mon compte", "/account"], 65, $context, $this->getSourceContext());
            echo "
              ";
        } else {
            // line 67
            echo "                ";
            echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "f_login"], "method", false, false, false, 67), "Connexion", "/login"], 67, $context, $this->getSourceContext());
            echo "
              ";
        }
        // line 69
        echo "          </ul>
      </div>
    </div>
</nav>
<body class=\"d-flex flex-column h-100 bg-light background\">
    ";
        // line 75
        echo "    <div id=\"fb-root\"></div>
    <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0\" nonce=\"iGEZyMRh\"></script>
    <div class=\"container col-sm-9\">
      ";
        // line 78
        $this->displayBlock('content', $context, $blocks);
        // line 80
        echo "    </div>
    <footer class=\"bg-dark py-4 footer mt-auto\">
      <div class=\"container text-light\">
          <ul class=\"nav flex-column\">
              ";
        // line 84
        echo twig_call_macro($macros["navbar"], "macro_footeritem", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "home"], "method", false, false, false, 84), "Accueil"], 84, $context, $this->getSourceContext());
        echo "
              ";
        // line 85
        echo twig_call_macro($macros["navbar"], "macro_footeritem", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "blog"], "method", false, false, false, 85), "Actus", "/news"], 85, $context, $this->getSourceContext());
        echo "
              ";
        // line 86
        echo twig_call_macro($macros["navbar"], "macro_footeritem", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "fighters"], "method", false, false, false, 86), "Combattants"], 86, $context, $this->getSourceContext());
        echo "
              ";
        // line 87
        echo twig_call_macro($macros["navbar"], "macro_footeritem", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "contact"], "method", false, false, false, 87), "Contact"], 87, $context, $this->getSourceContext());
        echo "
              ";
        // line 88
        if ( !(null === ($context["user"] ?? null))) {
            // line 89
            echo "                ";
            echo twig_call_macro($macros["navbar"], "macro_footeritem", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "account"], "method", false, false, false, 89), "Mon compte"], 89, $context, $this->getSourceContext());
            echo "
              ";
        } else {
            // line 91
            echo "                ";
            echo twig_call_macro($macros["navbar"], "macro_footeritem", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "f_login"], "method", false, false, false, 91), "Connexion"], 91, $context, $this->getSourceContext());
            echo "
              ";
        }
        // line 93
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

    // line 78
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
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
        return array (  233 => 79,  229 => 78,  224 => 15,  220 => 14,  214 => 10,  210 => 9,  198 => 93,  192 => 91,  186 => 89,  184 => 88,  180 => 87,  176 => 86,  172 => 85,  168 => 84,  162 => 80,  160 => 78,  155 => 75,  148 => 69,  142 => 67,  136 => 65,  134 => 64,  130 => 63,  126 => 62,  122 => 61,  117 => 60,  115 => 59,  112 => 58,  105 => 54,  98 => 49,  91 => 45,  84 => 41,  69 => 28,  57 => 17,  55 => 14,  52 => 13,  50 => 9,  40 => 1,);
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


    <link rel=\"shortcut icon\" type=\"image/ico\" href=\"/img/front/logo_red_24x24.png\" />
    <link rel=\"icon\" type=\"image/ico\" href=\"/img/front/logo_red_24x24.png\" />

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
