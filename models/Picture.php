<?php

class Picture{
    
    private $id_pic;
    private $picture_l;
    private $picture_r;
    private $carving;

    public function __construct()
    {
        $this->carving = new Carving();
    }

    


    /**
     * Get the value of id_pic
     */ 
    public function getId_pic()
    {
        return $this->id_pic;
    }

    /**
     * Set the value of id_pic
     *
     * @return  self
     */ 
    public function setId_pic($id_pic)
    {
        $this->id_pic = $id_pic;

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
     * Get the value of carving
     */ 
    public function getCarving()
    {
        return $this->carving;
    }

    /**
     * Set the value of carving
     *
     * @return  self
     */ 
    public function setCarving($carving)
    {
        $this->carving = $carving;

        return $this;
    }
}