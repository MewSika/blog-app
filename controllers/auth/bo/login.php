<?php 
use App\App;
use App\Model\User;
use App\HTML\Form;
use App\Config\Database;
use App\Table\UserTable;
use App\Table\Exception\NotFoundException;

$errors = [];
$user = new User();

if($auth->user() !== null) {
    header('Location:' . $router->url('dashboard'));
}

$forbidden = $_GET['forbidden'] ?? '';

if(!empty($_POST)) {
    $user->setUsername($_POST['username']);
    $errors['password'] = 'Identifiant ou mot de passe incorrect';

    if(!empty($_POST['password']) && !empty($_POST['username'])) {
        try{
              $user = $auth->login($_POST['username'], $_POST['password']);
              if($user) {
                  header('Location:'.$router->url('dashboard').'?login=1');
                  exit();
              }
        } catch (NotFoundException $e){  
          //
        }
    }
}

$form = new Form($user, $errors);

return $twig->render('auth/bo/login.twig', [
    'user' => $user,
    'form' => $form,
    'router' => $router,
    'forbidden' => $forbidden
]);