<?php 

use App\App;
use App\Model\User;
use App\HTML\Form;
use App\Config\Database;
use App\Table\UserTable;
use App\Table\Exception\NotFoundException;

$errors = [];
$user = null;
$data = $_GET;

if($auth->user() !== null) {
    header('Location:' . $router->url('account'));
}

$forbidden = $_GET['forbidden'] ?? '';

if(!empty($_POST)) {
    $user = new User();
    $user->setUsername($_POST['username']);
    $errors['password'] = 'Identifiant ou mot de passe incorrect';

    if(!empty($_POST['username']) && !empty($_POST['password'])) {
        try{
            $user = $auth->login($_POST['username'], $_POST['password']);
            if($user) {
                header('Location:'.$router->url('home').'?login=1');
                exit();
            }
        } catch (NotFoundException $e){  
            //
        }
    } 
}

$form = new Form($user, $errors);

return $twig->render('auth/login.twig', [
    'user' => $user,
    'form' => $form,
    'router' => $router,
    'forbidden' => $forbidden,
    'g' => $data
]);