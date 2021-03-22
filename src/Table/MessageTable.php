<?php
namespace App\Table;

use App\Model\Message;
use App\Model\User;

final class MessageTable extends Table {

    protected $table = "message";
    protected $class = Message::class;

    public function updateMessage(Message $message): void
    {
        $this->update([
            'id_user' => $message->getIdUser(),
            'id_post' => $message->getIdPost(),
            'created_at' => $message->getCreatedAt()->format('Y-m-d h:i:s'),
            'content' => $message->getContent(),
        ], $post->getID());
    }
    
    /**
     * Créer un nouveau message
     *
     * @param  Message $message
     * @return void
     */
    public function createMessage(Message $message): void
    {
        $id = $this->create([
            'id_user' => $message->getIdUser(),
            'id_post' => $message->getIdPost(),
            'created_at' => $message->getCreatedAt()->format('Y-m-d h:i:s'),
            'content' => $message->getContent(),
        ]);
        $message->setID($id);
    }

    public function getMessageByPost(int $id): ?array
    {
        $messages = $this->queryAndFetchAll("
            SELECT m.*, u.username FROM {$this->table} m
            LEFT JOIN users_b u ON u.id = m.id_user
            WHERE id_post = $id");
        $results = [];
        foreach ($messages as $key => $message) {
            $results[] = $message;
        }
        return $results;
    }

    public function reportMessage(Message $message) : void
    {
        $report = $this->update([
            'report' => $message->getReport(),
            'reported_at' => $message->getReportedAt()->format('Y-m-d h:i:s')
        ], $message->getID());
    }

    public function getModeratedComments(): ?array
    {
        $query = "SELECT * FROM {$this->table} WHERE report = 1 AND moderated = 0";
        return $this->queryAndFetchAll($query);
    }

    public function authorizeComment(int $id) 
    {
        $this->update(['report' => 0, 'reported_at' => null], $id);
    }

    public function moderateComment(int $id) 
    {
        $this->update(['report' => 0, 'moderated' => 1], $id);
    }

}