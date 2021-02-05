<?php
use App\QueryBuilder;
use App\Config\Database;
use App\Table\PostTable;

$pdo = Database::getPDO();
$table = new PostTable($pdo);

$query = (new QueryBuilder($pdo))->from('post');

// Todo paramètres dans l'appel de findPaginated()
if(!empty($_GET['q'])){
    [$posts, $pagination] = $table->findPaginated('name');
    $get = $_GET['q'];
} 


return $twig->render('results.twig', [
    'router' => $router,
    'posts' => $posts,
    'pagination' => $pagination,
    'g' => $get
    ]);