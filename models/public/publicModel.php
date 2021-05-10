<?php

class PublicModel extends Tree{

    public function findCarvByCat(Picture $pic){

        $sql = "SELECT * 
                FROM picture p
                INNER JOIN carving c
                ON p.id_carv = c.id_carv
                INNER JOIN category ca
                ON ca.id_cat = c.id_cat
                WHERE ca.id_cat = :id";

        
        $result = $this->getRequest($sql, ["id"=>$pic->getCarving()->getCategory()->getId_cat()]);

        $rows = $result->fetchAll(PDO::FETCH_OBJ);
        
        $carvs = [];
        
        foreach($rows as $row){

            $pic = new Picture();

            $pic->setId_pic($row->id_pic);
            $pic->setPicture_l($row->picture_l);
            $pic->setPicture_r($row->picture_r);
            $pic->getCarving()->setId_carv($row->id_carv);
            $pic->getCarving()->setName($row->name);
            $pic->getCarving()->setPicture($row->picture);
            $pic->getCarving()->setDimension($row->dimension);
            $pic->getCarving()->setDate($row->date);
            $pic->getCarving()->setQuality($row->quality);
            $pic->getCarving()->setContent($row->content);
            $pic->getCarving()->setQuantity($row->quantity);
            $pic->getCarving()->setPrice($row->price);
            $pic->getCarving()->getCategory()->setName_cat($row->name_cat);
            $pic->getCarving()->getCategory()->setId_cat($row->id_cat);


            array_push($carvs, $pic);

        }
        return $carvs;
    }
}