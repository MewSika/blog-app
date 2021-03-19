<?php

namespace App\Model;

class User {
    
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
    private $password;
    
    /**
     * @var string
     */
    private $token;
    
    /**
     * @var string
     */
    private $role = "user";
    
    /**
     * @var string
     */
    private $mail;
    
    /**
     * @var string 
     */
    private $created_at;

    
    /**
     * @var int
     */
    private $newsletter;

    /**
     * Get the value of id
     */ 
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */ 
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of username
     */ 
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * Set the value of username
     */ 
    public function setUsername(string $username):self
    {
        $this->username = e($username);
        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */ 
    public function setPassword(string $password): self
    {
        $password_hash = password_hash(e($password), PASSWORD_DEFAULT, ['cost' => 12]);
        $this->password = $password_hash;
        return $this;
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     */ 
    public function setRole(string $role)
    {
        $this->role = e($role);
        return $this;
    }

    /**
     * Get the value of mail
     *
     * @return  string
     */ 
    public function getMail(): ?string
    {
        return $this->mail;
    }

    /**
     * @param  string  $mail
     */ 
    public function setMail(string $mail):self
    {
        $this->mail = e($mail);
        return $this;
    }

    /**
     * @return  string
     */ 
    public function getCreatedAt() : \DateTime
    {
        return new \DateTime($this->created_at);

    }

    /**
     *
     * @param  string  $created_at
     *
     * @return  self
     */ 
    public function setCreatedAt(string $created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * Get the value of newsletter
     *
     * @return  int
     */ 
    public function getNewsletter() : ?int
    {
        return $this->newsletter;
    }

    /**
     * Set the value of newsletter
     *
     * @param  int  $newsletter
     *
     * @return  self
     */ 
    public function setNewsletter(int $newsletter):self
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get the value of token
     *
     * @return  string
     */ 
    public function getToken():string
    {
        return $this->token;
    }

    /**
     * Set the value of token
     *
     * @param  string  $token
     *
     * @return  self
     */ 
    public function setToken(string $token):self
    {
        $this->token = $token;

        return $this;
    }
}