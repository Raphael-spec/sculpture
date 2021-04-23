<?php

class Carving{

    private $id_carv;
    private $name;
    private $content;
    private $crea_date;
    private $picture_f;
    private $picture_l;
    private $picture_r;
    private $quantity;
    private $price;
    private $category;
    

    
    public function __construct()
    {
        $this->category = new Category();
        
    }

    



    /**
     * Get the value of id_carv
     */ 
    public function getId_carv()
    {
        return $this->id_carv;
    }

    /**
     * Set the value of id_carv
     *
     * @return  self
     */ 
    public function setId_carv($id_carv)
    {
        $this->id_carv = $id_carv;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of quantity
     */ 
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  self
     */ 
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the value of picture_f
     */ 
    public function getPicture_f()
    {
        return $this->picture_f;
    }

    /**
     * Set the value of picture_f
     *
     * @return  self
     */ 
    public function setPicture_f($picture_f)
    {
        $this->picture_f = $picture_f;

        return $this;
    }

    
    /**
     * Get the value of picture_l
     */ 
    public function getPicture_l()
    {
        return $this->picture_l;
    }

    /**
     * Set the value of picture_l
     *
     * @return  self
     */ 
    public function setPicture_l($picture_l)
    {
        $this->picture_l = $picture_l;

        return $this;
    }

    /**
     * Get the value of picture_r
     */ 
    public function getPicture_r()
    {
        return $this->picture_r;
    }

    /**
     * Set the value of picture_r
     *
     * @return  self
     */ 
    public function setPicture_r($picture_r)
    {
        $this->picture_r = $picture_r;

        return $this;
    }

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of crea_date
     */ 
    public function getCrea_date()
    {
        return $this->crea_date;
    }

    /**
     * Set the value of crea_date
     *
     * @return  self
     */ 
    public function setCrea_date($crea_date)
    {
        $this->crea_date = $crea_date;

        return $this;
    }

}