<?php

class AdminPictureModel extends Tree{

    public function getPicture($search = null){

        if(!empty($search)){

            $sql = "SELECT *
                    
                    FROM picture p
                    INNER JOIN carving c
                    ON p.id_carv = c.id_carv
                    INNER JOIN category ca
                    ON ca.id_cat = c.id_cat

                    WHERE c.name LIKE :name OR c.price LIKE :price OR c.date LIKE :date
                    ORDER BY id_pic ASC";

            $searchPar = ["name"=>"$search%", "price"=>"$search%", "date"=>"$search%"];

            $result = $this->getRequest($sql, $searchPar);

    }else{

            $sql = "SELECT *
                    FROM picture p
                    INNER JOIN carving c
                    ON p.id_carv = c.id_carv
                    INNER JOIN category ca
                    ON ca.id_cat = c.id_cat
                    ORDER BY id_pic ASC";

            $result = $this->getRequest($sql);
    }
        
        $rows = $result->fetchAll(PDO::FETCH_OBJ);

        $tabPic = [];

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

            array_push($tabPic, $pic);
        }
            return $tabPic;
    } 
    //___________________________________________________________//
    
    public function deletePicture(Picture $wall){
        
        $sql = "DELETE FROM picture
                WHERE id_pic = :id";
        
        $result = $this->getRequest($sql, ['id'=>$wall->getId_pic()]);
        
        return $result->rowCount();
    }
    //___________________________________________________________//

    public function PutPicture(Picture $flash){

        $sql = "INSERT INTO picture(picture_l, picture_r, id_carv)
                VALUES(:picture_l, :picture_r, :id_carv)";
        
        $tabParam = [

            "picture_l"=>$flash->getPicture_l(),
            "picture_r"=>$flash->getPicture_r(),
            "id_carv"=>$flash->getCarving()->getId_carv()
                ];

        $result = $this->getRequest($sql, $tabParam);

        return $result;

    }
    //___________________________________________________________//

    public function collectPict(Picture $vParam){
       
        $sql = "SELECT *
                 FROM picture
                 WHERE id_pic = :id";
         
         $result = $this->getRequest($sql, ['id'=>$vParam->getId_pic()]);
 
         
         if($result->rowCount() > 0){
             
             $pictRow = $result->fetch(PDO::FETCH_OBJ);
             
             $editPic = new Picture();
             
             $editPic->setId_pic($pictRow->id_pic);
             $editPic->setPicture_l($pictRow->picture_l);
             $editPic->setPicture_r($pictRow->picture_r);
             $editPic->getCarving()->setId_carv($pictRow->id_carv);
             // $editCar->getCategory()->setName_cat($CarvRow->name_cat);
 
             return $editPic;
         }
     }
    
 
     public function changePict(Picture $upPic){
 
         if($upPic->getPicture_l() === "" ){
             
             $sql = "UPDATE picture
                     SET picture_r = :picture_r, id_carv = :id_carv
                     WHERE id_pic = :id_pic";
             
             $tabParams = [  
                             "picture_r"=>$upPic->getPicture_r(),
                             "id_carv"=>$upPic->getCarving()->getId_carv(), 
                             "id_pic"=>$upPic->getId_pic()
                         ];
         
             
         }else if($upPic->getPicture_r() === "" ){
                 
             $sql = "UPDATE picture
                     SET picture_l = :picture_l, id_carv = :id_carv
                     WHERE id_pic = :id_pic";
     
                     
             $tabParams = [
                            "picture_l"=>$upPic->getPicture_l(),
                            "id_carv"=>$upPic->getCarving()->getId_carv(), 
                            "id_pic"=>$upPic->getId_pic()
                         ];
             
        }else{

            $sql = "UPDATE picture
                    SET picture_l = :picture_l, picture_r = :picture_r, id_carv = :id_carv
                    WHERE id_pic = :id_pic";
        
            $tabParams = [  
                        "picture_l"=>$upPic->getPicture_l(),
                        "picture_r"=>$upPic->getPicture_r(),
                        "id_carv"=>$upPic->getCarving()->getId_carv(), 
                        "id_pic"=>$upPic->getId_pic()
                        ];
             }
 
                 $result = $this->getRequest($sql, $tabParams);
                 return $result->rowCount();
     }
}