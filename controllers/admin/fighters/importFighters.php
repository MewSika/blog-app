<?php

use App\Config\Database;
use App\HTML\Form;
use App\Validator;
use App\ObjectHelper;
use App\Model\Fighter;
use App\Table\FighterTable;
use App\Validators\ImportFighterValidator;


$title = "Import données UFC Fighters";

$success = false;
$errors = [];

$pdo = Database::getPDO();
$fighter = new Fighter();

if(!empty($_FILES)) {
    $fighterTable = new FighterTable($pdo);
    $file = $_FILES['csv']['tmp_name'];
    $content = file_get_contents($file);
    /** Gestion de la validation */
    Validator::lang('fr');
    $v = new ImportFighterValidator($_FILES['csv'], $fighterTable);
    // if($v->validate()) {
        $pdo->beginTransaction();
        $fighterTable->importData($content);
        $pdo->commit();
        $success = true;
        header('Location:' .  $router->url('import'));
    /*} else {
        $errors = $v->errors();
    } */
}

$form = new Form($fighter, $errors);

return $twig->render('admin/fighters/importFighters.twig', [
    'router' => $router,
    'success' => $success,
    'errors' => $errors,
    'title' => $title,
    'form' => $form
    // 'form' => $form,
]);