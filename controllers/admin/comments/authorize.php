<?php 
use App\Config\Database;
use App\Table\MessageTable;


$pdo = Database::getPDO();
$table = new MessageTable($pdo);
$fighter = $table->find($params['id']);
$table->authorizeComment($params['id']);
header('Location:' . $router->url('comments_manage') . '?valid=1');