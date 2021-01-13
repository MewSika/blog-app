<?php

use App\Auth\App;
use App\HTML\Form;
use App\Validator;
use App\ObjectHelper;
use App\Model\Category;
use App\Config\Database;
use App\Table\CategoryTable;
use App\Exception\ForbiddenException;
use App\Validators\CategoryValidator;

$title = "Création d'une catégorie";

$success = false;
$errors = [];
$item = new Category();
$fields =  ['name', 'slug'];

if(!empty($_POST)) {
    $pdo = Database::getPDO();
    $table = new CategoryTable($pdo);

    /** Gestion de la validation */
    Validator::lang('fr');
    $v = new CategoryValidator($_POST, $table);
    ObjectHelper::hydrate($item, $_POST, $fields);
    if($v->validate()) {
        $table->create([     
            'name' => $item->getName(),
            'slug' => $item->getSlug(),
        ]);
        header('Location:' .  $router->url('categories_manage') . '?success=1');
    } else {
        $errors = $v->errors();
    }
}
$form = new Form($item, $errors);
?>

<?php if(!empty($errors)) :?>
    <div class="alert alert-danger">
        La catégorie n'a pu être créée
    </div>
<?php endif; ?>
<?php if($success) :?>
    <div class="alert alert-success">
        La catégorie a bien été créée
    </div>
<?php endif; ?>

<h2>Création d'une catégorie</h2>
<hr>
<?php require '_form.php' ?>