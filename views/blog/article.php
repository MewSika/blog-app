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
        <h1 class="text-right"><?= e($post->getName()) ?></h1>
        <?php if($post->getImage()) : ?>
            <img src="<?= $post->getImageURL('large') ?>" alt="<?= $post->getName() ;?>" class="card-img-top">
        <?php endif; ?>
    </article>


    <p class="text-muted text-right">Publié le <?= $post->getCreatedAt()->format('d F Y') ?></p>
    <p class="text-right font-weight-light font-italic">
    <?php foreach($post->getCategories() as $k => $category) : ?>
        <?php if($k > 0) : ?>
            <span class="font-weight-light">|</span>
        <?php endif;?>
        <a href="<?= $router->url('category', ['id' => $category->getId(), 'slug' => $category->getSlug()]); ?>" class="text-dark"><?= e($category->getName()); ?></a>
    <?php endforeach ; ?>
    </p>
<hr>
<p class="text-justify"><?= $post->getFormattedContent(); ?></p>
<p class="blockquote-footer text-right pt-3"><em><?= e($post->getAuthor()) ?></em></p>
