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
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $content;


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
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param  string  $username
     *
     * @return  self
     */ 
    public function setUsername(string $username) : self
    {
        $this->username = e($username);

        return $this;
    }

    /**
     * @return  string
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param  string  $email
     *
     * @return  self
     */ 
    public function setEmail(string $email) : self
    {
        $this->email = e($email);

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

}
