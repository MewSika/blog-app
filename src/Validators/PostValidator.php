<?php
namespace App\Validators;

use App\Table\PostTable;

class PostValidator extends AbstractValidator {

    public function __construct(array $data, PostTable $table, ?int $postID = null, array $categories)
    {
        parent::__construct($data);
        $this->validator->rule('required', ['name', 'slug', 'content', 'author']);
        $this->validator->rule('required', 'categories_ids')->message('Veuillez sélectionner une catégorie d\'articles');
        $this->validator->rule('slug', 'slug');
        $this->validator->rule('image', 'image')->message('Le fichier doit être au format .jpeg .png ou .webp');
        $this->validator->rule('imageSize', 'image')->message('Le fichier doit peser moins de 800ko');
        $this->validator->rule('subset', 'categories_ids', array_keys($categories))->message('');
        $this->validator->rule(function($field, $value) use ($table, $postID){
            return !$table->exists($field, $value, $postID);
        }, ['slug', 'name'], 'Cette valeur est déjà utilisée');
        $this->validator->rule('lengthMin', ['name', 'slug'], 3);
        $this->validator->rule('lengthMax', ['name', 'slug'], 200);
        $this->validator->rule('lengthMin', ['author'], 5);
        $this->validator->rule('lengthMax', ['author'], 30);
        $this->validator->rule('lengthMin', ['content'], 250)->message('Votre article doit contenir au moins 250 caractères');
        $this->validator->rule('regex', ['name', 'author'], '/^[\w\séèêàçùô:?!\'"€]*$/');
    }
}