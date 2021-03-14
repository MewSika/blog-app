<?php

use App\HTML\Form;
use App\Validator;
use App\Model\Post;
use App\ObjectHelper;
use App\Config\Database;
use App\Table\PostTable;
use App\Table\CategoryTable;
use App\Validators\PostValidator;
use App\Attachment\PostAttachment;
use App\Exception\ForbiddenException;


$title = "Création d'article";

$success = false;
$errors = [];

$pdo = Database::getPDO();
$post = new Post();

$categoryTable = new CategoryTable($pdo);
$categories = $categoryTable->list();

if(!empty($_POST)) {
    $postTable = new PostTable($pdo);
    $data = array_merge($_POST, $_FILES);
    $fields = ['name', 'slug', 'content', 'author', 'created_at', 'image'];

    /** Gestion de la validation */
    Validator::lang('fr');
    $v = new PostValidator($data, $postTable, $post->getID(), $categories);
    ObjectHelper::hydrate($post, $data, $fields);
    if($v->validate()) {
        $pdo->beginTransaction();
        PostAttachment::upload($post);
        $postTable->createPost($post);
        $postTable->attachCategories($post->getID(), $_POST['categories_ids']);
        $pdo->commit();
        header('Location:' .  $router->url('posts_manage') . '?success=1');
    } else {
        $errors = $v->errors();
    }
}
$form = new Form($post, $errors);

return $twig->render('admin/post/new.twig', [
    'title' => $title,
    'router' => $router,
    'success' => $success,
    'errors' => $errors,
    'form' => $form,
    'post' => $post,
    'categories' => $categories
]);