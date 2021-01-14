<div class="card mb-3 shadow">
    <h6 class="card-header">
        Articles récents
    </h6>
    <ul class="nav flex-column p-2">
        <?php foreach($lastPosts as $lastPost) :?>
        <a href="<?= $router->url('category', ['id' => $lastPost->getId(), 'slug' => $lastPost->getSlug()])?>" class="text-secondary text-decoration-none">
            <li class="nav-link fw-light py-1 list-group-item-action"><strong><?= $lastPost->getCreatedAt()->format('d.m.y')?></strong> : <?= $lastPost->getName()?></li>
        </a>
        <?php endforeach;?>
    </ul>
</div>