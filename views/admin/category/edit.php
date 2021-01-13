<?php

use App\Auth\App;
use App\HTML\Form;
use App\Validator;
use App\ObjectHelper;
use App\Config\Database;
use App\Table\CategoryTable;
use App\Exception\ForbiddenException;
use App\Validators\CategoryValidator;

$title = "Modification de la catégorie n°{$params['id']}";

$pdo = Database::getPDO();
$table = new CategoryTable($pdo);
$item = $table->find($params['id']);
$fields = ['name', 'slug'];

$success = false;
$errors = [];

if(!empty($_POST)) {
    /** Gestion de la validation */
    Validator::lang('fr');
    $v = new CategoryValidator($_POST, $table, $item->getID());
    ObjectHelper::hydrate($item, $_POST, $fields);
    if($v->validate()) {
        $table->update([
            'name' => $item->getName(),
            'slug' => $item->getSlug(),
        ], $item->getID());
        $success = true;
    } else {
        $errors = $v->errors();
    }
}
$form = new Form($item, $errors);
// $form->input('slug', 'URL');
?>
<?php if(!empty($errors)) :?>
    <div class="alert alert-danger">
        La modification n'a pas pu être effectuée
    </div>
<?php endif; ?>

<?php if($success) :?>
    <div class="alert alert-success">
        L'article a bien été modifié
    </div>
<?php endif; ?>

<h2>Editer la catégorie : <?= e($item->getName())?></h2>
<hr>
<?php require '_form.php' ?>