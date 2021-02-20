<?php 
use App\Config\Database;
use App\Table\PostTable;

$title = "Gestion des articles";

$pdo = Database::getPDO();
$table = new PostTable($pdo);
[$posts, $pagination] = $table->findPaginated();
$link = $router->url('posts_manage');
$get = $_GET;
return $twig->render('admin/post/posts.twig', [
    'router' => $router,
    'posts' => $posts,
    'pagination' => $pagination,
    'link' => $link,
    'g' => $get
]);
