<?php 
use App\Config\Database;
use App\Table\PostTable;

$title = "Accueil - Pixel Blog";
$link = $router->url('blog');

$pdo = Database::getPDO();
$lastPosts = (new PostTable($pdo))->getLastPosts(6);
?>

<h1 class="display-3 fw-bold">Bienvenue sur Pixel Blog !</h1>
<hr>
<div class="row">
    <aside class="col-md-3">
        <?php require __DIR__.'/blog/_side.php'; ?>
    </aside>
    <div class="col-md-9">
        <h2>Dernières actualités : </h2>
        <div class="row justify-content-center">
                <?php foreach($lastPosts as $k => $post) :?>
                    <?php require '../views/blog/_homeTable.php'; ?>
                <?php endforeach ;?>
        </div>
    </div>
</div>
