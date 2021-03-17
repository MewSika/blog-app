<?php

use App\Config\Database;
use App\Table\PostTable;

$pdo = Database::getPDO();
$table = new PostTable($pdo);
$table->delete($params['id']);
header('Location:' . $router->url('posts_manage') . '?delete=1');
