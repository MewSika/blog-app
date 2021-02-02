<?php 
require '../vendor/autoload.php';

use App\Auth\App;
use App\Auth\Auth;
use App\Auth\User;
use App\HTML\Form;
use App\Config\Database;
use App\Table\UserTable;
use App\Table\Exception\NotFoundException;

session_start();

$errors = [];
$auth = App::getAuth();
$user = new User();

if($auth->user() !== null) {
    header('Location:' . $router->url('dashboard'));
}

$forbidden = $_GET['forbidden'] ?? '';

if(!empty($_POST)) {
    $user->setUsername($_POST['username']);
    $errors['password'] = 'Identifiant ou mot de passe incorrect';

    if(!empty($_POST['password']) && !empty($_POST['username'])) {
          $table = new UserTable(Database::getPDO());
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

return $twig->render('auth/login.twig', [
    'user' => $user,
    'form' => $form,
    'router' => $router,
    'forbidden' => $forbidden
]);