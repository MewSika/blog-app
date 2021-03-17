<?php
namespace App\Validators;

use App\Table\UserTable;

class UserValidator extends AbstractValidator {

    public function __construct(array $data, UserTable $table, ?int $id = null)
    {
        parent::__construct($data);
        $this->validator->rule('required', ['username', 'mail', 'password']);
        $this->validator->rule('email', 'mail');
        $this->validator->rule('different', 'username', 'password');
        $this->validator->rule(function($field, $value) use ($table, $id){
            return !$table->exists($field, $value, $id);
        }, ['username', 'mail'], 'Cette valeur est déjà utilisé');
        $this->validator->rule('lengthBetween', ['username'], 3, 15);
    }
}