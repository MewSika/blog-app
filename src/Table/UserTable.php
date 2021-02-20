<?php

namespace App\Table;
use App\Auth\User;

final class UserTable extends Table{

    protected $table = 'users_b';
    protected $class = User::class;

    public function findByUsername(string $username)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE username = :username");
        $query->execute([
            'username' => $username
        ]);
    }
}
