<?php 
use App\Config\Database;
use App\Table\FighterTable;
use App\QueryBuilder;

$title = "Gestion des combattants";

$pdo = Database::getPDO();
$fighter = new FighterTable($pdo);

$q = $_GET;
// Recherche par combattant
if(!empty($_GET['q'])) {
    [$fighters, $pagination] = $fighter->findPaginated($q, 'name');
} else {
    [$fighters, $pagination] = $fighter->findPaginated();
}

$link = $router->url('fighters_manage');

return $twig->render('admin/fighters/fighters.twig', [
    'title' => $title,
    'router' => $router,
    'fighters' => $fighters,
    'pagination' => $pagination,
    'link' => $link,
    'get' => $q
]);
