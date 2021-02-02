<?php
require '../vendor/autoload.php';
use App\Config\Database;
use App\Auth\Auth;
use App\Auth\App;
use App\Exception\ForbiddenException;

$error = null;
Auth::check($router);

$title = "Votre compte"
?>
<h1>Votre compte client</h1><hr>
