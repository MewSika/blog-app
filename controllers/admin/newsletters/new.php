<?php

use App\HTML\Form;
use App\Validator;
use App\Model\NewsLetter;
use App\ObjectHelper;
use App\Config\Database;
use App\Table\NewsletterTable;
use App\Validators\NewsletterValidator;

$title = "Création de newsletter";

$success = false;
$errors = [];

$pdo = Database::getPDO();
$newsletter = new Newsletter();

if(!empty($_POST))
{
    $newsletterTable = new NewsletterTable($pdo);
    $data = array_merge($_POST);
    $fields = ['title', 'author', 'content'];

    /* Gestion de la validation */
    Validator::lang('fr');
    $v = new NewsletterValidator($data, $newsletterTable, $newsletter->getID());
    ObjectHelper::hydrate($newsletter, $data, $fields);
        if($v->validate()) {
            $newsletterTable->createNewsletter($newsletter);
            header('Location:' .  $router->url('newsletters_manage') . '?success=1');
        } else {
            $errors = $v->errors();
        }
}

$form = new Form($newsletter, $errors);

return $twig->render('admin/newsletters/new.twig', [
    'title' => $title,
    'router' => $router,
    'success' => $success,
    'errors' => $errors,
    'form' => $form,
    'newsletter' => $newsletter
]);