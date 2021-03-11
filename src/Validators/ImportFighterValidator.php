<?php
namespace App\Validators;

use App\Table\FighterTable;

class ImportFighterValidator extends AbstractValidator {

    public function __construct(array $data, FighterTable $fighter, ?int $contactID = null)
    {
        parent::__construct($data);
        $this->validator->rule('in', 'type', ['application/vnd.ms-excel']);
        $this->validator->rule('max', 'size', '500000');
    }
}