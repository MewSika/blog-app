<?php

require '../vendor/autoload.php';

use App\HTML\Form;
use App\ObjectHelper;
use App\Config\Database;
use App\Contact\Contact;
use App\Table\ContactTable;
use App\Validators\ContactValidator;

$pdo = Database::getPDO();
$contact = new Contact();
$errors = [];
$success = null;

if(!empty($_POST)){
    $data = array_merge($_POST);  
    $data['checkNewsletter'] = isset($_POST['checkNewsletter']) ? 1 : 0;
    $email = $_POST['email'];

    $fields = ['username', 'email', 'content', 'checkNewsletter'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $contactTable = new ContactTable($pdo);
        $v = new ContactValidator($data, $contactTable, $contact->getID());
        ObjectHelper::hydrate($contact, $data, $fields);
        if($v->validate()) {
          $pdo->beginTransaction();
          $contactTable->createContact($contact);
          $pdo->commit();
          $contactTable->sendMessage($data['username'], $data['email'], 'francklamy@gmail.gmail', $data['content']);
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
    'success' => $success
]);