<?php

// require_once('../Category.php');
// require_once('../Tree.php');

class AdminCategoryModel extends Tree{

    public function getCategories(){

        $sql = "SELECT *
                FROM category";
                
        $result = $this->getRequest($sql);

        $rows = $result->fetchAll(PDO::FETCH_OBJ);

        $tabCat = [];

        foreach($rows as $row){

            $cat = new Category();

            $cat->setId_cat($row->id_cat);
            $cat->setName_cat($row->name_cat);
            $cat->setPicture_cat($row->picture_cat);
            
            array_push($tabCat, $cat);
        }
            return $tabCat;

    }
    //___________________________________________________________//

    public function deleteCat($id){
        
        $sql = "DELETE FROM category
                WHERE id_cat = :id";
        
        $result = $this->getRequest($sql, ['id'=>$id]);
        
        $line = $result->rowCount();
        
        return $line;
    }

    //___________________________________________________________//

    public function putCategory(Category $cat){
        
        $sql = "INSERT INTO category(name_cat, picture_cat)
                VALUES(:name, :picture_cat)";

            $tabParam = [

                "name"=>$cat->getName_cat(),
                "picture_cat"=>$cat->getPicture_cat()
               
                    ];
        
        
        $result = $this->getRequest($sql,$tabParam);

        return $result;

    }
    //___________________________________________________________//

    public function collectCategory(Category $paraCat){
        
        $sql = "SELECT *
                FROM category
                WHERE id_cat = :id";
       
       $result = $this->getRequest($sql,['id'=>$paraCat->getId_cat()]);
        
       if($result->rowCount() > 0){

            $row = $result->fetch(PDO::FETCH_OBJ);
            
            $cat = new Category();
           
            $cat->setId_cat($row->id_cat);
            $cat->setName_cat($row->name_cat);
            $cat->setPicture_cat($row->picture_cat);

            return $cat;

        }
    }

    public function changeCategory(Category $cat){ 
        
      

    if($cat->getPicture_cat() === "" ){
            
        $sql = "UPDATE category
                SET name_cat = :name_cat
                WHERE id_cat = :id_cat";
        
        $tabParams = [  
                        "name_cat"=>$cat->getName_cat(),
                        "id_cat"=>$cat->getId_cat() 
                    ];
    
        
    }else{
            
            $sql = "UPDATE category
                    SET name_cat = :name_cat, picture_cat = :picture_cat
                    WHERE id_cat = :id_cat";

                    
            $tabParams = [
                            "name_cat"=>$cat->getName_cat(),
                            "picture_cat"=>$cat->getPicture_cat(),
                            "id_cat"=>$cat->getId_cat() 
                        ];
        
        }

        $result = $this->getRequest($sql, $tabParams);
                return $result->rowCount();
     
    }           
}