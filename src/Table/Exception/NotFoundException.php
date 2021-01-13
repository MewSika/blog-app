<?php
namespace App\Table\Exception;

class NotFoundException extends \Exception {

    public function __construct(string $table, $item)
    {
        $this->message = "Aucun enregistrement ne correspond à $item dans la table $table";
    }
}