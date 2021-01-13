<?php

use App\Config\Database;
use App\Table\PostTable;
use App\Attachment\PostAttachment;

$pdo = Database::getPDO();
$table = new PostTable($pdo);
$post = $table->find($params['id']);
PostAttachment::detach($post);
$table->delete($params['id']);
header('Location:' . $router->url('posts_manage') . '?delete=1');
?>

<h1>Suppression de <?= $params['id'] ?></h1>