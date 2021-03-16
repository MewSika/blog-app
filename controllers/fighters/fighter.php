<?php
use App\Config\Database;
use App\Table\FighterTable;
use App\Table\CategoryTable;

$id = (int)$params['id'];
$slug = $params['name'];

$pdo = Database::getPDO();
$fighter = (new FighterTable($pdo))->find($id);

$fighterName = strtolower(str_replace(' ', '-', $fighter->getName()));

/* Redirection */
if($fighterName !== $slug) {
    $url = $router->url('fighter', ['name' => $fighterName, 'id' => $fighter->getId()]);
    http_response_code(301);
    header('Location: '.$url);
} 

return $twig->render('fighters\fighter.twig', [
    'id' => $id,
    'fighter' => $fighter,
    'router' => $router
]);
