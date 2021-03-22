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
    /* Si pas de token : redirection */
    header('Location:'.$router->url('f_login'));
    exit();
}

if(!empty($_POST)) {
    if(!empty($_POST['password']) && !empty($_POST['confirmPassword']) && !empty($_POST['token'])){
        $password = htmlspecialchars($_POST['password']);
        $password_repeat = htmlspecialchars($_POST['confirmPassword']);
        $token = htmlspecialchars(base64_decode($_POST['token']));
        $auth->passwordReset($password, $password_repeat, $token, $router);



    }else{
        $errors['password'] = "Veuillez indiquer un mot de passe";
    }
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