<?php

class AdminCarvingController{

    private $adCrM;

    public function __construct()
    {
        $this->adCrM = new AdminCarvingModel();
        $this->adCatM = new AdminCategoryModel();
    }

    public function listCarving(){
        //AuthController::isLogged();//(2) Pour s'authentifier 
        //var_dump($_POST);
          if(isset($_POST['submit']) && !empty($_POST['search'])){
             
              $search = trim(htmlspecialchars(addslashes($_POST['search'])));
              $carvs = $this->adCrM->getCarving($search);
              
              require_once('./views/admin/carving/adminCarvingList.php');
    
          }else{
  
            $carvs = $this->adCrM->getCarving();
            
            require_once('./views/admin/carving/adminCarvingList.php');
          }
      }
    //___________________________________________________________//

      public function eraseCarving(){
        
        //AuthController::isLogged();//(2) Pour s'authentifier 
  
        //AuthController::accessUser();//(3)
        
        if(isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT)){//<1000 ne sert a rien sur ce coup la et dum trim
          
          $id = $_GET['id'];
          
          $carg = new Carving();
          $carg->setId_carv($id);
          
          $nbc = $this->adCrM->deleteCarving($carg);
  
            if($nbc > 0){
                    header('location:index.php?action=list_carv');
                }
         }
      }
    //___________________________________________________________//

    public function addCarving(){
        //AuthController::isLogged();//(2) Pour s'authentifier 
  
  
        if (isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['price'])){
  
            $name = trim(htmlentities(addslashes($_POST['name'])));
            $content = trim(htmlentities(addslashes($_POST['content'])));
            $crea_date = trim(htmlentities(addslashes($_POST['crea_date'])));
            $quantity = trim(htmlentities(addslashes($_POST['quantity'])));
            $price = trim(htmlentities(addslashes($_POST['price'])));
            $id_cat = trim(htmlentities(addslashes($_POST['cat'])));
            $image_f = $_FILES['image_f']['name'];
            $image_l = $_FILES['image_l']['name'];
            $image_r = $_FILES['image_r']['name'];

            $newC = new carving();
            $newC->setName($name);
            $newC->setContent($content);
            $newC->setCrea_date($crea_date);
            $newC->setQuantity($quantity);
            $newC->setPrice($price);
            $newC->getCategory()->setId_cat($id_cat);
            $newC->setPicture_f($image_f);
            $newC->setPicture_l($image_l);
            $newC->setPicture_r($image_r);

            
            $destination = './assets/images/';
            move_uploaded_file($_FILES['image_f']['tmp_name'],$destination.$image_f);
            move_uploaded_file($_FILES['image_l']['tmp_name'],$destination.$image_l);
            move_uploaded_file($_FILES['image_r']['tmp_name'],$destination.$image_r);

            
            $ok = $this->adCrM->PutCarving($newC);
            
            if($ok){
  
              header('location:index.php?action=list_carv');
            }
        }
        
        $tabCat = $this->adCatM->getCategories();
        
        require_once('./views/admin/carving/adminAddCarv.php');
  
      }
    //___________________________________________________________//

    public function editCarving(){
        //(2) Pour s'authentifier 
      
      if(isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT)){
          
          $id = $_GET['id'];
          
          $editC = new Carving();
          
          $editC->setId_carv($id);
          
          $editCar = $this->adCrM->collectCarv($editC);
          
         $tabCat = $this->adCatM->getCategories();
         
         if(isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['price'])){
             
             $name = trim(htmlentities(addslashes($_POST['name'])));
             $content = trim(htmlentities(addslashes($_POST['content'])));
             $crea_date = trim(htmlentities(addslashes($_POST['crea_date'])));
             $quantity = trim(htmlentities(addslashes($_POST['quantity'])));
             $price = trim(htmlentities(addslashes($_POST['price'])));
             $id_cat = trim(htmlentities(addslashes($_POST['cat'])));
             
             $image_f = $_FILES['picture_f']['name'];
             $image_l = $_FILES['picture_l']['name'];
             $image_r = $_FILES['picture_r']['name'];
             
             $editCar->setName($name);
             $editCar->setContent($content);
             $editCar->setCrea_date($crea_date);
             $editCar->setQuantity($quantity);
             $editCar->setPrice($price);
             $editCar->getCategory()->setId_cat($id_cat);
             $editCar->setPicture_f($image_f);
             $editCar->setPicture_l($image_l);
             $editCar->setPicture_r($image_r);

             
             $destination = './assets/images/';
            
             move_uploaded_file($_FILES['picture_f']['tmp_name'],$destination.$image_f);
             move_uploaded_file($_FILES['picture_l']['tmp_name'],$destination.$image_l);
             move_uploaded_file($_FILES['picture_r']['tmp_name'],$destination.$image_r);
             
             $ok = $this->adCrM->changeCarv($editCar); 
             
             
             header('location:index.php?action=list_carv');
              
          }
          require_once('./views/admin/carving/adminEditCarv.php');
      }
  }
  
}