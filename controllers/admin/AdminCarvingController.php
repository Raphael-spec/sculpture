<?php

class AdminCarvingController{

    private $adCrM;

    public function __construct()
    {
        $this->adCrM = new AdminCarvingModel();
        $this->adCatM = new AdminCategoryModel();
    }

    public function listCarving(){
        AuthController::isLogged();
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
        AuthController::isLogged();
            AuthController::accessUser();
        
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
        AuthController::isLogged();
  
  
        if (isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['price'])){
  
            $name = trim(htmlentities(addslashes($_POST['name'])));
            $dime = trim(htmlentities(addslashes($_POST['dime'])));
            $date = trim(htmlentities(addslashes($_POST['date'])));
            $quality = trim(htmlentities(addslashes($_POST['qual'])));
            $content = trim(htmlentities(addslashes($_POST['content'])));
            $quantity = trim(htmlentities(addslashes($_POST['quantity'])));
            $price = trim(htmlentities(addslashes($_POST['price'])));
            $id_cat = trim(htmlentities(addslashes($_POST['cat'])));
            $image = $_FILES['image']['name'];

            $newC = new carving();
            
            $newC->setName($name);
            $newC->setDimension($dime);
            $newC->setDate($date);
            $newC->setQuality($quality);
            $newC->setContent($content);
            $newC->setQuantity($quantity);
            $newC->setPrice($price);
            $newC->getCategory()->setId_cat($id_cat);
            $newC->setPicture($image);

            
            $destination = './assets/images/';
            move_uploaded_file($_FILES['image']['tmp_name'],$destination.$image);

            
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
      AuthController::isLogged();
      
      if(isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT)){
          
          $id = $_GET['id'];
          
          $editC = new Carving();
          $editC->setId_carv($id);
          
          $editCar = $this->adCrM->collectCarv($editC);
          
         $tabCat = $this->adCatM->getCategories();
         
         if(isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['price'])){
             
             $name = trim(htmlentities(addslashes($_POST['name'])));
             $dime = trim(htmlentities(addslashes($_POST['dime'])));
             $date = trim(htmlentities(addslashes($_POST['date'])));
             $quality = trim(htmlentities(addslashes($_POST['qual'])));
             $content = trim(htmlentities(addslashes($_POST['content'])));
             $quantity = trim(htmlentities(addslashes($_POST['quantity'])));
             $price = trim(htmlentities(addslashes($_POST['price'])));
             $id_cat = trim(htmlentities(addslashes($_POST['cat'])));
             $image = $_FILES['image']['name'];
             
             $editCar->setName($name);
             $editCar->setDimension($dime);
             $editCar->setDate($date);
             $editCar->setQuality($quality);
             $editCar->setContent($content);
             $editCar->setQuantity($quantity);
             $editCar->setPrice($price);
             $editCar->getCategory()->setId_cat($id_cat);
             $editCar->setPicture($image);
           
             
             $destination = './assets/images/';
            
             move_uploaded_file($_FILES['image']['tmp_name'],$destination.$image);
             
             $ok = $this->adCrM->changeCarv($editCar); 
             
             
             header('location:index.php?action=list_carv');
              
          }
          require_once('./views/admin/carving/adminEditCarv.php');
      }
  }
  
}