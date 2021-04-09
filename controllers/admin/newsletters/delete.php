<?php

use App\Config\Database;
use App\Table\NewsletterTable;

$pdo = Database::getPDO();
$table = new NewsletterTable($pdo);
$table->delete($params['id']);
header('Location:' . $router->url('newsletters_manage') . '?delete=1');
