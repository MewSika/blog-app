<?php

use App\Config\Database;
use App\App;

$user = $auth->user();
$data = $_GET;

return $twig->render('admin/dashboard.twig', [
    'router' => $router,
    'data' => $data,
    'user' => $user
]);