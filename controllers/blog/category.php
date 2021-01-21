<?php
use App\Config\Database;
use App\Table\PostTable;
use App\Table\CategoryTable;

$id = (int)$params['id'];
$slug = $params['slug'];

$pdo = Database::getPDO();
$category = (new CategoryTable($pdo))->find($id);

$lastPosts = (new PostTable($pdo))->getLastPosts(6);
$categories = (new CategoryTable($pdo))->all();

/** Redirection */
if($category->getSlug() !== $slug) {
    $url = $router->url('category', ['slug' => $category->getSlug(), 'id' => $category->getId()]);
    http_response_code(301);
    header('Location: '.$url);
}

[$posts, $pagination] = (new PostTable($pdo))->findPaginatedForCategory($category->getID());

$link = $router->url('category', ['id' => $category->getID(), 'slug' => $category->getSlug()]);

return $twig->render('blog/category.twig', [
    'lastPosts' => $lastPosts,
    'categories' => $categories,
    'category' => $category,
    'posts' => $posts,
    'pagination' => $pagination,
    'link' => $link,
    'router' => $router])
?>
