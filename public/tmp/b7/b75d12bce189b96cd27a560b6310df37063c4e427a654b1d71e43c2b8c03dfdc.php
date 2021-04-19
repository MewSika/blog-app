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

/* admin/layout/layout.twig */
class __TwigTemplate_d59a2b7bf8278cb287b627fd50bd19e3c2638a319582e1f5d40db3ac34df9606 extends Template
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
        echo "<html lang=\"fr\" class=\"h-100\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"<?= \$pageDescribe ?? ''?>\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Hugo 0.79.0\">
      ";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 12
        echo "    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/style/bo_style.css\"/>
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext&display=swap' rel='stylesheet' type='text/css'>
    
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\" integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">
    <!-- Bootstrap icons -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css\">

    <link rel=\"shortcut icon\" type=\"image/ico\" href=\"/img/front/logo_24x24.png\" />
    <link rel=\"icon\" type=\"image/ico\" href=\"/img/front/logo_24x24.png\" />

  ";
        // line 24
        echo "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css\">
    <script src=\"https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js\"></script>
    
</head>

<header class=\"navbar navbar-dark sticky-top bg-dark flex-md-nowrap py- shadow\">
  <a class=\"navbar-brand col-md-3 col-lg-2 me-0 px-3\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "dashboard"], "method", false, false, false, 30), "html", null, true);
        echo "\">Administration</a>
  <button class=\"navbar-toggler position-absolute d-md-none collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#sidebarMenu\" aria-controls=\"sidebarMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <ul class=\"navbar-nav px-3\">
    <li class=\"nav-item text-nowrap\">
      <form action=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "logout"], "method", false, false, false, 36), "html", null, true);
        echo "\" method=\"post\" class=\"m-0\">
        <button type=\"submit\" class=\"btn btn-dark\">Se déconnecter</button> 
      </form>
    </li>
  </ul>
</header>

<body class=\"d-flex flex-column h-100\">
  <div class=\"container-fluid h-100\">
    <div class=\"row h-100\">
      <nav id=\"sidebarMenu\" class=\"col-md-3 col-lg-2 d-md-block sidebar collapse navbar-nav navbar-expand-lg navbar-light\">
        <h6 class=\"sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted\">
            Menu
        </h6>
          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
          <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
            <ul class=\"navbar-nav flex-column ml-2\">
            ";
        // line 55
        $macros["navbar"] = $this->macros["navbar"] = $this->loadTemplate("admin/_menu.twig", "admin/layout/layout.twig", 55)->unwrap();
        // line 56
        echo "              ";
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "posts_manage"], "method", false, false, false, 56), "Gestion des articles", "/lagestion/posts"], 56, $context, $this->getSourceContext());
        echo "
              ";
        // line 57
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "comments_manage"], "method", false, false, false, 57), "Modération des commentaires", "/lagestion/comments"], 57, $context, $this->getSourceContext());
        echo "
              ";
        // line 58
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "categories_manage"], "method", false, false, false, 58), "Gestion des categories", "/lagestion/categories"], 58, $context, $this->getSourceContext());
        echo "
              <hr class=\"p-0 m-0 border-top\">
              ";
        // line 60
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "fighters_manage"], "method", false, false, false, 60), "Gestion des combattants", "/lagestion/fighters"], 60, $context, $this->getSourceContext());
        echo "
              ";
        // line 61
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "import"], "method", false, false, false, 61), "Import données combattants", "/lagestion/fighters/import"], 61, $context, $this->getSourceContext());
        echo "
              <hr class=\"p-0 m-0 border-top\">
              ";
        // line 63
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "newsletters_manage"], "method", false, false, false, 63), "Newsletters", "/lagestion/newsletters"], 63, $context, $this->getSourceContext());
        echo "
              ";
        // line 64
        echo twig_call_macro($macros["navbar"], "macro_item", [twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "url", [0 => "users_manage"], "method", false, false, false, 64), "Gestion des utilisateurs", "/lagestion/users"], 64, $context, $this->getSourceContext());
        echo "
          </div>
      </nav>
      <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-3\">
        ";
        // line 68
        $this->displayBlock('content', $context, $blocks);
        // line 70
        echo "      </main>
    </div>
  </div>
  <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
</body>

</html>
";
    }

    // line 8
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "        <title>Accueil administration</title>
        <meta name=\"description\" content=\"Accueil administration\">
      ";
    }

    // line 68
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "        ";
    }

    public function getTemplateName()
    {
        return "admin/layout/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 69,  163 => 68,  157 => 9,  153 => 8,  140 => 70,  138 => 68,  131 => 64,  127 => 63,  122 => 61,  118 => 60,  113 => 58,  109 => 57,  104 => 56,  102 => 55,  80 => 36,  71 => 30,  63 => 24,  50 => 12,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"fr\" class=\"h-100\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"<?= \$pageDescribe ?? ''?>\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Hugo 0.79.0\">
      {% block head %}
        <title>Accueil administration</title>
        <meta name=\"description\" content=\"Accueil administration\">
      {% endblock %}
    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/style/bo_style.css\"/>
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext&display=swap' rel='stylesheet' type='text/css'>
    
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\" integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">
    <!-- Bootstrap icons -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css\">

    <link rel=\"shortcut icon\" type=\"image/ico\" href=\"/img/front/logo_24x24.png\" />
    <link rel=\"icon\" type=\"image/ico\" href=\"/img/front/logo_24x24.png\" />

  {# Rédaction markdown #}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css\">
    <script src=\"https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js\"></script>
    
</head>

<header class=\"navbar navbar-dark sticky-top bg-dark flex-md-nowrap py- shadow\">
  <a class=\"navbar-brand col-md-3 col-lg-2 me-0 px-3\" href=\"{{ router.url('dashboard')}}\">Administration</a>
  <button class=\"navbar-toggler position-absolute d-md-none collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#sidebarMenu\" aria-controls=\"sidebarMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <ul class=\"navbar-nav px-3\">
    <li class=\"nav-item text-nowrap\">
      <form action=\"{{ router.url('logout') }}\" method=\"post\" class=\"m-0\">
        <button type=\"submit\" class=\"btn btn-dark\">Se déconnecter</button> 
      </form>
    </li>
  </ul>
</header>

<body class=\"d-flex flex-column h-100\">
  <div class=\"container-fluid h-100\">
    <div class=\"row h-100\">
      <nav id=\"sidebarMenu\" class=\"col-md-3 col-lg-2 d-md-block sidebar collapse navbar-nav navbar-expand-lg navbar-light\">
        <h6 class=\"sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted\">
            Menu
        </h6>
          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
          <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
            <ul class=\"navbar-nav flex-column ml-2\">
            {% import 'admin/_menu.twig' as navbar %}
              {{ navbar.item(router.url('posts_manage'), 'Gestion des articles', '/lagestion/posts') }}
              {{ navbar.item(router.url('comments_manage'), 'Modération des commentaires', '/lagestion/comments') }}
              {{ navbar.item(router.url('categories_manage'), 'Gestion des categories', '/lagestion/categories') }}
              <hr class=\"p-0 m-0 border-top\">
              {{ navbar.item(router.url('fighters_manage'), 'Gestion des combattants', '/lagestion/fighters') }}
              {{ navbar.item(router.url('import'), 'Import données combattants', '/lagestion/fighters/import') }}
              <hr class=\"p-0 m-0 border-top\">
              {{ navbar.item(router.url('newsletters_manage'), 'Newsletters', '/lagestion/newsletters') }}
              {{ navbar.item(router.url('users_manage'), 'Gestion des utilisateurs', '/lagestion/users') }}
          </div>
      </nav>
      <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-3\">
        {% block content %}
        {% endblock %}
      </main>
    </div>
  </div>
  <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
</body>

</html>
", "admin/layout/layout.twig", "C:\\wamp64\\www\\ProjetGA\\templates\\admin\\layout\\layout.twig");
    }
}
