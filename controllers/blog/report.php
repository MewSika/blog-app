<?php
use App\ObjectHelper;
use App\Model\Message;
use App\Config\Database;
use App\Table\PostTable;
use App\Table\MessageTable;

$id = (int)$params['id'];
$user = $auth->user();
$auth->userCheck($router);

$pdo = Database::getPDO();
/* Gestion message */
$message = (new MessageTable($pdo))->find($id);
$post = (new PostTable($pdo))->find($message->getIdPost());

if(isset($_POST['report'])) {
    $data = array_merge($_POST);
    $fields = ['report'];
    ObjectHelper::hydrate($message, $data, $fields);
    (new MessageTable($pdo))->reportMessage($message);
    header('Location:'. $router->url('article', ['slug' => $post->getSlug(), 'id' => $post->getId()]));
    exit();
} 