<?php

use App\Config\Database;
use App\Table\CategoryTable;

$pdo = Database::getPDO();
$table = new CategoryTable($pdo);
$table->delete($params['id']);
header('Location:' . $router->url('categories_manage') . '?delete=1');
