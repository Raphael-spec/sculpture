<?php

class shopping{

    private $id_shop;
    private $date;
    private $customer;
    

    
    public function __construct()
    {
      
        $this->customer = new Customer();
        
    }
    

    /**
     * Get the value of id_shop
     */ 
    public function getId_shop()
    {
        return $this->id_shop;
    }

    /**
     * Set the value of id_shop
     *
     * @return  self
     */ 
    public function setId_shop($id_shop)
    {
        $this->id_shop = $id_shop;

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
     * Get the value of customer
     */ 
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set the value of customer
     *
     * @return  self
     */ 
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }
}