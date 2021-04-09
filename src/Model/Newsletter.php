<?php
namespace App\Model;

class Newsletter {

    private $id;
    private $title;
    private $author;
    private $content;
    private $created_at;
    private $sent;


    

    /**
     * Get the value of id
     */ 
    public function getId(): ?int
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
     * Get the value of author
     */ 
    public function getAuthor(): ?string
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor($author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of content
     */ 
    public function getContent (): ?string
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content) : self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of created_at
     */ 
    public function getCreatedAt(): \DateTime
    {
        return new \DateTime($this->created_at);
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreatedAt(string $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle(string $title) : self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of sent
     */ 
    public function getSent(): ?int
    {
        return $this->sent;
    }

    /**
     * Set the value of sent
     *
     * @return  self
     */ 
    public function setSent(int $sent): self
    {
        $this->sent = $sent;

        return $this;
    }
}