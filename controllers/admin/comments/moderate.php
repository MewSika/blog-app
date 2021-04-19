<?php 
use App\Config\Database;
use App\Table\MessageTable;


$pdo = Database::getPDO();
$table = new MessageTable($pdo);
$fighter = $table->find($params['id']);
$table->moderateComment($params['id']);

$admin = $auth->user();
if($admin->getRole() !== 'admin') {
    return $twig->render('admin/forbidden.twig',[
        'link' => $link,
        'router' => $router
    ]);
}

header('Location:' . $router->url('comments_manage') . '?moderate=1');