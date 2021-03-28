<?php 

use App\App;
use App\HTML\Form;
use App\Model\User;
use App\ObjectHelper;
use App\Config\Database;
use App\Table\UserTable;
use App\Validators\UserValidator;
use App\Table\Exception\NotFoundException;

$pdo = Database::getPDO();
$errors = [];

$user = $auth->user();
$auth->userCheck($router);

if(isset($_POST['update'])) {
    unset($_POST['update']);
    $data = array_merge($_POST);
    $password = htmlentities($data['password']);
    $data['newsletter'] = isset($_POST['newsletter']) ? 1 : 0;
    $fields = ['username', 'mail', 'newsletter'];

    $userTable = new UserTable($pdo, $_SESSION);
    $v = new UserValidator($data, $userTable, $user->getID());
    ObjectHelper::hydrate($user, $data, $fields);
    if(password_verify($password, $user->getPassword())) {
        if($v->validate()) {
            $pdo->beginTransaction();
            $userTable->updateUser($user);
            $pdo->commit();
            header('Location:'.$router->url('account').'?updated=1');
        } else {
            $errors = $v->errors();
        } 
    } else {
        $errors['password'] = ["Le mot de passe indiqué est erroné "];
    }
    
}

if(isset($_POST['delete'])) {
    unset($_POST['delete']);
    $data['newsletter'] = isset($_POST['newsletter']) ? 1 : 0;
    $fields = ['username', 'mail', 'newsletter'];

    $userTable = new UserTable($pdo, $_SESSION);
    $pdo->beginTransaction();
    $userTable->delete($user->getID());
    $pdo->commit();
    header('Location:'.$router->url('f_login').'?delete=1');
    exit();
}

$form = new Form($user, $errors);

return $twig->render('auth/account.twig', [
    'user' => $user,
    'router' => $router,
    'form' => $form,
    'g' => $_GET
]);