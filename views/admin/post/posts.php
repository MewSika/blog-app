<?php 
use App\Auth\App;
use App\Config\Database;
use App\Table\PostTable;
use App\Exception\ForbiddenException;

$title = "Gestion des articles";

$pdo = Database::getPDO();
$table = new PostTable($pdo);
[$posts, $pagination] = $table->findPaginated();
$link = $router->url('posts_manage');

?>

<h1>Gestion des articles</h1>

<?php if(isset($_GET['success'])) : ?>
    <div class="alert alert-success alert-dismissible fade show">
        L'article a bien été créé
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<?php if(isset($_GET['delete'])) : ?>
<div class="alert alert-danger alert-dismissible fade show">
    L'article a bien été supprimé
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<?php endif;?>
<table class="table rounded table-hover">
    <thead>
        <th class="align-middle">n°ID</th>
        <th class="align-middle">Titre</th>
        <th class="align-middle">Date de création</th>
        <th class="text-end"><a href="<?= $router->url('admin_post_new') ?>" class="btn btn-sm btn-outline-dark">Nouveau</a></th>
    </thead>
    <tbody>
        <?php   
            foreach($posts as $post) :
            $edit = $router->url('admin_post', ['id' => $post->getId()]);
            $new = $router->url('admin_post_new', ['id' =>$post->getId()]);
            $delete = $router->url('admin_post_delete', ['id' =>$post->getId()]);
        ?>
        <tr>
            <td>#<?= $post->getID();?></td>
            <td><a href="<?= $edit ?>" class="text-dark fw-bold"><?= e($post->getName()) ;?></a></td>
            <td class="fst-italic"><?= e($post->getCreatedAt()->format('d/m/Y'));?></td>
            <td class="text-end">
                <a href="<?= $edit ?>" class="btn btn-sm btn-info">
                    Editer
                </a>
                <form action="<?= $delete ?>" method="post" class="d-inline" onsubmit="return confirm('Voulez-vous vraiment supprimer l\'article ?')">
                    <button type="submit" class="btn btn-sm btn-danger" >
                        Supprimer
                    </button>
                </form>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
<aside class="text-center mb-5">
    <?= $pagination->previousLink($link); ?>
    <?= $pagination->nextLink($link); ?>
</aside>