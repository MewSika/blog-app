<?php

use App\Auth\App;
use App\Auth\Auth;
use App\Config\Database;
use App\Table\CategoryTable;

$pdo = Database::getPDO();
$table = new CategoryTable($pdo);
$table->delete($params['id']);
header('Location:' . $router->url('categories_manage') . '?delete=1');
?>

<h1>Suppression de <?= $params['id'] ?></h1>