<?php 
use App\Config\Database;
use App\Table\PostTable;

$title = "Accueil - Pixel Blog";
$link = $router->url('blog');

$pdo = Database::getPDO();
$table = new PostTable($pdo);
[$posts, $pagination] = $table->findPaginated();
?>

<h1 class="display-3 fw-bold">Bienvenue sur Pixel Blog !</h1>
<hr>

<div class="row">
    <aside class="col-md-3">
        <?php require '../views/blog/_side.php'; ?>
    </aside>
    <div class="col-md-9">
        <h2>Voici un apperçu des dernières actualités : </h2>
        <div class="row">
            <?php foreach($posts as $post) :?>
            <div class="col-md-6">
                <?php require '../views/blog/_card.php'; ?>
            </div>
            <?php endforeach ;?>
        </div>
    </div>

    <aside class="text-center mb-5">
        <?= $pagination->previousLink($link); ?>
        <?= $pagination->nextLink($link); ?>
    </aside>
</div>
