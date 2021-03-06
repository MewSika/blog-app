<?php

require '../vendor/autoload.php';

define('DEBUG_TIME', microtime(true));
define('UPLOAD_PATH', __DIR__ . DIRECTORY_SEPARATOR . 'img');

/** Debug  */
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

/** Twig */
$loader = new Twig\Loader\FilesystemLoader(dirname(__DIR__) . '/templates');
$twig = new Twig\Environment($loader, [
    'cache' =>  __DIR__ . '/tmp',
    'debug' => true
]);
$twig->addExtension(new Twig\Extension\DebugExtension());
$twig->addExtension(new App\Twig\CustomExtensions());
$twig->addExtension(new Twig\Extra\Intl\IntlExtension());
$twig->addExtension(new Twig\Extra\Markdown\MarkdownExtension());
$twig->addExtension(new Twig\Extra\String\StringExtension());
$twig->addGlobal('current_page', $_SERVER['REQUEST_URI']);
/* Extension pour Markdown */
$twig->addRuntimeLoader(new class implements Twig\RuntimeLoader\RuntimeLoaderInterface {
    public function load($class) {
        if (Twig\Extra\Markdown\MarkdownRuntime::class === $class) {
            return new Twig\Extra\Markdown\MarkdownRuntime(new Twig\Extra\Markdown\DefaultMarkdown());
        }
    }
});

/** Redirect pagination */
if (isset($_GET['p']) && $_GET['p'] === '1') {
    $url = explode('?', $_SERVER['REQUEST_URI'])[0];
    unset($_GET['p']);
    $query = http_build_query($_GET);
    $url = $url . (empty($query) ? '' : '?' . $query);

    header('Location: ' . $url);
    http_response_code(302);
    exit();
}

$router = new App\Router($twig, dirname(__DIR__). '/controllers');
$router
    ->match('/', 'home', 'home')
    ->match('/contact', 'contact', 'contact')
    ->match('/results', 'results', 'results')
    /** Articles */ 
    ->match('/news', 'blog', 'blog')
    ->match('/news/category/[*:slug]-[i:id]', 'blog/category', 'category')
    ->match('/news/[*:slug]-[i:id]', 'blog/article', 'article')
    ->match('/report-[i:id]', 'blog/report', 'report')

    /** Combattants  */
    ->match('/fighters', 'fighters', 'fighters')
    ->match('/fighters/category/[*:name]-[i:id]-[i:sex]', 'fighters/category', 'category_fighter')
    ->match('/fighters/[*:name]-[i:id]', 'fighters/fighter', 'fighter')

    /** Login front */
    ->match('/login', 'auth/login', 'f_login')
    ->match('/logout', 'auth/logout', 'f_logout')
    ->match('/signin', 'auth/signin', 'signin')

    ->match('/account', 'account/account', 'account')
    ->match('/forgot-password', 'account/forgot', 'forgot')
    ->match('/reset-password', 'account/reset', 'reset')

    /** Backoffice */
    ->match('/lagestion/login', 'auth/bo/login', 'login')
    ->match('/lagestion/logout', 'auth/bo/logout', 'logout')
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

    /* Gestion des routes admin fighters */
    ->match('/lagestion/fighters', 'admin/fighters/fighters', 'fighters_manage')
    ->match('/lagestion/fighters/import', 'admin/fighters/import/importFighters', 'import')
    ->match('/lagestion/fighters/new', 'admin/fighters/new', 'fighter_new')
    ->match('/lagestion/fighters/[*:name]-[i:id]', 'admin/fighters/edit', 'admin_fighter')
    ->match('/lagestion/fighters/[i:id]/delete', 'admin/fighters/delete', 'fighter_delete')

    /* Gestion des routes users */
    ->match('/lagestion/users', 'admin/users/users', 'users_manage')
    ->match('/lagestion/user/new', 'admin/users/new', 'admin_user_new')
    ->match('/lagestion/user/[i:id]', 'admin/users/edit', 'admin_user')
    ->match('/lagestion/user/[i:id]/delete', 'admin/users/delete', 'admin_user_delete')

    /* Gestion des routes comments */
    ->match('/lagestion/comments', 'admin/comments/comments', 'comments_manage')
    ->match('/lagestion/authorize/[i:id]', 'admin/comments/authorize', 'admin_message_authorize')
    ->match('/lagestion/moderate/[i:id]', 'admin/comments/moderate', 'admin_message_moderate')

    /* Gestion des routes newsletters */
    ->match('/lagestion/newsletters', 'admin/newsletters/newsletters', 'newsletters_manage')
    ->match('/lagestion/newsletters/new', 'admin/newsletters/new', 'admin_newsletters_new')
    ->match('/lagestion/newsletters/[i:id]', 'admin/newsletters/edit', 'admin_newsletters_edit')
    ->match('/lagestion/newsletters/[i:id]/delete', 'admin/newsletters/delete', 'admin_newsletters_delete')
    ->match('/lagestion/newsletters/[i:id]/send', 'admin/newsletters/send', 'admin_newsletters_send')
    

    /* Gestion des routes users */
    ->match('/user', 'user', 'user')
    
    ->run();