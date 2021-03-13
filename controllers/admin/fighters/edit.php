<?php

use App\Attachment\FighterAttachment;
use App\HTML\Form;
use App\Validator;
use App\ObjectHelper;
use App\Config\Database;
use App\Table\FighterTable;
use App\Table\WeightCategoryTable;
use App\Validators\FighterValidator;

$title = "Modification combattant  n°{$params['id']}";
$pdo = Database::getPDO();
$fighterTable = new FighterTable($pdo);
$weightCategoryTable = new WeightCategoryTable($pdo);

$categories = $weightCategoryTable->list();
$fighter = $fighterTable->find($params['id']);
$success = false;
$errors = [];
$sexes = [ 'H' => 1, 'F' => 2];
if(!empty($_POST)) {
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
    $data = array_merge($_POST, $_FILES);
    $data['champ'] = isset($_POST['champ']) ? 1 : 0;
    // /** Gestion de la validation */
    $v = new FighterValidator($data, $fighterTable, $fighter->getID());
    
    if($v->validate()) {
        ObjectHelper::hydrate($fighter, $data, $fields);
        $pdo->beginTransaction();
        FighterAttachment::upload($fighter);
        $fighterTable->updateFighter($fighter);
        $pdo->commit();
        $success = true;
    } else {
        $errors = $v->errors();
    }
}
$form = new Form($fighter, $errors);

return $twig->render('admin/fighters/edit.twig', [
    'title' => $title,
    'form' => $form,
    'router' => $router,
    'success' => $success,
    'errors' => $errors,
    'fighter' => $fighter,
    'sexes' => $sexes,
    'categories' => $categories
]);