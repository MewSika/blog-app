<?php 
use App\Config\Database;
use App\Table\PostTable;
use App\Table\CategoryTable;

$title = "Accueil - Pixel Blog";
$link = $router->url('blog');

$pdo = Database::getPDO();
$lastPosts = (new PostTable($pdo))->getLastPosts(8);
$categories = (new CategoryTable($pdo))->all();

return $twig->render('home.twig', ['router' => $router, 'lastPosts' => $lastPosts, 'categories' => $categories]);