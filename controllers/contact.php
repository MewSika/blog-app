<?php

use App\HTML\Form;
use App\ObjectHelper;
use App\Model\Contact;
use App\Config\Database;
use App\Model\User;
use App\Table\ContactTable;
use App\Validators\ContactValidator;

$pdo = Database::getPDO();
$contact = new Contact();
$user = $auth->user();
$errors = [];
$success = null;
$logged = null;

if($user === null) {
  $logged = "Vous devez être connecté pour envoyer un message";
}

if(!empty($_POST)){
    if($user === null) {
      $errors['content'] = ['Vous devez être connecté pour envoyer un message'];
    } else {
      $data = array_merge($_POST);  
      $content = $_POST['content'];

      $contactTable = new ContactTable($pdo);
      $v = new ContactValidator($data, $contactTable, $contact->getID());
      $data['username'] = $user->getUsername();
      $data['email'] = $user->getMail();
      
      $fields = ['username', 'email', 'content'];
      ObjectHelper::hydrate($contact, $data, $fields);
      if($v->validate()) {
        $pdo->beginTransaction();
        $contactTable->createContact($contact);
        $pdo->commit();
        $contactTable->sendMessage($data['username'], $data['email'], 'contact@mma-coliseum.fr', $data['content']);
        $contact = [];
        $success = "Votre message message a bien été envoyé !";
      } else {
            $errors = $v->errors();
      }
    }
}

$form = new Form($contact, $errors);

return $twig->render('contact.twig', [
    'form' => $form,
    'router' => $router,
    'errors' => $errors,
    'success' => $success,
    'user' => $user,
    'logged' => $logged
]);