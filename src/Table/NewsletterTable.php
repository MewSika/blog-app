<?php
namespace App\Table;

use App\Model\Newsletter;
use App\Model\User;

final class NewsletterTable extends Table {

    protected $table = "newsletter";
    protected $class = Newsletter::class;

    public function updateNewsletter(Newsletter $newsletter): void
    {
        $this->update([
            'title' => $newsletter->getTitle(),
            'content' => $newsletter->getContent(),
            'author' => $newsletter->getAuthor(),
            'created_at' => $newsletter->getCreatedAt()->format('Y-m-d h:i:s'),
        ], $newsletter->getID());
    }
    
    /**
     * Créer un nouveau message
     *
     * @param  Message $message
     * @return void
     */
    public function createNewsletter(Newsletter $newsletter): void
    {
        $id = $this->create([
            'title' => $newsletter->getTitle(),
            'content' => $newsletter->getContent(),
            'author' => $newsletter->getAuthor(),
            'created_at' => $newsletter->getCreatedAt()->format('Y-m-d h:i:s'),
        ]);
        $newsletter->setID($id);
    }

    public function listNewsletters() : array 
    {
        return $this->queryAndFetchAll("SELECT * FROM {$this->table} ORDER BY created_at DESC");
    }

    /*
     * @param ServerRequestInterface $request
     * @return RedirectResponse|string
     */
    public function sendNewsletter(string $from, string $to, string $title, string $content)
    {
        $transport = (new \Swift_SmtpTransport('mma-coliseum', 1025))
            ->setUsername('')
            ->setPassword('');
        $mailer = new \Swift_Mailer($transport);
        $message = (new \Swift_Message($title))
        ->setFrom([$from => $from])
        ->setTo([$to => $to])
        ->setBody($content)
        ;
        $result = $mailer->send($message);
    }

}