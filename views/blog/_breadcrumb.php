<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item fst-italic"><a href="<?= $router->url('home') ?>" class="text-muted">Accueil</a></li>
        <li class="breadcrumb-item fst-italic"><a href="<?= $router->url('blog') ?>" class="text-muted">Articles</a></li>
        <li class="breadcrumb-item fst-italic" aria-current="page"><?= $post->getName() ;?></li>
    </ol>
</nav>