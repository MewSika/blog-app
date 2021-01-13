<?php
namespace App;

use App\Security\ForbiddenException;

class Router {

    /**
     * @var string
     */
    private $viewPath;

    /**
     * @var AltoRouter
     */
    private $router;

    public function __construct(string $viewPath)
    {
        $this->viewPath = $viewPath;
        $this->router = new \AltoRouter();
    }

    public function match(string $url, string $view, ?string $name = null): self
    {
        $this->router->map('GET|POST', $url, $view, $name);

        return $this;
    }

    public function url (string $name, array $params = []) {
        return $this->router->generate($name, $params);
    }

    public function run(): self
    {
        $match = $this->router->match();
        if($match === false) {
            $view = "e404";
        } else {
            $view = $match['target'] ;
            $params = $match['params'];

        }
        $router = $this;
        $isLogin = strpos($view, "login/") !== false;
        if($isLogin) {
            $layout = "login/layout/layout";
        }
        $isAdmin = strpos($view, "admin/") !== false;
        $layout = $isAdmin ? "admin/layout/layout" : "layout/layout";
        if($view === null) {
            $view = "e404";
        }
        ob_start();
        require $this->viewPath . DIRECTORY_SEPARATOR . $view . '.php';
        $pageContent = ob_get_clean();
        require $this->viewPath . DIRECTORY_SEPARATOR . $layout . '.php';

        return $this;
    }
}