<?php 
use App\Model\Message;
use App\Config\Database;
use App\Table\MessageTable;


$pdo = Database::getPDO();
$message = new Message();
$items = (new MessageTable($pdo))->getModeratedComments();

$admin = $auth->user();
if($admin->getRole() !== 'admin') {
    return $twig->render('admin/forbidden.twig',[
        'link' => $link,
        'router' => $router
    ]);
}
return $twig->render('admin/comments/comments.twig',[
    'items' => $items,
    'router' => $router,
    'g' => $_GET
]);