<?php
namespace App\Validators;

use App\Table\UserTable;

class UserBackValidator extends UserValidator {

    public function __construct(array $data, UserTable $table, ?int $id = null)
    {
        parent::__construct($data, $table, $id);
        $this->validator->rule('required', ['role']);
    }
}