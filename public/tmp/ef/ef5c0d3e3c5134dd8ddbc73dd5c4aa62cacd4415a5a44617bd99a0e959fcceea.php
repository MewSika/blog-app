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

/* home.php */
class __TwigTemplate_6fcbeaa1b9081b9061795778ca00c2a9094d1faf97555049a6868e8ee0bb27d8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<h1 class=\"display-3 fw-bold\">Bienvenue sur Pixel Blog !</h1>
<hr>
<div class=\"row\">
    <aside class=\"col-md-3\">
        <?php require __DIR__.'/blog/_side.php'; ?>
    </aside>
    <div class=\"col-md-9\">
        <h2>Dernières actualités : </h2>
        <div class=\"row justify-content-center\">
                <?php foreach(\$lastPosts as \$k => \$post) :?>
                    <?php require '../views/blog/_homeTable.php'; ?>
                <?php endforeach ;?>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "home.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1 class=\"display-3 fw-bold\">Bienvenue sur Pixel Blog !</h1>
<hr>
<div class=\"row\">
    <aside class=\"col-md-3\">
        <?php require __DIR__.'/blog/_side.php'; ?>
    </aside>
    <div class=\"col-md-9\">
        <h2>Dernières actualités : </h2>
        <div class=\"row justify-content-center\">
                <?php foreach(\$lastPosts as \$k => \$post) :?>
                    <?php require '../views/blog/_homeTable.php'; ?>
                <?php endforeach ;?>
        </div>
    </div>
</div>
", "home.php", "C:\\wamp64\\www\\ProjetGA\\templates\\home.php");
    }
}
