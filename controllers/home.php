<?php 
use App\HTML\Form;
use App\Config\Database;
use App\Table\PostTable;
use App\Table\CategoryTable;

$title = "Accueil - Pixel Blog";
$link = $router->url('blog');
$login = null;
$errors = [];;
$user = $auth->user();
$pdo = Database::getPDO();
$lastPosts = (new PostTable($pdo))->getLastPosts(6);
$categories = (new CategoryTable($pdo))->all();

return $twig->render('home.twig', ['router' => $router, 'lastPosts' => $lastPosts, 'categories' => $categories, 'user' => $user]);