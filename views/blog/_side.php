<?php 

use App\Config\Database;
use App\Table\CategoryTable;

$pdo = Database::getPDO();
$categories = (new CategoryTable($pdo))->all();
?>

<?php require __DIR__ . '/side/categories.php'; ?>
<?php require __DIR__ . '/side/posts.php'; ?>

