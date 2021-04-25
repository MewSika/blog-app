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
class __TwigTemplate_1a913e3e73c0d2f4e853b91304389f532bbe50156abdb848c8339cef8adb5625 extends Template
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
    <meta name=\"viewport\"   content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"author\"     content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\"  content=\"Jekyll v4.1.1\">
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
    <link rel=\"stylesheet\"    href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css\">
    <meta name=\"theme-color\"  content=\"#563d7c\">

    <link rel=\"shortcut icon\" type=\"image/ico\" href=\"/img/front/logo_red_24x24.png\" />
    <link rel=\"icon\"          type=\"image/ico\" href=\"/img/front/logo_red_24x24.png\" />
    <link rel=\"canonical\"     href=\"https://www.mma-coliseum.com";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\CustomExtensions']->currentPage($context), "html", null, true);
        echo "\"  />

    ";
        // line 28
        echo "    <meta name=\"robots\"               content=\"index,follow\">
    <meta property=\"og:url\"           content=\"https://www.mma-coliseum.com/\" />
    <meta property=\"og:type\"          content=\"website\" />
    <meta property=\"og:title\"         content=\"MMA Coliseum\" />
    <meta property=\"og:description\"   content=\"Accueil de MMA Coliseum\" />
    <meta property=\"og:image\"         content=\"https://www.mma-coliseum.com/img/front/background_red_logo.png\" />
</head>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark bg-gradient px-3 mb-4 container-fluid sticky-top\">
    <div class=\"col-10 m-auto\">
      <button class=\"navbar-toggler mb-2\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarhome\" aria-controls=\"navbarhome\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarhome\">
        <div class=\"row g-2 col-10 m-auto\">
          <form class=\"input-group my-3 d-lg-none my-3 col\" action=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "results"], "method", false, false, false, 43), "html", null, true);
        echo "\">
              <label class=\"input-group-text\" for=\"fieldSearch\"><i class=\"bi bi-search\"></i></label>
              <input class=\"form-control\" id=\"fieldSearch\" name=\"q\" type=\"text\" placeholder=\"Rechercher un article...\">
          </form>
          <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "home"], "method", false, false, false, 47), "html", null, true);
        echo "\" class=\"text-decoration-none col-2\">
            <img src=\"/img/front/logo_red_36x36.png\" alt=\"Logo colyseum\" class=\"d-none d-lg-inline\" loading=\"lazy\">
          </a>
          <h4 class=\"fw-bold fst-italic text-center d-none d-lg-inline col\">
            <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "home"], "method", false, false, false, 51), "html", null, true);
        echo "\" class=\"text-decoration-none text-light\">
              <span class=\"red\">MMA</span>COLISEUM
            </a>
          </h4>
          ";
        // line 55
        $this->loadTemplate("_navSignin.twig", "layout/layout.twig", 55)->display($context);
        // line 56
        echo "          ";
        // line 57
        echo "          <form class=\"form-inline form-navbar input-group-sm d-none d-lg-block col-2\" action=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "results"], "method", false, false, false, 57), "html", null, true);
        echo "\">
              <input class=\"form-control\" name=\"q\" type=\"text\" placeholder=\"Rechercher un article...\">
          </form>
          ";
        // line 61
        echo "          <ul class=\"navbar-nav justify-content-around\">
              ";
        // line 62
        $macros["navbar"] = $this->macros["navbar"] = $this->loadTemplate("_navbar.twig", "layout/layout.twig", 62)->unwrap();
        // line 63
        echo "              ";
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "home"], "method", false, false, false, 63), "Accueil", "/"], 63, $context, $this->getSourceContext());
        echo "
              ";
        // line 64
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "blog"], "method", false, false, false, 64), "Actus", "/news"], 64, $context, $this->getSourceContext());
        echo "
              ";
        // line 65
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "fighters"], "method", false, false, false, 65), "Combattants", "/fighters"], 65, $context, $this->getSourceContext());
        echo "
              ";
        // line 66
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "contact"], "method", false, false, false, 66), "Contact", "/contact"], 66, $context, $this->getSourceContext());
        echo "
              ";
        // line 67
        if ( !(null === ($context["user"] ?? null))) {
            // line 68
            echo "                ";
            echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "account"], "method", false, false, false, 68), "Mon compte", "/account"], 68, $context, $this->getSourceContext());
            echo "
              ";
        } else {
            // line 70
            echo "                ";
            echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "f_login"], "method", false, false, false, 70), "Connexion", "/login"], 70, $context, $this->getSourceContext());
            echo "
              ";
        }
        // line 72
        echo "          </ul>
      </div>
    </div>
</nav>

<body class=\"d-flex flex-column h-100 bg-light background\">
    ";
        // line 79
        echo "    <div id=\"fb-root\"></div>
    <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0\" nonce=\"iGEZyMRh\"></script>
    <div class=\"container col-sm-9\">
      ";
        // line 82
        $this->displayBlock('content', $context, $blocks);
        // line 84
        echo "    </div>

    <footer class=\"bg-dark py-2 footer mt-auto\">
      <div class=\"container d-flex justify-content-center text-secondary\">
              ";
        // line 88
        echo twig_call_macro($macros["navbar"], "macro_footeritem", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "home"], "method", false, false, false, 88), "Accueil"], 88, $context, $this->getSourceContext());
        echo " |
              ";
        // line 89
        echo twig_call_macro($macros["navbar"], "macro_footeritem", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "blog"], "method", false, false, false, 89), "Actus", "/news"], 89, $context, $this->getSourceContext());
        echo " | 
              ";
        // line 90
        echo twig_call_macro($macros["navbar"], "macro_footeritem", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "fighters"], "method", false, false, false, 90), "Combattants"], 90, $context, $this->getSourceContext());
        echo " | 
              ";
        // line 91
        echo twig_call_macro($macros["navbar"], "macro_footeritem", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "contact"], "method", false, false, false, 91), "Contact"], 91, $context, $this->getSourceContext());
        echo " | 
              ";
        // line 92
        if ( !(null === ($context["user"] ?? null))) {
            // line 93
            echo "                ";
            echo twig_call_macro($macros["navbar"], "macro_footeritem", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "account"], "method", false, false, false, 93), "Mon compte"], 93, $context, $this->getSourceContext());
            echo "
              ";
        } else {
            // line 95
            echo "                ";
            echo twig_call_macro($macros["navbar"], "macro_footeritem", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "f_login"], "method", false, false, false, 95), "Connexion"], 95, $context, $this->getSourceContext());
            echo "
              ";
        }
        // line 97
        echo "      </div>
      <p class=\"text-center small text-secondary\">MMA-Coliseum.com. Tous droits réservés © 2021 - 2021</p>
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

    // line 82
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
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
        return array (  243 => 83,  239 => 82,  234 => 15,  230 => 14,  224 => 10,  220 => 9,  208 => 97,  202 => 95,  196 => 93,  194 => 92,  190 => 91,  186 => 90,  182 => 89,  178 => 88,  172 => 84,  170 => 82,  165 => 79,  157 => 72,  151 => 70,  145 => 68,  143 => 67,  139 => 66,  135 => 65,  131 => 64,  126 => 63,  124 => 62,  121 => 61,  114 => 57,  112 => 56,  110 => 55,  103 => 51,  96 => 47,  89 => 43,  72 => 28,  67 => 25,  57 => 17,  55 => 14,  52 => 13,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\" class=\"h-100\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\"   content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"author\"     content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\"  content=\"Jekyll v4.1.1\">
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
    <link rel=\"stylesheet\"    href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css\">
    <meta name=\"theme-color\"  content=\"#563d7c\">

    <link rel=\"shortcut icon\" type=\"image/ico\" href=\"/img/front/logo_red_24x24.png\" />
    <link rel=\"icon\"          type=\"image/ico\" href=\"/img/front/logo_red_24x24.png\" />
    <link rel=\"canonical\"     href=\"https://www.mma-coliseum.com{{currentPage()}}\"  />

    {# FB API #}
    <meta name=\"robots\"               content=\"index,follow\">
    <meta property=\"og:url\"           content=\"https://www.mma-coliseum.com/\" />
    <meta property=\"og:type\"          content=\"website\" />
    <meta property=\"og:title\"         content=\"MMA Coliseum\" />
    <meta property=\"og:description\"   content=\"Accueil de MMA Coliseum\" />
    <meta property=\"og:image\"         content=\"https://www.mma-coliseum.com/img/front/background_red_logo.png\" />
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
            <img src=\"/img/front/logo_red_36x36.png\" alt=\"Logo colyseum\" class=\"d-none d-lg-inline\" loading=\"lazy\">
          </a>
          <h4 class=\"fw-bold fst-italic text-center d-none d-lg-inline col\">
            <a href=\"{{ router.url('home') }}\" class=\"text-decoration-none text-light\">
              <span class=\"red\">MMA</span>COLISEUM
            </a>
          </h4>
          {% include \"_navSignin.twig\" %}
          {# Search #}
          <form class=\"form-inline form-navbar input-group-sm d-none d-lg-block col-2\" action=\"{{router.url('results')}}\">
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

    <footer class=\"bg-dark py-2 footer mt-auto\">
      <div class=\"container d-flex justify-content-center text-secondary\">
              {{ navbar.footeritem(router.url('home'), 'Accueil') }} |
              {{ navbar.footeritem(router.url('blog'), 'Actus', '/news') }} | 
              {{ navbar.footeritem(router.url('fighters'), 'Combattants') }} | 
              {{ navbar.footeritem(router.url('contact'), 'Contact') }} | 
              {% if user is not null %}
                {{ navbar.footeritem(router.url('account'), 'Mon compte') }}
              {% else %}
                {{ navbar.footeritem(router.url('f_login'), 'Connexion') }}
              {% endif %}
      </div>
      <p class=\"text-center small text-secondary\">MMA-Coliseum.com. Tous droits réservés © 2021 - 2021</p>
    </footer>
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
</body>
</html>
", "layout/layout.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\layout\\layout.twig");
    }
}
