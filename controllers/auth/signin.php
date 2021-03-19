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
$user = new User();
$title = "Inscription";
$forbidden = $_GET['forbidden'] ?? '';

if(!empty($_POST)) {
    $userTable = new UserTable($pdo, $_SESSION);
    $data = array_merge($_POST);
    $data['newsletter'] = isset($_POST['newsletter']) ? 1 : 0;
    $fields = ['username', 'password', 'mail', 'newsletter'];
    $v = new UserValidator($data, $userTable);
    ObjectHelper::hydrate($user, $data, $fields);
    if($v->validate()) {
        $pdo->beginTransaction();
        $user = $userTable->createUser($user);
        $pdo->commit();
        header('Location:'.$router->url('f_login').'?login=1');
        exit();
    } else {
        $errors = $v->errors();
    }
}
$form = new Form($user, $errors);

return $twig->render('auth/signin.twig', [
    'title' => $title,
    'user' => $user,
    'form' => $form,
    'router' => $router
]);