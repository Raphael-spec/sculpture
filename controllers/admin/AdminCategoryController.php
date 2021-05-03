<?php

// require_once('../../models/Tree.php');
// require_once('../../models/Category.php');
// require_once('../../models/admin/AdminCategoryModel.php');

class AdminCategoryController{

    private $adCatM;

    public function __construct()
    {
        $this->adCatM = new AdminCategoryModel();
    }
    //___________________________________________________________//

    public function listCategories(){
        AuthController::isLogged();
        
        $allCat = $this->adCatM->getCategories();
        
        require_once('./views/admin/categories/adminCategoriesList.php');
    }

    //___________________________________________________________//

    public function eraseCat(){
        AuthController::isLogged();
            AuthController::accessUser();

        if(isset($_GET['id']) && $_GET['id'] < 1000 && filter_var($_GET['id'], FILTER_VALIDATE_INT)){
            $id = trim($_GET['id']);
            
            $nbLine = $this->adCatM->deleteCat($id);

            if($nbLine > 0){
                    
                header('location:index.php?action=list_cat');
            }
        }
    }

     //___________________________________________________________//

     public function addCat(){
        AuthController::isLogged();

        if(isset ($_POST['submit']) && !empty($_POST['category'])){
            
            $name_cat = trim(htmlentities(addslashes($_POST['category'])));
            $picture = $_FILES['picture']['name'];
            
            $newCat = new Category();
            
            $newCat->setName_cat($name_cat);
            $newCat->setPicture_cat($picture);

            $destination = './assets/images/';
            move_uploaded_file($_FILES['picture']['tmp_name'],$destination.$picture);


            $ok = $this->adCatM->putCategory($newCat);
            
            if($ok){
                
                header('location:index.php?action=list_cat');
            }
        }
        require_once('./views/admin/categories/adminAddCat.php');
    }

    //___________________________________________________________//

    public function editCat(){
        AuthController::isLogged();

       if(isset($_GET['id']) && $_GET['id'] < 1000 && filter_var($_GET['id'], FILTER_VALIDATE_INT)){
       
            $id = trim($_GET['id']);

            $editC = new Category();
            $editC->setId_cat($id);
        
            $editCat = $this->adCatM->collectCategory($editC);

                if(isset($_POST['submit']) && !empty($_POST['category'])){
                    
                    $category = trim(addslashes(htmlentities($_POST['category'])));
                    $picture = $_FILES['picture']['name'];

                        $editCat->setName_cat($category);
                        $editCat->setPicture_cat($picture);

                        $destination = './assets/images/';
            
                        move_uploaded_file($_FILES['picture']['tmp_name'],$destination.$picture);
           
                        
                        $ke = $this->adCatM->changeCategory($editCat);
                                        
                        header('location:index.php?action=list_cat');
                        
                }

       require_once('./views/admin/categories/adminEditCat.php');
       }

    }

}