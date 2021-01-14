<?php
use App\Config\Database;
use App\Table\PostTable;
use App\Table\CategoryTable;

$id = (int)$params['id'];
$slug = $params['slug'];

$title = "Article -" . ucfirst($slug);
$pdo = Database::getPDO();
$post = (new PostTable($pdo))->find($id);
(new CategoryTable($pdo))->hydratePost([$post]);


if($post->getSlug() !== $slug) {
    $url = $router->url('article', ['slug' => $post->getSlug(), 'id' => $post->getId()]);
    http_response_code(301);
    header('Location: '.$url);
} 
?>
    <article class="container p-0">
        <h1 class="text-center"><?= e($post->getName()) ?></h1><hr>
        <?php require '_breadcrumb.php'; ?>
        <?php if($post->getImage()) : ?>
            <img src="<?= $post->getImageURL('large') ?>" alt="<?= $post->getName() ;?>" class="card-img-top">
        <?php endif; ?>
    </article>


    <p class="text-muted text-end">Publié le <?= $post->getCreatedAt()->format('d F Y') ?></p>
    <p class="text-end fw-light fst-italic">
    <?php foreach($post->getCategories() as $k => $category) : ?>
        <?php if($k > 0) : ?>
            <span class="fw-light">|</span>
        <?php endif;?>
        <a href="<?= $router->url('category', ['id' => $category->getId(), 'slug' => $category->getSlug()]); ?>" class="text-secondary"><?= e($category->getName()); ?></a>
    <?php endforeach ; ?>
    </p>
<hr>
<p class="text-justify lh-sm"><?= $post->getFormattedContent(); ?></p>
<p class="blockquote-footer text-end pt-3"><em><?= e($post->getAuthor()) ?></em></p>
