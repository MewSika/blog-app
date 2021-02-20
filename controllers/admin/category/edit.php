<?php

use App\Auth\App;
use App\HTML\Form;
use App\Validator;
use App\ObjectHelper;
use App\Config\Database;
use App\Table\CategoryTable;
use App\Exception\ForbiddenException;
use App\Validators\CategoryValidator;

$title = "Modification de la catégorie n°{$params['id']}";

$pdo = Database::getPDO();
$table = new CategoryTable($pdo);
$item = $table->find($params['id']);
$fields = ['name', 'slug'];

$success = false;
$errors = [];

if(!empty($_POST)) {
    /** Gestion de la validation */
    Validator::lang('fr');
    $v = new CategoryValidator($_POST, $table, $item->getID());
    ObjectHelper::hydrate($item, $_POST, $fields);
    if($v->validate()) {
        $table->update([
            'name' => $item->getName(),
            'slug' => $item->getSlug(),
        ], $item->getID());
        $success = true;
    } else {
        $errors = $v->errors();
    }
}
$form = new Form($item, $errors);

return $twig->render('admin/category/edit.twig', [
    'router' => $router,
    'form' => $form,
    'errors' => $errors,
    'item' => $item,
    'success' => $success
]);