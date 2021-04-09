<?php

use App\Config\Database;
use App\Table\NewsletterTable;
use App\Table\UserTable;

$pdo = Database::getPDO();
$newsletterTable = new NewsletterTable($pdo);
$newsletter = $newsletterTable->find($params['id']);
$users = new UserTable($pdo);
$list = $users->listNewsletter();

foreach($list as $user) {
    $newsletterTable->sendNewsletter('contact@mma-coliseum.fr', $user->getMail(), $newsletter->getTitle(), $newsletter->getContent());
}
/* Maj newsletter status */
$newsletter->setSent(1);
$newsletterTable->update([
    'sent' => $newsletter->getSent(),
], $newsletter->getID());

header('Location:' . $router->url('newsletters_manage'));
