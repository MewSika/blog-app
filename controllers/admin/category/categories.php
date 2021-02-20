<?php 
use App\Config\Database;
use App\Table\CategoryTable;


$pdo = Database::getPDO();
$table = new CategoryTable($pdo);
$items = $table->all();
$link = $router->url('categories_manage');
$get = $_GET;

return $twig->render('admin/category/categories.twig',[
    'items' => $items,
    'link' => $link,
    'router' => $router,
    'g' => $get
]);