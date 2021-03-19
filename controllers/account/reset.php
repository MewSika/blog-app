<?php

use App\HTML\Form;
use App\Model\User;
use App\Config\Database;
use App\Table\UserTable;

$pdo = Database::getPDO();
$title = "Réinitialisation du mot de passe";
$user = $auth->user();
$errors = [];

if(!empty($_GET['token'])){
    $token = htmlspecialchars(base64_decode($_GET['token']));
    $check = $pdo->prepare('SELECT * FROM users_b WHERE token = ?');
    $check->execute([$token]);
    $row = $check->rowCount();
    $deadlink = $row === 0  ? "Le lien n'est plus valide" : null;
} else {
    header('Location:'.$router->url('f_login'));
    exit();
}

if(!empty($_POST)) {

}

$form = new Form($user, $errors);

return $twig->render('auth/reset.twig', [
    'title' => $title,
    'user' => $user,
    'router' => $router,
    'form' => $form,
    'errors' => $errors,
    'deadlink' => $deadlink,
    'g' => $_GET
]);