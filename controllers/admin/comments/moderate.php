<?php 
use App\Config\Database;
use App\Table\MessageTable;


$pdo = Database::getPDO();
$table = new MessageTable($pdo);
$fighter = $table->find($params['id']);
$table->moderateComment($params['id']);
header('Location:' . $router->url('comments_manage') . '?moderate=1');