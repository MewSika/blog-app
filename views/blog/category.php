<?php
use App\Config\Database;
use App\Table\PostTable;
use App\Table\CategoryTable;

$id = (int)$params['id'];
$slug = $params['slug'];

$pdo = Database::getPDO();
$category = (new CategoryTable($pdo))->find($id);

/** Redirection */
if($category->getSlug() !== $slug) {
    $url = $router->url('category', ['slug' => $category->getSlug(), 'id' => $category->getId()]);
    http_response_code(301);
    header('Location: '.$url);
}

[$posts, $pagination] = (new PostTable($pdo))->findPaginatedForCategory($category->getID());

$title = "Catégorie - " . ucfirst($category->getName());
$link = $router->url('category', ['id' => $category->getID(), 'slug' => $category->getSlug()]);
?>

<h2><?= e($title) ?></h2>
<hr>

<div class="row">
    <?php foreach($posts as $post) :?>
    <div class="col-md-12 mb-3">
        <?php require '_card.php'; ?>
    </div>
    <?php endforeach ;?>
</div>

<aside class="text-center mb-5">
    <?= $pagination->previousLink($link) ?>
    <?= $pagination->nextLink($link) ?>
</aside>