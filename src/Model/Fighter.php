<?php

namespace App\Model;

class Fighter {
    private $id;
    private $champ;
    private $name;
    private $win;
    private $lose;
    private $draw;
    private $nc;
    private $height;
    private $weight;
    private $weight_cat_id;
    private $reach;
    private $stance;
    private $dob;
    private $SLpM;
    private $Str_Acc;
    private $SApM;
    private $Str_Def;
    private $TD_Avg;
    private $TD_Acc;
    private $TD_Def;
    private $Sub_Avg;
    private $sex;
    private $image;
    private $oldImage;
    private $pendingUpload = false;
    private $last_updated;


    /**
     * Get the value of fighter_id
     */ 
    public function getID(): ?int
    {
        return $this->id;
    }

    /**
     * Set the value of fighter_id
     *
     * @return  self
     */ 
    public function setID(int $id):self
    {
        $this->id = $id;

        return $this;
    }

    public function getChamp(): ?int
    {
        return $this->champ;
    }

    public function setChamp(int $champ) :self
    {
        $this->champ = $champ;
        return $this;
    }
    /**
     * Get the value of name
     */ 
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName(string $name):self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of win
     */ 
    public function getWin()
    {
        return $this->win;
    }

    /**
     * Set the value of win
     *
     * @return  self
     */ 
    public function setWin($win):self
    {
        $this->win = $win;

        return $this;
    }

    /**
     * Get the value of lose
     */ 
    public function getLose()
    {
        return $this->lose;
    }

    /**
     * Set the value of lose
     *
     * @return  self
     */ 
    public function setLose($lose):self
    {
        $this->lose = $lose;

        return $this;
    }

    /**
     * Get the value of draw
     */ 
    public function getDraw()
    {
        return $this->draw;
    }

    /**
     * Set the value of draw
     *
     * @return  self
     */ 
    public function setDraw($draw):self
    {
        $this->draw = $draw;

        return $this;
    }

    /**
     * Get the value of nc
     */ 
    public function getNc()
    {
        return $this->nc;
    }

    /**
     * Set the value of nc
     *
     * @return  self
     */ 
    public function setNc($nc): ?self
    {
        $this->nc = $nc;

        return $this;
    }

    /**
     * Get the value of height
     */ 
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the value of height
     *
     * @return  self
     */ 
    public function setHeight($height):self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get the value of weight
     */ 
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */ 
    public function setWeight($weight):self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return WeightCategory ID
     */ 
    public function getWeightCatId(): ?int
    {
        return $this->weight_cat_id;
    }


    public function setWeightCatId($weight_cat_id):self 
    {
        $this->weight_cat_id = $weight_cat_id;

        return $this;
    }

    public function addWeightCategory(WeightCategory $weight_category): void
    {
        $this->weight_categories[] = $weight_category;
        $weight_category->setFighter($this);
    }

    /**
     * Get the value of reach
     */ 
    public function getReach() 
    {
        return $this->reach;
    }

    /**
     * Set the value of reach
     *
     * @return  self
     */ 
    public function setReach($reach):self
    {
        $this->reach = $reach;

        return $this;
    }

    /**
     * Get the value of stance
     */ 
    public function getStance(): ?string
    {
        return $this->stance;
    }

    /**
     * Set the value of stance
     *
     * @return  self
     */ 
    public function setStance(string $stance):self
    {
        $this->stance = $stance;

        return $this;
    }

    /**
     * Get the value of date of birth
     */ 
    public function getDob(): ?string
    {
        $date = strtotime($this->dob);
        $this->dob = date('Y-m-d', $date);
        return $this->dob;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */ 
    public function setDob(string $dob) :self
    {
        $date = strtotime($dob);
        $this->dob = date('Y-m-d', $date);
        return $this;
    }

    /**
     * Get the value of Significant Strikes Landed per Minute
     */ 
    public function getSLpM()
    {
        return $this->SLpM;
    }

    /**
     * Set the value of SLpM
     *
     * @return  self
     */ 
    public function setSLpM($SLpM):self
    {
        $this->SLpM = $SLpM;

        return $this;
    }

    /**
     * Get the value of Significant strike accuracy
     */ 
    public function getStrAcc() 
    {
        return $this->Str_Acc;
    }

    /**
     * Set the value of Str_Acc
     *
     * @return  self
     */ 
    public function setStrAcc($Str_Acc):self
    {
        $this->Str_Acc = $Str_Acc;

        return $this;
    }

    /**
     * Get the value of Significant Strikes Absorbed per Minute
     */ 
    public function getSApM()
    {
        return $this->SApM;
    }

    /**
     * Set the value of SApM
     *
     * @return  self
     */ 
    public function setSApM($SApM):self
    {
        $this->SApM = $SApM;

        return $this;
    }

    /**
     * Get the value of Significant Strike Defence (the % of opponents strikes that did not land)
     */ 
    public function getStrDef() 
    {
        return $this->Str_Def;
    }

    /**
     * Set the value of Str_Def
     *
     * @return  self
     */ 
    public function setStrDef($Str_Def):self
    {
        $this->Str_Def = $Str_Def;

        return $this;
    }

    /**
     * Get the value of Average Takedowns Landed per 15 minutes
     */ 
    public function getTDAvg()
    {
        return $this->TD_Avg;
    }

    /**
     * Set the value of Average Takedowns Landed per 15 minutes
     *
     * @return  self
     */ 
    public function setTDAvg($TD_Avg):self
    {
        $this->TD_Avg = $TD_Avg;

        return $this;
    }

    /**
     * Get the value of Takedown Accuracy
     */ 
    public function getTDAcc()
    {
        return $this->TD_Acc;
    }

    /**
     * Set the value of TD_Acc
     *
     * @return  self
     */ 
    public function setTDAcc($TD_Acc):self
    {
        $this->TD_Acc = $TD_Acc;

        return $this;
    }


    /**
     * Get the value of  Takedown Defense
     */ 
    public function getTDDef()
    {
        return $this->TD_Def;
    }

    /**
     * Set the value of TD_Def
     *
     * @return  self
     */ 
    public function setTDDef($TD_Def):self
    {
        $this->TD_Def = $TD_Def;

        return $this;
    }

    /**
     * Get the value of Submissions Attempted per 15 minutesAvg
     */ 
    public function getSubAvg()
    {
        return $this->Sub_Avg;
    }

    /**
     * Set the value of Average Submissions Attempted per 15 minutes
     *
     * @return  self
     */ 
    public function setSubAvg($Sub_Avg):self
    {
        $this->Sub_Avg = $Sub_Avg;

        return $this;
    }

    /**
     * Get the value of last_updated
     */ 
    public function getLastupdated()
    {
        return $this->last_updated;
    }

    /**
     * Set the value of last_updated
     *
     * @return  self
     */ 
    public function setLastupdated(string $last_updated)
    {
        $this->last_updated = new \DateTime;

        return $this;
    }

    /**
     * Get the value of sex
     */ 
    public function getSex(): ?int
    {
        return $this->sex;
    }

    /**
     * Set the value of sex
     *
     * @return  self
     */ 
    public function setSex(int $sex):self
    {
        $this->sex = $sex;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function getOldImage () : ?string
    {
        return $this->oldImage;
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
        return '/img/fighters/' . $this->image . '_' . $format . '.jpg';
    }
}