<?php 
use App\Config\Database;
use App\Table\FighterTable;
use App\Table\WeightCategoryTable;

$id = (int)$params['id'];
$name = $params['name'];
$sex = $params['sex'];

$pdo = Database::getPDO();
$fighter = new FighterTable($pdo);
$weightCategory = (new WeightCategoryTable($pdo))->find($id);

$title = $weightCategory->getName();
$data = $_GET;

$user = $auth->user();

// Recherche par combattant
if(!empty($_GET['q'])) {
    [$fighters, $pagination] = $fighter->findPaginated($data, 'name');
} else {
    [$fighters, $pagination] = $fighter->findPaginatedByCategory($id, $sex, $data);
}

$weightFighter = (new WeightCategoryTable($pdo))->hydrateWeightCategory($fighters);

$link = $router->url('category_fighter', ['name' => $name, 'id' => $id, 'sex' => $sex]);

return $twig->render('/fighters/category.twig', [
    'title' => $title,
    'router' => $router,
    'fighters' => $fighters,
    'w' => $weightCategory,
    'weights' => $weightFighter,
    'pagination' => $pagination,
    'q' => $data,
    'link' => $link,
    'user' => $user
]);
