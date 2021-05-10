<?php

class AdminPictureController{

    private $adPicM;
    private $adCrM;

    public function __construct()
    {
        $this->adPicM = new AdminPictureModel();
        $this->adCrM = new AdminCarvingModel();    
    }
    //___________________________________________________________//

    public function listPictures(){
        AuthController::isLogged();

        if(isset($_POST['submit']) && !empty($_POST['search'])){

            $search = trim(htmlspecialchars(addslashes($_POST['search'])));
            $allPic = $this->adPicM->getPicture($search);

        require_once('./views/admin/pictures/adminPicturesList.php');
        }else{
            
            $allPic = $this->adPicM->getPicture();
            require_once('./views/admin/pictures/adminPicturesList.php');

        }
    }
    //___________________________________________________________//

    public function erasePicture(){
        AuthController::isLogged();
            AuthController::accessUser();
        
        if(isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT)){//<1000 ne sert a rien sur ce coup la et dum trim
          
          $id = $_GET['id'];
          
          $foto = new Picture();
          $foto->setId_pic($id);
          
          $nbc = $this->adPicM->deletePicture($foto);
  
            if($nbc > 0){
                    header('location:index.php?action=list_pic');
                }
         }
      }
    //___________________________________________________________//

    public function addPicture(){
        AuthController::isLogged();
  
  
        if (isset($_POST['submit']) && !empty($_POST['id_carv'])){
  
            $id_carv = trim(htmlentities(addslashes($_POST['id_carv'])));
            $picture_l = $_FILES['picture_l']['name'];
            $picture_r = $_FILES['picture_r']['name'];

            $newP = new picture();
            
            
            $newP->getCarving()->setId_carv($id_carv);
            $newP->setPicture_l( $picture_l);
            $newP->setPicture_r( $picture_r);

            
            $destination = './assets/images/';
            move_uploaded_file($_FILES['picture_l']['tmp_name'],$destination.$picture_l);
            move_uploaded_file($_FILES['picture_r']['tmp_name'],$destination.$picture_r);


            
            $ok = $this->adPicM->PutPicture($newP);
            
            if($ok){
  
              header('location:index.php?action=list_pic');
            }
        }
        
        $datas = $this->adCrM->getCarving();
        
        require_once('./views/admin/pictures/adminAddPict.php');
  
      }
    //___________________________________________________________//

    public function editPicture(){
        AuthController::isLogged();
        
        if(isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT)){
            
            $id = $_GET['id'];
            
            $editP = new Picture();
            $editP->setId_pic($id);
            
            $editPic = $this->adPicM->collectPict($editP);
            
            $datas = $this->adCrM->getCarving();
           
           if(isset($_POST['submit']) && !empty($_POST['id_carv'])){
               
               $id_carv = trim(htmlentities(addslashes($_POST['id_carv'])));
               $picture_l = $_FILES['picture_l']['name'];
               $picture_r = $_FILES['picture_r']['name'];
               
               
               $editPic->getCarving()->setId_carv($id_carv);
               $editPic->setPicture_l($picture_l);
               $editPic->setPicture_r($picture_r);

             
               
               $destination = './assets/images/';
              
               move_uploaded_file($_FILES['picture_l']['tmp_name'],$destination.$picture_l);
               move_uploaded_file($_FILES['picture_r']['tmp_name'],$destination.$picture_r);

               
               $ok = $this->adPicM->changePict($editPic); 
               
               
               header('location:index.php?action=list_pic');
                
            }
            require_once('./views/admin/pictures/adminEditPict.php');
        }
    }
}