<?php

use App\App;
use App\HTML\Form;
use App\ObjectHelper;
use App\Config\Database;
use App\Table\UserTable;
use App\Validators\UserBackValidator;

$title = "Modification utilisateur n°{$params['id']}";

$pdo = Database::getPDO();
$user = $auth->find($params['id']);

$success = false;
$errors = [];

if(!empty($_POST)) {
    $data = array_merge($_POST);
    $userTable = new UserTable($pdo, $_SESSION);
    $data['newsletter'] = isset($_POST['newsletter']) ? 1 : 0;
    $data['password'] = (!empty($_POST['password'])) ? $_POST['password'] : $user->getPassword(); 
    $fields = ['username', 'password', 'mail', 'role', 'newsletter'];
    $v = new UserBackValidator($data, $userTable, $user->getID());
    ObjectHelper::hydrate($user, $data, $fields);
    if($v->validate()) {
        $pdo->beginTransaction();
        $userTable->updateUserFromBack($user);
        $pdo->commit();
        $success = true;
    } else {
        $errors = $v->errors();
    } 
}
$form = new Form($user, $errors);

return $twig->render('admin/users/edit.twig', [
    'router' => $router,
    'form' => $form,
    'errors' => $errors,
    'user' => $user,
    'success' => $success
]);