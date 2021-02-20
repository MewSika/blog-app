<?php

use App\HTML\Form;
use App\Validator;
use App\ObjectHelper;
use App\Model\Category;
use App\Config\Database;
use App\Table\CategoryTable;
use App\Validators\CategoryValidator;

$title = "Création d'une catégorie";

$success = false;
$errors = [];
$item = new Category();
$fields =  ['name', 'slug'];

if(!empty($_POST)) {
    $pdo = Database::getPDO();
    $table = new CategoryTable($pdo);

    /** Gestion de la validation */
    Validator::lang('fr');
    $v = new CategoryValidator($_POST, $table);
    ObjectHelper::hydrate($item, $_POST, $fields);
    if($v->validate()) {
        $table->create([     
            'name' => $item->getName(),
            'slug' => $item->getSlug(),
        ]);
        header('Location:' .  $router->url('categories_manage') . '?success=1');
    } else {
        $errors = $v->errors();
    }
}
$form = new Form($item, $errors);

return $twig->render('admin/category/new.twig', [
    'router' => $router,
    'form' => $form,
    'errors' => $errors,
    'title' => $title,
    'item' => $item 
]);