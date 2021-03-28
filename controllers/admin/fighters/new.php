<?php

use App\HTML\Form;
use App\Validator;
use App\ObjectHelper;
use App\Model\Fighter;
use App\Config\Database;
use App\Table\FighterTable;
use App\Table\WeightCategoryTable;
use App\Validators\FighterValidator;
use App\Attachment\FighterAttachment;

$title = "Création combattant";

$success = false;
$errors = [];

$pdo = Database::getPDO();
$fighter = new Fighter();
$weightCategoryTable = new WeightCategoryTable($pdo);

$categories = $weightCategoryTable->list();

$sexes = [ 'H' => 1, 'F' => 2];
if(!empty($_POST)) {
    $fighterTable = new FighterTable($pdo);
    $data = array_merge($_POST, $_FILES);
    $data['champ'] = isset($_POST['champ']) ? 1 : 0;
    $data['sex'] = $_POST['sex'] ?? 1;
    $fields = [ 'champ',
                'name',
                'sex',
                'dob',
                'win',
                'lose',
                'draw',
                'nc',
                'weight_cat_id',
                'weight',
                'stance',
                'reach',
                'height',
                'SLpM',
                'Str_Acc',
                'SApM',
                'Str_Def',
                'TD_Avg',
                'TD_Acc',
                'TD_Def',
                'Sub_Avg',
                'image',
                'last_updated'
            ];
    // /** Gestion de la validation */
    $v = new FighterValidator($data, $fighterTable, $fighter->getID());
    ObjectHelper::hydrate($fighter, $data, $fields);
    
    if($v->validate()) {
        $pdo->beginTransaction();
        FighterAttachment::upload($fighter);
        $fighterTable->createFighter($fighter);
        $pdo->commit();
        $success = true;
    } else {
        $errors = $v->errors();
    }
}
$form = new Form($fighter, $errors);

return $twig->render('admin/fighters/new.twig', [
    'title' => $title,
    'form' => $form,
    'router' => $router,
    'success' => $success,
    'errors' => $errors,
    'fighter' => $fighter,
    'sexes' => $sexes,
    'categories' => $categories
]);