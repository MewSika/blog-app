<?php
namespace App\Model;
use App\Helpers\TextHelper;;
class Post {

    private $id;

    private $name;

    private $content;

    private $slug;

    private $author;

    private $image;

    private $oldImage;

    private $pendingUpload = false;

    private $created_at;

    private $categories = [];

    public function getID(): ?int
    {
        return $this->id;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getContent (): ?string
    {
        return $this->content;
    }

    public function getFormattedContent (): ?string 
    {
        return nl2br(e($this->content));
    }

    public function getSlug(): ?string 
    {
        return $this->slug;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function getCreatedAt(): \DateTime
    {
        return new \DateTime($this->created_at);
    }

    public function getExcerpt(int $limit = 300): ?string
    {
        if($this->content === null) {
            return null;
        }
        return TextHelper::excerpt($this->content, $limit);
    }

    /** 
     * @return Category[]
    */
    public function getCategories(): array
    {
        return $this->categories;
    }

    public function getCategoriesIds(): array
    {
        $ids = [];
        foreach ($this->categories as $category) {
            $ids[] = $category->getID();
        }
        return $ids;
    }

    public function getOldImage () : ?string
    {
        return $this->oldImage;
    }
    
    public function addCategory(Category $category): void
    {
        $this->categories[] = $category;
        $category->setPost($this);
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set the value of content
     * @return  self
     */ 
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
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
     * Set the value of slug
     * @return  self
     */ 
    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Set the value of author
     * @return  self
     */ 
    public function setAuthor($author) :self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Set the value of categories
     * @return  self
     */ 
    public function setCategories(?array $categories  = null) :self
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Set the value of id
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set the value of image
     * @return  self
     */ 
    public function setImage($image)
    {
        if(is_array($image) && !empty($image['tmp_name'])){
            if(!empty($this->image)) {
                $this->oldImage = $this->image;
            }
            $this->pendingUpload = true;
            $this->image = $image['tmp_name'];
        } 
        if(is_string($image) && !empty($image)) {
            $this->image = $image;
        }

        return $this;
    }

    public function shouldUpload(): bool
    {
        return $this->pendingUpload;
    }

    public function getImageURL(string $format): ?string
    {
        if(empty($this->image)) {
            return null;
        }
        return '/img/posts/' . $this->image . '_' . $format . '.jpg';
    }
}