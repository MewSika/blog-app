<p class="fw-bold mb-3">
    <a href="<?= $router->url('posts_manage'); ?>" class="text-dark"><i class='fas fa-angle-double-left'></i> Retour vers la gestion des articles</a>
</p>
<form action="" method="post" class="mb-4" enctype="multipart/form-data">
    <p class="fw-bold">Image à la une</p>
    <?php if($post->getImage()) : ?>
        <img src="<?= $post->getImageURL('medium') ?>" alt="" class="rounded shadow-sm mb-4">
    <?php endif; ?>
    <?= $form->input('name', 'Titre'); ?>
    <?= $form->input('slug', 'URL'); ?>
    <?= $form->input('author', 'Auteur'); ?>
    <?= $form->file('image', 'image');?>
    <?= $form->input('created_at', 'Date'); ?>
    <?= $form->select('categories_ids', 'Catég.', $categories);?>
    <?= $form->textarea('content', 'Contenu'); ?>

    <button name="" type="submit" class="btn btn-success">
        <?php if($post->getID() !== null) :?>
            Modifier
        <?php else : ?>
            Créer
        <?php endif;?>
    </button>
</form>