<?php
namespace App\Model;

class Weightcategory {

    private $id;

    private $name;

    private $weight;


    /**
     * Get the value of id
     */ 
    public function getID() : int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId(int $id) : self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName(string $name) : self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of weight
     */ 
    public function getWeight() : int
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */ 
    public function setWeight(int $weight) : self
    {
        $this->weight = $weight;

        return $this;
    }
}