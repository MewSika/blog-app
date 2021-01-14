<div class="card mb-3 shadow">
    <h6 class="card-header">
        Catégories
    </h6>
    <ul class="nav flex-column ">
        <?php foreach($categories as $item) :?>
        <a href="<?= $router->url('category', ['id' => $item->getId(), 'slug' => $item->getSlug()])?>" class="text-secondary text-decoration-none">
            <li class="list-group-item list-group-item-action"><?= $item->getName()?></li>
        </a>
        <?php endforeach;?>
    </ul>
</div>