<?php 
use App\Config\Database;
use App\Table\NewsletterTable;

$title = "Gestion des newsletters";

$pdo = Database::getPDO();
$table = new NewsletterTable($pdo);
$newsletters = $table->listNewsletters();
$get = $_GET;
return $twig->render('admin/newsletters/newsletters.twig', [
    'title' => $title,
    'router' => $router,
    'newsletters' => $newsletters,
    'g' => $get
]);