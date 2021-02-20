<?php
require '../vendor/autoload.php';
use App\Auth\ {
  Auth,
  App
};
use App\Config\Database;

$auth = App::getAuth();
$user = $auth->user();
// $auth->check($router);
$data = $_GET;


return $twig->render('admin/dashboard.twig', [
    'router' => $router,
    'data' => $data,
    'user' => $user
]);