<?php
namespace App\Validators;

use App\Table\NewsletterTable;

class NewsletterValidator extends AbstractValidator {

    public function __construct(array $data, NewsletterTable $table, ?int $newsletterID = null)
    {
        parent::__construct($data);
        $this->validator->rule('required', ['title', 'content', 'author']);
        $this->validator->rule(function($field, $value) use ($table, $newsletterID){
            return !$table->exists($field, $value, $newsletterID);
        }, ['name'], 'Cette valeur est déjà utilisé');
        $this->validator->rule('lengthBetween', ['title', 'author'], 3, 200);
        $this->validator->rule('lengthMin', ['content'], 250);
    }
}