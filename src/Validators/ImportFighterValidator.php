<?php
namespace App\Validators;

use App\Table\FighterTable;

class ImportFighterValidator extends AbstractValidator {

    public function __construct(array $data, FighterTable $fighter, ?int $contactID = null)
    {
        parent::__construct($data);
        // $this->validator->rule('equals', ['error'], 0);
        // $this->validator->rule('in', 'type', ['text/csv']);
    }
}