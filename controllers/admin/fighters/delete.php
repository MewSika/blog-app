<?php

use App\Config\Database;
use App\Table\FighterTable;
use App\Attachment\FighterAttachment;

$pdo = Database::getPDO();
$table = new FighterTable($pdo);
$fighter = $table->find($params['id']);
FighterAttachment::detach($fighter);
$table->delete($params['id']);
header('Location:' . $router->url('fighters') . '?delete=1');