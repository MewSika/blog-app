<?php
namespace App\Model;

use Psr\Http\Message\ServerRequestInterface;

class Contact
{
    /**
     * @var int
     */
    private $id;
    
    /**
     * @var int
     */
    private $id_user;

    /**
     * @var string
     */
    private $content;
    
    /**
     * @var string
     */
    private $created_at;

    /**
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param  int  $id
     *
     * @return  self
     */ 
    public function setId(int $id) : self
    {
        $this->id = $id;

        return $this;
    }


    /**
     * @return  string
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param  string  $content
     *
     * @return  self
     */ 
    public function setContent(string $content) : self
    {
        $this->content = e($content);

        return $this;
    }

    public function getCreatedAt(): \DateTime
    {
        return new \DateTime($this->created_at);
    }

    /**
     * Set the value of created_at
     * @return  self
     */ 
    public function setCreatedAt(string $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }


    /**
     * Get the value of id_user
     *
     * @return  int
     */ 
    public function getIdUser() :?int
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @param  int  $id_user
     *
     * @return  self
     */ 
    public function setIdUser(int $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }
}
