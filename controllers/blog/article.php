<?php
use App\ObjectHelper;
use App\Model\Message;
use App\Config\Database;
use App\Table\PostTable;
use App\Table\MessageTable;
use App\Table\CategoryTable;

$id = (int)$params['id'];
$slug = $params['slug'];
$user = $auth->user();
$pdo = Database::getPDO();
$post = (new PostTable($pdo))->find($id);
(new CategoryTable($pdo))->hydratePost([$post]);
$lastPosts = (new PostTable($pdo))->getLastPosts(6);
$nextPost = (new PostTable($pdo))->getNextPost($id);
$previousPost = (new PostTable($pdo))->getPrevioustPost($id);
$url = $router->url('article', ['slug' => $post->getSlug(), 'id' => $post->getId()]);

/* Redirection */
if($post->getSlug() !== $slug) {
    http_response_code(301);
    header('Location: '.$url);
}

/* Gestion message */
$message = new Message();
$messageTable = new MessageTable($pdo);
$list = $messageTable->getMessageByPost($post->getID());
if(!empty($_POST)){
    $fields = ['id_user', 'id_post', 'content', 'created_at'];
    $data = $_POST;
    
    $data["id_user"] = $user->getID();
    $data["id_post"] = $post->getID();
    $data["created_at"] = date("Y-m-d H:i:s");
    /** Gestion de la validation */
    ObjectHelper::hydrate($message, $data, $fields);
    $pdo->beginTransaction();
    $messageTable->createMessage($message);
    $pdo->commit();
    /* Redirige pour clear Post */
    header('Location:'. $url);
}

return $twig->render('blog/article.twig', [
    'id' => $id,
    'slug' => $slug,
    'post' => $post,
    'router' => $router,
    'user' => $user,
    'message' => $message,
    'list' => $list,
    'lastPosts' => $lastPosts,
    'nextPost' => $nextPost,
    'previousPost' => $previousPost
    ]);
