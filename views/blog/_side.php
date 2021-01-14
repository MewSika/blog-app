<?php 

use App\Config\Database;
use App\Table\PostTable;
use App\Table\CategoryTable;

$pdo = Database::getPDO();
$categories = (new CategoryTable($pdo))->all();
$lastPosts = (new PostTable($pdo))->getLastPosts(8);
?>

<?php require __DIR__ . '/sidebar/categories.php'; ?>
<?php require __DIR__ . '/sidebar/posts.php'; ?>

