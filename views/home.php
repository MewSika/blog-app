<?php 
use App\Config\Database;
use App\Table\PostTable;

$title = "Articles";
$link = $router->url('blog');

$pdo = Database::getPDO();
$table = new PostTable($pdo);
[$posts, $pagination] = $table->findPaginated();
?>

<h1>Bienvenue !</h1>
<hr>

<div class="row">
    <?php foreach($posts as $post) :?>
    <div class="col-md-12 mb-3 h-50">
        <?php require '../views/blog/_card.php'; ?>
    </div>
    <?php endforeach ;?>
</div>
<aside class="text-center mb-5">
    <?= $pagination->previousLink($link); ?>
    <?= $pagination->nextLink($link); ?>
</aside>