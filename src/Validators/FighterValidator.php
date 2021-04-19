<?php
namespace App\Validators;

use App\Table\FighterTable;

class FighterValidator extends AbstractValidator {

    public function __construct(array $data, FighterTable $table, ?int $fighterID = null)
    {
        parent::__construct($data);
        $this->validator->rule('required', ['name', 'sex', 'dob', 'win', 'lose', 'draw', 'nc',
                                            'weight_cat_id', 'weight', 'stance', 'reach', 'height',
                                            'SLpM', 'Str_Acc', 'SApM', 'Str_Def', 'TD_Avg', 'TD_Acc', 'TD_Def', 'Sub_Avg'
                                            ]);
        $this->validator->rule('alpha', ['stance']);
        $this->validator->rule('integer', [ 'sex', 'win', 'lose', 'draw', 'nc',
                                            'weight', 'reach', 'height',
                                            'SLpM', 'Str_Acc', 'SApM', 'Str_Def', 'TD_Avg', 'TD_Acc', 'TD_Def', 'Sub_Avg'
                                            ]);
        $this->validator->rule('image', 'image')->message('Le fichier doit être au format .jpeg .png ou .webp');
        $this->validator->rule('imageSize', 'image')->message('Le fichier doit peser moins de 800ko');
        $this->validator->rule(function($field, $value) use ($table, $fighterID){
            return !$table->exists($field, $value, $fighterID);
        }, ['name'], 'Cette valeur est déjà utilisé');
        $this->validator->rule('lengthBetween', ['name', 'slug'], 3, 100);
    }
}