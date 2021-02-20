<?php

namespace App;

class ObjectHelper {

    private $object; 
    private $data;
    private $fields;

    public static function hydrate($object, array $data, array $fields)
    {
        foreach($fields as $key => $field){
            $method = 'set' . str_replace(' ', '', ucwords(str_replace('_', ' ', $field)));
            $object->$method($data[$field]);
        }
    }
}