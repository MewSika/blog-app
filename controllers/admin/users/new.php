<?php

use App\App;
use App\HTML\Form;
use App\Model\User;
use App\ObjectHelper;
use App\Config\Database;
use App\Table\UserTable;
use App\Validators\UserBackValidator;

$title = "Création utilisateur";

$pdo = Database::getPDO();
$success = false;
$errors = [];
$user = new User();

if(!empty($_POST)) {
    $data = array_merge($_POST);
    $userTable = new UserTable($pdo, $_SESSION);
    $data['newsletter'] = isset($_POST['newsletter']) ? 1 : 0;
    $fields = ['username', 'password', 'mail', 'role', 'newsletter'];
    $v = new UserBackValidator($data, $userTable, $user->getID());
    ObjectHelper::hydrate($user, $data, $fields);
    if($v->validate()) {
        $pdo->beginTransaction();
        $userTable->createUserFromBack($user);
        $pdo->commit();
        header('Location:' . $router->url('users_manage') . "?success=1");
        exit();
    } else {
        $errors = $v->errors();
    } 
}

$form = new Form($user, $errors);

return $twig->render('admin/users/new.twig', [
    'router' => $router,
    'form' => $form,
    'errors' => $errors,
    'user' => $user,
    'success' => $success
]);