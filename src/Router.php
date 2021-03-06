<?php
namespace App;

use App\App;
use App\Table\UserTable;
use App\Security\ForbiddenException;

class Router {

    /**
     * @var string
     */
    private $controllerPath;

    /**
     * @var AltoRouter
     */
    private $router;
    
    /**
     *
     * @var Twig\Environment
     */
    private $twig;

    public function __construct(\Twig\Environment $twig, string $controllerPath)
    {
        $this->twig = $twig;
        $this->controllerPath = $controllerPath;
        $this->router = new \AltoRouter();
    }

    public function match(string $url, string $controller, ?string $name = null): self
    {
        $this->router->map('GET|POST', $url, $controller, $name);

        return $this;
    }

    public function url (string $name, array $params = []) {
        return $this->router->generate($name, $params);
    }

    public function run(): self
    {
        $auth = App::getAuth();
        $match = $this->router->match();
        if($match === false) {
            $controller = "e404";
        } else {
            $controller = $match['target'] ;
            $params = $match['params'];
        }
        $router = $this;
        $twig = $this->twig;

        /* Vérifie accès BO */
        $isAdmin = strpos($controller, "admin/") !== false;
        ($isAdmin !== true) ?: UserTable::check($router);
        $layout = $isAdmin ? "admin/layout/layout" : "layout/layout";
        
        /* Page 404  */
        ($controller !== null) ?: $controller = "e404";
        
        echo require $this->controllerPath . DIRECTORY_SEPARATOR . $controller   .'.php';
        return $this;
    }
}