<?php 
use App\Config\Database;
use App\Table\PostTable;

$title = "Articles";
$link = $router->url('blog');

$pdo = Database::getPDO();
$table = new PostTable($pdo);
[$posts, $pagination] = $table->findPaginated();
?>

<div class="row">

<aside class="col-md-3">
    <?php require '_side.php' ;?>
</aside>

<div class="col-md-9">
<h1 class="text-end">Index des articles</h1>
<hr>
<?php foreach($posts as $post) :?>
    <?php require '_card.php'; ?>
<?php endforeach ;?>
<aside class="text-center mb-5">
    <?= $pagination->previousLink($link); ?>
    <?= $pagination->nextLink($link); ?>
</aside>
</div>

</div>