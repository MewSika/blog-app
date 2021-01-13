<?php
ob_start();

$title = "Erreur 404";
?>

<div class="alert alert-danger">
    <b>404 : La page demandée n'est pas disponible</b>
</div>

<?php $pageContent = ob_get_clean()?>
<?php require '../views/layout/layout.php';?>