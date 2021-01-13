<?php
namespace App\HTML;

class Nav {

    protected $link;
    protected $title;
    protected $linkClass;
    private $router;

    public static function nav_item(string $link, string $title, string $linkClass = ''): string
    {
        // $router = new Router(dirname(__DIR__). '/views');
        $class = 'nav_item';
        if($_SERVER['SCRIPT_NAME'] === $link){
            $class .= ' active';
        }
        return <<<HTML
        <li class="$class">
            <a class="$linkClass" href={$link}>$title</a>
        </li>
HTML;
    }

    public static function nav_menu(string $linkClass = '', $router): string
    {
        return 
            static::nav_item($router->url('home'), 'Accueil', $linkClass).
            static::nav_item($router->url('blog'), 'Blog', $linkClass).
            static::nav_item($router->url('contact'), 'Contact', $linkClass).
            static::nav_item($router->url('table'), 'A vendre', $linkClass);
    }
}