<?php

require '../vendor/autoload.php';

use App\HTML\Form;
use App\Config\Database;

$errors = [];
$success = null;
if(!empty($_POST['email'])){
    $email = $_POST['email'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        // $contact->setEmail($_POST['email']);
        $success = "Votre message message a bien été reçu !";
    } else {
        $errors['email'] = 'Email incorrect';
    }
}

$form = new Form(null, $errors);

return $twig->render('contact.twig', [
    'form' => $form,
    'router' => $router,
    'errors' => $errors,
    'success' => $success
]);