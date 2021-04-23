<?php

class AdminCarvingModel extends Tree{

    public function getCarving($search = null){

        if(!empty($search)){
            
                $sql = "SELECT *
                        FROM carving cv
                        INNER JOIN category ca
                        ON cv.id_cat = ca.id_cat
                        WHERE name LIKE :name OR name_cat LIKE :name_cat OR crea_date LIKE :crea_date
                        ORDER BY id_carv ASC";
            
            $searchPar = ["name"=>"$search%", "name_cat"=>"$search%", "crea_date"=>"$search%"];
            
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
            $c->setContent($carv->content);
            $c->setCrea_date($carv->crea_date);
            $c->setPicture_f($carv->picture_f);
            $c->setPicture_l($carv->picture_l);
            $c->setPicture_r($carv->picture_r);
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

        $sql = "INSERT INTO carving(name, content, crea_date, picture_f, picture_l, picture_r, quantity, price, id_cat)
                VALUES(:name, :content, :crea_date, :picture_f, :picture_l, :picture_r, :quantity, :price, :id_cat)";
        
        $tabParam = [

            "name"=>$carvi->getName(),
            "content"=>$carvi->getContent(),
            "crea_date"=>$carvi->getCrea_date(),
            "picture_f"=>$carvi->getPicture_f(),
            "picture_l"=>$carvi->getPicture_l(),
            "picture_r"=>$carvi->getPicture_r(),
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
            $editCar->setContent($carvRow->content);
            $editCar->setCrea_date($carvRow->crea_date);
            $editCar->setQuantity($carvRow->quantity);
            $editCar->setPrice($carvRow->price);
            $editCar->setPicture_f($carvRow->picture_f);
            $editCar->setPicture_l($carvRow->picture_l);
            $editCar->setPicture_r($carvRow->picture_r);
            $editCar->getCategory()->setId_cat($carvRow->id_cat);
            // $editCar->getCategory()->setName_cat($CarvRow->name_cat);

            return $editCar;
        }
    }
   

    public function changeCarv(Carving $upCar){

        if($upCar->getPicture_f() === "" || $upCar->getPicture_l() === "" || $upCar->getPicture_r() === "" ){
            
            $sql = "UPDATE carving
                    SET name = :name, content = :content, crea_date = :crea_date, quantity = :quantity, price = :price, id_cat = :id_cat
                    WHERE id_carv = :id_carv";
            
            $tabParams = [  "name"=>$upCar->getName(),
                            "content"=>$upCar->getContent(), 
                            "crea_date"=>$upCar->getCrea_date(), 
                            "quantity"=>$upCar->getQuantity(), 
                            "price"=>$upCar->getPrice(), 
                            "id_cat"=>$upCar->getCategory()->getId_cat(), 
                            "id_carv"=>$upCar->getId_carv()
                        ];
        }else{
        
            $sql = "UPDATE carving
                    SET name = :name, content = :content, crea_date = :crea_date, picture_f = :picture_f, picture_l = :picture_l, picture_r = :picture_r, quantity = :quantity, price = :price, id_cat = :id_cat
                    WHERE id_carv = :id_carv";
                        
                $tabParams = [
                                "name"=>$upCar->getName(),
                                "content"=>$upCar->getContent(), 
                                "crea_date"=>$upCar->getCrea_date(), 
                                "picture_f"=>$upCar->getPicture_f(), 
                                "picture_l"=>$upCar->getPicture_l(), 
                                "picture_r"=>$upCar->getPicture_r(), 
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