<?php

use App\HTML\Form;
use App\Validator;
use App\Model\NewsLetter;
use App\ObjectHelper;
use App\Config\Database;
use App\Table\NewsletterTable;
use App\Validators\NewsletterValidator;

$success = false;
$errors = [];

$pdo = Database::getPDO();
$newsletterTable = new NewsletterTable($pdo);
$newsletter = $newsletterTable->find($params['id']);
$title = "Newsletter : {$newsletter->getTitle()}";


if(!empty($_POST))
{
    $newsletterTable = new NewsletterTable($pdo);
    $data = array_merge($_POST);
    $fields = ['title', 'author', 'content', 'created_at'];

    /* Gestion de la validation */
    Validator::lang('fr');
    $v = new NewsletterValidator($data, $newsletterTable, $newsletter->getID());
    ObjectHelper::hydrate($newsletter, $data, $fields);
        if($v->validate()) {
            $newsletterTable->updateNewsletter($newsletter);
            $success = true;
        } else {
            $errors = $v->errors();
        }
}

$form = new Form($newsletter, $errors);

return $twig->render('admin/newsletters/edit.twig', [
    'title' => $title,
    'router' => $router,
    'success' => $success,
    'errors' => $errors,
    'form' => $form,
    'newsletter' => $newsletter
]);