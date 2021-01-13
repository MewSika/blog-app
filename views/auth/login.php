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
?>
<h2 class="text-center">Connexion</h2><hr>
<?php if(isset($_GET['forbidden'])) : ?>
    <div class="alert alert-danger">
        Vous n'avez pas accès à cette page
    </div>
<?php endif; ?>

<form action="<?= $router->url('login'); ?>" method="post" class="m-auto col-3 text-center">
    <?= $form->input('username', '<i class="fa fa-user fa-fw m-auto" aria-hidden="true"></i>', 'Login') ?>
    <?= $form->input('password', '<i class="fa fa-lock fa-fw m-auto" aria-hidden="true"></i>', 'Password') ?>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Rester connecté(e)
      </label>
    </div>
    <button class="btn btn-secondary ml-3"> Se connecter</button>
</form>