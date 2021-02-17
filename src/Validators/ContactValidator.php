<?php
namespace App\Validators;

use App\Table\ContactTable;

class ContactValidator extends AbstractValidator {

    public function __construct(array $data, ContactTable $contact, ?int $contactID = null)
    {
        parent::__construct($data);
        $this->validator->rule('required', ['username', 'email', 'content']);
        $this->validator->rule('email', 'email');
        $this->validator->rule('lengthBetween', ['username'], 3, 30);
        $this->validator->rule('lengthMin', ['content'], 100);
    }
}