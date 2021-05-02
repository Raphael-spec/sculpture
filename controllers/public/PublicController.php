<?php

//session_start();

class PublicController{

    private $pubCatM;
    private $pubCarM;
    private $pubMo;

    public function __construct()
    {
        $this->pubCatM = new AdminCategoryModel();
        $this->pubCarM = new AdminCarvingModel();
        $this->pubMo = new PublicModel();
    }
    
    public function getPubCarving(){
        
        if(isset($_GET['id']) && !empty($_GET['id'])){
            
            if( isset($_POST['submit']) && !empty($_POST['search'])){
                
                $search = trim(htmlspecialchars(addslashes($_POST['search'])));
                
                $tabCat = $this->pubCatM->getCategories();
                $carvs = $this->pubCarM->getCarving($search);
                
                require_once('./views/public/features.php');
            }
            
            $id = trim(htmlentities(addslashes($_GET['id'])));
            
            $c = new Carving();
            
            $c->getCategory()->setId_cat($id);
            
            $tabCat = $this->pubCatM->getCategories();
            $carvsbyCat = $this->pubMo->findCarvByCat($c);
            
            require_once('./views/public/carvingCat.php');
      
        }else{
            
            if( isset($_POST['submit']) && !empty($_POST['search'])){
                $search = trim(htmlspecialchars(addslashes($_POST['search'])));
                
                $tabCat = $this->pubCatM->getCategories();
                $carvs = $this->pubCarM->getCarving($search);
                
                require_once('./views/public/features.php');
            }
            
            $tabCat = $this->pubCatM->getCategories();
            $carvs = $this->pubCarM->getCarving();

        require_once('./views/public/features.php');
        }
    }
    //___________________________________________________________//

    public function bringBack(){
        
        if(isset($_POST['pass_to']) && !empty($_POST['name']) && !empty($_POST['price'])){
            
            $id = htmlspecialchars(addslashes($_POST['id_carv']));
            $name = htmlspecialchars(addslashes($_POST['name']));
            $picture = htmlspecialchars(addslashes($_POST['picture']));
            $dimension = htmlspecialchars(addslashes($_POST['dime']));
            $date = htmlspecialchars(addslashes($_POST['date']));
            $quality = htmlspecialchars(addslashes($_POST['qual']));
            $content = htmlspecialchars(addslashes($_POST['content']));
            $quantity = htmlspecialchars(addslashes($_POST['quant']));
            $price = htmlspecialchars(addslashes($_POST['price']));
            $id_cat = htmlspecialchars(addslashes($_POST['id_cat']));
            $name_cat = htmlspecialchars(addslashes($_POST['name_cat']));


            require_once('./views/public/carvingItem.php');

        }
    }
    //___________________________________________________________//

    public function contact(){

        require_once('./views/public/contact.php');

    }
    //___________________________________________________________//
    
    public function about(){

        require_once('./views/public/about.php');

    }
}