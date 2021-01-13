<?php 
use App\Auth\App;
use App\Config\Database;
use App\Table\PostTable;
use App\Table\CategoryTable;

$title = "Gestion des articles";

$pdo = Database::getPDO();
$table = new CategoryTable($pdo);
$link = $router->url('categories_manage');
?>

<h1>Gestion des catégories</h1>

<?php if(isset($_GET['success'])) : ?>
    <div class="alert alert-success alert-dismissible fade show">
        La categorie a bien été créée
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<?php if(isset($_GET['delete'])) : ?>
<div class="alert alert-danger alert-dismissible fade show">
    La catégorie a bien été supprimée
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<?php endif;?>
<table class="table rounded table-hover">
    <thead>
        <th class="align-middle">n°ID</th>
        <th class="align-middle">Titre</th>
        <th class="text-right"><a href="<?= $router->url('admin_category_new') ?>" class="btn btn-sm btn-outline-dark">Nouveau</a></th>
    </thead>
    <tbody>
        <?php   
            foreach($items as $item) :
            $edit = $router->url('admin_category', ['id' => $item->getId()]);
            $delete = $router->url('admin_category_delete', ['id' =>$item->getId()]);
        ?>
        <tr>
            <td>#<?= $item->getID();?></td>
            <td><a href="<?= $edit ?>" class="text-dark font-weight-bold"><?= e($item->getName()) ;?></a></td>
            <td class="text-right">
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