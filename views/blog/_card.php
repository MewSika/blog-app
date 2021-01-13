<?php
$categories = [];
foreach($post->getCategories() as $category) {
    $url = $router->url('category', ['id' => $category->getId(), 'slug' => $category->getSlug()]);
    $categories[] = <<<HTML
    <a href="{$url}" class="text-dark text-muted font-weight-light font-italic">{$category->getName()}</a>
HTML;
}
?>
<div class="card shadow p-2 mb-4 bg-white rounded">
    <div class="card-body">
        <div class="container p-0">
            <h3 class="card-title text-center"><?= e($post->getName()) ?></h3>
        <hr>
            <?php if($post->getImage()) :?>
                <a href="<?= $router->url('article', ['id' => $post->getID(), 'slug' => $post->getSlug()]) ?>"><img src="<?= $post->getimageURL('large');?>" alt="" class="card-img-top mb-3 rounded"></a>
            <?php endif ;?>
        </div>
        <?= nl2br(e($post->getExcerpt())) ?>
        <a class="badge badge-light" href="
            <?= $router->url('article', ['id' => $post->getID(), 'slug' => $post->getSlug()]) ?>">...lire la suite</a>
        <footer class="blockquote-footer text-right pt-3"><?= e($post->getAuthor()) ?>, le <?= $post->getCreatedAt()->format('j F Y à H:i');?>
        <?php if(!empty($post->getCategories())) :?>
            <hr>
            Catégories associées :
            <?= implode(' | ', $categories);?>
        <?php endif ;?>
        </footer>
    </div>
</div>