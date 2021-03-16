<?php

namespace App\Table;
use App\Model\User;
use App\Model\Contact;

final class ContactTable extends Table{

    protected $table = 'contact';
    protected $class = Contact::class;

    public function createContact(Contact $contact): void
    {
        $id = $this->create([
            'username' => $contact->getUsername(),
            'email' => $contact->getEmail(),
            'content' => $contact->getContent(),
            'checkNewsletter' => $contact->getCheckNewsletter()
        ]);
        $contact->setID($id);
    }

    /**
     * Récupère les derniers messages envoyés
     * @return array
     */
    public function getLastMessages(int $limit): array
    {
        return $this->queryAndFetchAll("SELECT * FROM {$this->table} ORDER BY created_at DESC LIMIT {$limit}");
    }

    /*
     * @param ServerRequestInterface $request
     * @return RedirectResponse|string
     */
    public function sendMessage(string $username, string $from, string $to, string $content)
    {
        $transport = (new \Swift_SmtpTransport('bloglocal', 1025))
            ->setUsername('')
            ->setPassword('');
        $mailer = new \Swift_Mailer($transport);
        $message = (new \Swift_Message('Contact -'.$username))
        ->setFrom([$from => $username])
        ->setTo([$to => $to])
        ->setBody($content)
        ;

        $result = $mailer->send($message);
    }

}
