<?php 
use App\Config\Database;
use App\Table\FighterTable;
use App\Table\WeightCategoryTable;

$title = "UFC - Champions";

$pdo = Database::getPDO();
$fighter = new FighterTable($pdo);
$weightCategory = new WeightCategoryTable($pdo);
$pagination = '';
$q = $_GET;

// Recherche par combattant
if(!empty($_GET['q'])) {
    [$fighters, $pagination] = $fighter->findPaginated($q, 'name');
} else {
    $fighters = $fighter->getChampFighters();
}
$weights = $weightCategory->hydrateWeightCategory($fighters);

return $twig->render('/fighters/fighters.twig', [
    'title' => $title,
    'router' => $router,
    'fighters' => $fighters,
    'weights' => $weights,
    'pagination' => $pagination,
    'q' => $q
]);
