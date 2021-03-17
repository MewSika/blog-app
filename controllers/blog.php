<?php 
use App\Config\Database;
use App\Table\PostTable;
use App\Table\CategoryTable;

$link = $router->url('blog');

$pdo = Database::getPDO();
$table = new PostTable($pdo);
[$posts, $pagination] = $table->findPaginated();
$associatedCategories = [];
$lastPosts = (new PostTable($pdo))->getLastPosts(6);
$categories = (new CategoryTable($pdo))->all();
$user = $auth->user();


return $twig->render('blog/blog.twig', [
    'router' => $router,
    'posts' => $posts,
    'pagination' => $pagination,
    'link' => $link,
    'lastPosts' => $lastPosts,
    'categories' => $categories,
    'user' => $user
]);