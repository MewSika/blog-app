<?php

use App\Helpers\ { NumberHelper, URLHelper };
use App\Table\ { EstateTable, TableHelper };

use App\QueryBuilder;
use App\Config\Database;
require '../vendor/autoload.php';
define ('PER_PAGE', 20);

$title = "Homepage";
$error = null;

try {
    $pdo = Database::getPDO();
} catch (PDOException $e) {
    $error = 'Connection failed : '.$e->getMessage();
}

$query = (new QueryBuilder($pdo))->from('products');

// Recherche par ville
if(!empty($_GET['q'])) {
    $query
        ->where('city LIKE :city')
        ->setParam('city', '%' . $_GET['q'] . '%' );
}

$table = (new EstateTable($query, $_GET))
        ->sortable('id', 'city', 'price')
        ->format('price', function($value) {
            return NumberHelper::price($value);
        })
        ->setColumns([
            'id'=> 'ID',
            'name'=> 'Nom',
            'city'=> 'Ville',
            'price' => 'Prix'
    ]);
?>
<?php if($error):?>
<div class="alert alert-danger">
    <?= $error ?>
</div>
<?php endif; ?>
<h1>Page d'accueil</h1>
<hr>

<form action="" class="mb-4">
    <div class="form-group">
        <input type="text" class="form-control" name="q" placeholder="Rechercher par ville" value="<?= htmlentities($_GET['q'] ?? null);?>">
    </div>
    <button class="btn btn-primary">Rechercher</button>
</form>

<?php $table->render();?>