<?php
use App\Config\Database;
use App\Table\PostTable;
use App\Table\CategoryTable;

$id = (int)$params['id'];
$slug = $params['slug'];

$pdo = Database::getPDO();
$post = (new PostTable($pdo))->find($id);
(new CategoryTable($pdo))->hydratePost([$post]);

/* Redirection */
if($post->getSlug() !== $slug) {
    $url = $router->url('article', ['slug' => $post->getSlug(), 'id' => $post->getId()]);
    http_response_code(301);
    header('Location: '.$url);
} 

return $twig->render('blog/article.twig', ['id' => $id, 'slug' => $slug, 'post' => $post, 'router' => $router]);
