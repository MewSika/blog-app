<?php 
use App\Config\Database;
use App\Table\FighterTable;
use App\QueryBuilder;

$title = "Gestion des combattants";

$pdo = Database::getPDO();
$fighter = new FighterTable($pdo);

$q = $_GET;

// Recherche par combattant
$query = (new QueryBuilder($pdo))->from('fighter');
if(!empty($_GET['q'])) {
    [$fighters, $pagination] = $fighter->findPaginated($q, 'name');
} else {
    [$fighters, $pagination] = $fighter->findPaginated();
}



$link = $router->url('fighters');

return $twig->render('admin/fighters/fighters.twig', [
    'router' => $router,
    'fighters' => $fighters,
    'pagination' => $pagination,
    'link' => $link,
    'q' => $q
]);
