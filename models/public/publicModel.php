<?php

class PublicModel extends Tree{

    public function findCarvByCat(Carving $car){

        $sql = "SELECT * 
                FROM carving cv
                INNER JOIN category c
                ON cv.id_cat = c.id_cat
                WHERE cv.id_cat = :id";
        
        $result = $this->getRequest($sql, ["id"=>$car->getCategory()->getId_cat()]);

        $rows = $result->fetchAll(PDO::FETCH_OBJ);
        
        $carvs = [];
        
        foreach($rows as $row){

            $newCarv = new Carving();

            $newCarv->setId_carv($row->id_carv);
            $newCarv->setName($row->name);
            $newCarv->setPicture($row->picture);
            $newCarv->setDimension($row->dimension);
            $newCarv->setDate($row->date);
            $newCarv->setQuality($row->quality);
            $newCarv->setContent($row->content);
            $newCarv->setQuantity($row->quantity);
            $newCarv->setPrice($row->price);
            $newCarv->getCategory()->setId_cat($row->id_cat);
            $newCarv->getCategory()->setName_cat($row->name_cat);

            array_push($carvs, $newCarv);

        }
        return $carvs;
    }
}