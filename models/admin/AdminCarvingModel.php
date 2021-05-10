<?php

class AdminCarvingModel extends Tree{

    public function getCarving($search = null){

        if(!empty($search)){
            
                $sql = "SELECT *
                        FROM carving cv
                        INNER JOIN category ca
                        ON cv.id_cat = ca.id_cat
                        WHERE name LIKE :name OR name_cat LIKE :name_cat OR date LIKE :date
                        ORDER BY id_carv ASC";
            
            $searchPar = ["name"=>"$search%", "name_cat"=>"$search%", "date"=>"$search%"];
            
            $result = $this->getRequest($sql, $searchPar);
            //$carvings = $result->fetchAll(PDO::FETCH_OBJ);

        }else{

            $sql = "SELECT *
                    FROM carving cv
                    INNER JOIN category ca
                    ON cv.id_cat = ca.id_cat
                    ORDER BY id_carv ASC";
                    

                $result = $this->getRequest($sql);
        }
        
        $carvings = $result->fetchAll(PDO::FETCH_OBJ);

        $datas = [];

        foreach ($carvings as $carv) {

            $c = new Carving();
            $c->setId_carv($carv->id_carv);
            $c->setName($carv->name);
            $c->setPicture($carv->picture);
            $c->setDimension($carv->dimension);
            $c->setDate($carv->date);
            $c->setQuality($carv->quality);
            $c->setContent($carv->content);
            $c->setQuantity($carv->quantity);
            $c->setPrice($carv->price);
            $c->getCategory()->setId_cat($carv->id_cat);
            $c->getCategory()->setName_cat($carv->name_cat);
            
            array_push($datas, $c);
        }
        
        if($result->rowCount() > 0){
            
            return $datas;
        }else{
            
            return "No Carvings...";
        }
    }
    //___________________________________________________________//

    public function deleteCarving(Carving $carv){
        
        $sql = "DELETE FROM carving
                WHERE id_carv = :id";
        
        $result = $this->getRequest($sql, ['id'=>$carv->getId_carv()]);
        
        return $result->rowCount();
    }
    //___________________________________________________________//
    
    public function PutCarving(Carving $carvi){

        $sql = "INSERT INTO carving(name, picture, dimension, date, quality, content, quantity, price, id_cat)
                VALUES(:name, :picture, :dimension, :date, :quality, :content, :quantity, :price, :id_cat)";
        
        $tabParam = [

            "name"=>$carvi->getName(),
            "picture"=>$carvi->getPicture(),
            "dimension"=>$carvi->getDimension(),
            "date"=>$carvi->getDate(),
            "quality"=>$carvi->getQuality(),
            "content"=>$carvi->getContent(),
            "quantity"=>$carvi->getQuantity(),
            "price"=>$carvi->getPrice(),
            "id_cat"=>$carvi->getCategory()->getId_cat()
                ];

        $result = $this->getRequest($sql, $tabParam);

        return $result;

    }
    //___________________________________________________________//

    public function collectCarv(Carving $vParam){
       
       $sql = "SELECT *
                FROM carving
                WHERE id_carv = :id";
        
        $result = $this->getRequest($sql, ['id'=>$vParam->getId_carv()]);

        
        if($result->rowCount() > 0){
            
            $carvRow = $result->fetch(PDO::FETCH_OBJ);
            
            $editCar = new Carving();
            
            $editCar->setId_carv($carvRow->id_carv);
            $editCar->setName($carvRow->name);
            $editCar->setPicture($carvRow->picture);
            $editCar->setDimension($carvRow->dimension);
            $editCar->setDate($carvRow->date);
            $editCar->setQuality($carvRow->quality);
            $editCar->setContent($carvRow->content);
            $editCar->setQuantity($carvRow->quantity);
            $editCar->setPrice($carvRow->price);
            $editCar->getCategory()->setId_cat($carvRow->id_cat);
            // $editCar->getCategory()->setName_cat($CarvRow->name_cat);

            return $editCar;
        }
    }
   

    public function changeCarv(Carving $upCar){

        if($upCar->getPicture() === "" ){
            
            $sql = "UPDATE carving
                    SET name = :name, dimension = :dimension, date = :date, quality = :quality, content = :content, quantity = :quantity, price = :price, id_cat = :id_cat
                    WHERE id_carv = :id_carv";
            
            $tabParams = [  
                            "name"=>$upCar->getName(),
                            "dimension"=>$upCar->getDimension(),
                            "date"=>$upCar->getDate(),
                            "quality"=>$upCar->getQuality(), 
                            "content"=>$upCar->getContent(), 
                            "quantity"=>$upCar->getQuantity(), 
                            "price"=>$upCar->getPrice(), 
                            "id_cat"=>$upCar->getCategory()->getId_cat(), 
                            "id_carv"=>$upCar->getId_carv()
                        ];
        
            
        }else{
                
            $sql = "UPDATE carving
                    SET name = :name, picture = :picture, dimension = :dimension, date = :date, quality = :quality, content = :content, quantity = :quantity, price = :price, id_cat = :id_cat
                    WHERE id_carv = :id_carv";
    
                    
            $tabParams = [
                            "name"=>$upCar->getName(),
                            "picture"=>$upCar->getPicture(), 
                            "dimension"=>$upCar->getDimension(),
                            "date"=>$upCar->getDate(),
                            "quality"=>$upCar->getQuality(), 
                            "content"=>$upCar->getContent(), 
                            "quantity"=>$upCar->getQuantity(), 
                            "price"=>$upCar->getPrice(),
                            "id_cat"=>$upCar->getCategory()->getId_cat(), 
                            "id_carv"=>$upCar->getId_carv()
                        ];
            
            }

                $result = $this->getRequest($sql, $tabParams);
                return $result->rowCount();
    }
}