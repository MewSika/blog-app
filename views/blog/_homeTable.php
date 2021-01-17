

<div class="col-md-5 card rounded border-0 p-0 m-2">
    <div class="card-header bg-light px-0 border-0">
        <div class="d-flex justify-content-start align-items-center">
            <img width="24" height="24" class="rounded-circle mx-2" data-src="https://i.picsum.photos/id/237/536/354.jpg?hmac=i0yVXW1ORpyCZpQ-CknuyV-jbtU7_x9EBQVhvT5aRr0" src="https://i.picsum.photos/id/237/536/354.jpg?hmac=i0yVXW1ORpyCZpQ-CknuyV-jbtU7_x9EBQVhvT5aRr0" lazy="loaded">
            <p class="text-muted small m-0"><?= e($post->getAuthor()) ?></p>    
        </div>
    </div>
    <div class="card-body bg-light p-0">
        <?php if($post->getImage()) :?>
            <a href="<?= $router->url('article', ['id' => $post->getId(), 'slug' => $post->getSlug()]);?>">
                <div class="card-img-top d-flex justify-content-center align-items-center "><img class="rounded" src="<?= $post->getimageURL('small');?>" alt=""></div>
            </a>
        <?php endif ;?>
        <div class="card-text bg-light p-2">
            <h5 class="fw-bold"><?= $post->getName(); ?></h5>
            <p class="small"><?= $post->getExcerpt(100) ?> <a href="<?= $router->url('article', ['id' => $post->getId(), 'slug' => $post->getSlug()]);?>" class="text-secondary fst-italic">...lire la suite</a></p>
        </div>
    </div>
    <div class="card-footer text-end">
      <small class="text-muted">Publié le <?= $post->getCreatedAt()->format('d/m/Y à H\hi') ?></small>
    </div>
</div>