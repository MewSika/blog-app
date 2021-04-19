<?php 
use App\Config\Database;
use App\Table\UserTable;


$pdo = Database::getPDO();
$items = $auth->list();
$link = $router->url('users_manage');
$get = $_GET;
$user = $auth->user();

if($user->getRole() !== 'admin') {
    return $twig->render('admin/forbidden.twig',[
        'link' => $link,
        'router' => $router
    ]);
}

return $twig->render('admin/users/users.twig',[
    'items' => $items,
    'link' => $link,
    'router' => $router,
    'g' => $get
]);