<?php

use App\Attachment\PostAttachment;
use App\HTML\Form;
use App\Validator;
use App\ObjectHelper;
use App\Config\Database;
use App\Table\PostTable;
use App\Table\CategoryTable;
use App\Validators\PostValidator;

$title = "Modification de l'article n°{$params['id']}";
$pdo = Database::getPDO();
$postTable = new PostTable($pdo);
$categoryTable = new CategoryTable($pdo);

$categories = $categoryTable->list();
$post = $postTable->find($params['id']);
$categoryTable->hydratePost([$post]);

$success = false;
$errors = [];

if(!empty($_POST)) {
    $fields = ['name', 'slug', 'content', 'author', 'created_at', 'image'];
    $data = array_merge($_POST, $_FILES);
    /** Gestion de la validation */
    $v = new PostValidator($data, $postTable, $post->getID(), $categories);
    ObjectHelper::hydrate($post, $data, $fields);
    if($v->validate()) {
        $pdo->beginTransaction();
        PostAttachment::upload($post);
        $postTable->updatePost($post);
        $postTable->attachCategories($post->getID(), $_POST['categories_ids']);
        $pdo->commit();
        $categoryTable->hydratePost([$post]);
        $success = true;
    } else {
        $errors = $v->errors();
    }
}
$form = new Form($post, $errors);

return $twig->render('admin/post/edit.twig', [
    'title' => $title,
    'form' => $form,
    'router' => $router,
    'success' => $success,
    'errors' => $errors,
    'post' => $post,
    'categories' => $categories
]);