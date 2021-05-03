<?php

class Category{

    private $id_cat;
    private $name_cat;
    private $picture_cat;

    public function __construct()
    {
        
    }

    

    /**
     * Get the value of id_cat
     */ 
    public function getId_cat()
    {
        return $this->id_cat;
    }

    /**
     * Set the value of id_cat
     *
     * @return  self
     */ 
    public function setId_cat($id_cat)
    {
        $this->id_cat = $id_cat;

        return $this;
    }

    

    /**
     * Get the value of name_cat
     */ 
    public function getName_cat()
    {
        return $this->name_cat;
    }

    /**
     * Set the value of name_cat
     *
     * @return  self
     */ 
    public function setName_cat($name_cat)
    {
        $this->name_cat = $name_cat;

        return $this;
    }

    /**
     * Get the value of picture_cat
     */ 
    public function getPicture_cat()
    {
        return $this->picture_cat;
    }

    /**
     * Set the value of picture_cat
     *
     * @return  self
     */ 
    public function setPicture_cat($picture_cat)
    {
        $this->picture_cat = $picture_cat;

        return $this;
    }
}