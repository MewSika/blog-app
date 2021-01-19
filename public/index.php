<?php
require '../vendor/autoload.php';

define('DEBUG_TIME', microtime(true));
define('UPLOAD_PATH', __DIR__ . DIRECTORY_SEPARATOR . 'img');
define('CSS_PATH', __DIR__ . DIRECTORY_SEPARATOR . 'style/style.css');

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$loader = new Twig\Loader\FilesystemLoader(dirname(__DIR__) . '/templates');
$twig = new Twig\Environment($loader, [
    'cache' =>  __DIR__ . '/tmp',
    'debug' => true
]);


if (isset($_GET['p']) && $_GET['p'] === '1') {
    $url = explode('?', $_SERVER['REQUEST_URI'])[0];
    unset($_GET['p']);
    $query = http_build_query($_GET);
    $url = $url . (empty($query) ? '' : '?' . $query);

    header('Location: ' . $url);
    http_response_code(301);
    exit();
}

    
$router = new App\Router(dirname(__DIR__). '/views');
$router
    ->match('/', 'home', 'home')
    ->match('/realestate', 'table', 'table')
    ->match('/contact', 'contact', 'contact')

    ->match('/blog', 'blog/blog', 'blog')
    ->match('/blog/category/[*:slug]-[i:id]', 'blog/category', 'category')
    ->match('/blog/[*:slug]-[i:id]', 'blog/article', 'article')

    /** Backoffice */
    ->match('/lagestion/login', 'auth/login', 'login')
    ->match('/lagestion/logout', 'auth/logout', 'logout')

    ->match('/lagestion/dashboard', 'admin/dashboard', 'dashboard')

    /* Gestion des routes admin post */
    ->match('/lagestion/posts', 'admin/post/posts', 'posts_manage')
    ->match('/lagestion/post/new', 'admin/post/new', 'admin_post_new')
    ->match('/lagestion/post/[i:id]', 'admin/post/edit', 'admin_post')
    ->match('/lagestion/post/[i:id]/delete', 'admin/post/delete', 'admin_post_delete')

    /* Gestion des routes admin category */
    ->match('/lagestion/categories', 'admin/category/categories', 'categories_manage')
    ->match('/lagestion/category/new', 'admin/category/new', 'admin_category_new')
    ->match('/lagestion/category/[i:id]', 'admin/category/edit', 'admin_category')
    ->match('/lagestion/category/[i:id]/delete', 'admin/category/delete', 'admin_category_delete')

    ->match('/user', 'user', 'user')
    ->match('', '404', '404')
    
    ->run();