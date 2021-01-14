<p class="fw-bold mb-3">
    <a href="<?= $router->url('categories_manage'); ?>" class="text-dark"><i class='fas fa-angle-double-left'></i> Retour vers la gestion des catégories</a>
</p>
<form action="" method="post" class="mb-4">
    <?= $form->input('name', 'Titre'); ?>
    <?= $form->input('slug', 'URL'); ?>
    <button name="" type="submit" class="btn btn-success">
        <?php if($item->getID() !== null) :?>
            Modifier
        <?php else : ?>
            Créer
        <?php endif;?>
    </button>
</form>