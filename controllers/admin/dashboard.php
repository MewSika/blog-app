<?php
require '../vendor/autoload.php';
use App\Auth\ {
  Auth,
  App
};
use App\Config\Database;

$auth = App::getAuth();
$user = $auth->user();


return $twig->render('admin/dashboard.twig', [
    'router' => $router,
    'user' => $user
]);