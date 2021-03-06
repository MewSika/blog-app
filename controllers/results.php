<?php
use App\Config\Database;
use App\Table\PostTable;

$pdo = Database::getPDO();
$table = new PostTable($pdo);
$user = $auth->user();

$get = $_GET['q'];
$data = [];
$data = $_GET;

if(!empty($get)){
    [$posts, $pagination] = $table->findPaginated($data, 'name');
} 

return $twig->render('results.twig', [
    'router' => $router,
    'posts' => $posts,
    'pagination' => $pagination,
    'q' => $get,
    'data' => $data,
    'user' => $user
]);