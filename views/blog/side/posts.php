<div class="card mb-3 shadow">
<h6 class="card-header">
    Articles récents
</h6>
<ul class="nav flex-column p-2">
    <?php foreach($categories as $item) :?>
    <a href="<?= $router->url('category', ['id' => $item->getId(), 'slug' => $item->getSlug()])?>" class="text-dark">
        <li class="nav-link font-weight-light py-1"><?= $item->getName()?></li>
    </a>
    <?php endforeach;?>
</ul>
</div>