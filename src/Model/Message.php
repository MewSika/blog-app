<?php
namespace App\Model;

class Message {

    private $id;

    private $id_user;

    private $id_post;

    private $content;

    private $created_at;

    private $user;

    private $report;

    private $reported_at;

    private $moderated;

    /**
     * Get the value of id
     */ 
    public function getId():?int
    {
        return $this->id;
    }

    /**
     * @return  self
     */ 
    public function setId(int $id):self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id_user
     */ 
    public function getIdUser():?int
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @return  self
     */ 
    public function setIdUser(int $id_user):self
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of id_post
     */ 
    public function getIdPost():?int
    {
        return $this->id_post;
    }

    /**
     * @return  self
     */ 
    public function setIdPost(int $id_post):self
    {
        $this->id_post = $id_post;

        return $this;
    }

    /**
     * Get the value of content
     */ 
    public function getContent() : ?string
    {
        return $this->content;
    }

    /**
     * @return  self
     */ 
    public function setContent(string $content):self
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
     * @return  self
     */ 
    public function setCreatedAt(string $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser(User $user) : self
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get the value of report
     */ 
    public function getReport():?int
    {
        return $this->report;
    }

    /**
     * @return  self
     */ 
    public function setReport(int $report):self
    {
        $this->report = $report;
        return $this;
    }

        /**
     * Get the value of created_at
     */ 
    public function getReportedAt(): \DateTime
    {
        return new \DateTime($this->created_at);
    }

    /**
     * @return  self
     */ 
    public function setReportedAt(string $reported_at): self
    {
        $this->reported_at = new \DateTime;
        return $this;
    }

    public function getModerated(): ?int
    {
        return $this->moderated;
    }

    public function setModerated(int $moderated) :self
    {
        $this->moderated = $moderated;
        return $this;
    }
}