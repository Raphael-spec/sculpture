<?php

class Carving{

    private $id_carv;
    private $name;
    private $content;
    private $picture;
    private $dimension;
    private $date;
    private $quality;
    private $quantity;
    private $price;
    private $category;
    private $shopping;
    //private $customer;
    

    
    public function __construct()
    {
        $this->category = new Category();
        $this->shopping = new Shopping();
        //$this->customer = new Customer();
        
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
     * Get the value of picture
     */ 
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */ 
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get the value of dimension
     */ 
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * Set the value of dimension
     *
     * @return  self
     */ 
    public function setDimension($dimension)
    {
        $this->dimension = $dimension;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of quality
     */ 
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * Set the value of quality
     *
     * @return  self
     */ 
    public function setQuality($quality)
    {
        $this->quality = $quality;

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
     * Get the value of shopping
     */ 
    public function getShopping()
    {
        return $this->shopping;
    }

    /**
     * Set the value of shopping
     *
     * @return  self
     */ 
    public function setShopping($shopping)
    {
        $this->shopping = $shopping;

        return $this;
    }

    // /**
    //  * Get the value of customer
    //  */ 
    // public function getCustomer()
    // {
    //     return $this->customer;
    // }

    // /**
    //  * Set the value of customer
    //  *
    //  * @return  self
    //  */ 
    // public function setCustomer($customer)
    // {
    //     $this->customer = $customer;

    //     return $this;
    // }
}