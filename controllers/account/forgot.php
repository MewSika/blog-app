<?php 

use App\HTML\Form;
use App\Model\User;
use App\Config\Database;
use App\Table\UserTable;

$title = "Récupération de mot de passe";

$pdo = Database::getPDO();
$errors = [];
$user = $auth->user();
$token = null;

if(!empty($_POST)) {
    $email = htmlspecialchars($_POST['mail']);
    $username = htmlspecialchars($_POST['username']);
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $token = $auth->passwordToken($username, $email);
        if(is_null($token)) {
            $errors = ["mail" => "Aucun compte correspondant"];
        }
    } else {
        $errors = ["mail" => "Format e-mail invalide"];
    } 
}

$form = new Form($user, $errors);
return $twig->render('auth/forgot.twig', [
    'title' => $title,
    'user' => $user,
    'router' => $router,
    'form' => $form,
    'errors' => $errors,
    'token' => $token,
    'g' => $_GET
]);