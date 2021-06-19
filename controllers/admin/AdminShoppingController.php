<?php

class AdminShoppingController{

    private $adShM;
    // private $adCatM;

    public function __construct()
    {
        $this->adShM = new AdminShoppingModel();
    }


  public function ShoppingInsert(){

    //AuthController::isLogged();
        
        session_start();

        //var_dump($_SESSION);
        $client = $_SESSION['AuthClient']->id_c;


        $newS = new Shopping();
        $newS->getCustomer()->setId_c($client);
       
        $ok = $this->adShM->InsertShop($newS);
        
        if($ok){
          header('location:index.php?action=success');
        }
  }
   //___________________________________________________________//

  public function shoppingAdmin(){
      AuthController::accessUser();

        $result = $this->adShM->SelectShoppingTrois();
       // var_dump($result);
        require_once("./views/admin/shopping/adminShoppingList.php");

  }
   //___________________________________________________________//
 
   public function shoppingAdminDelete(){

    AuthController::isLogged();
       AuthController::accessUser();
   
       if(isset($_GET['id']) && $_GET['id'] < 1000 && filter_var($_GET['id'], FILTER_VALIDATE_INT)){
       $id = trim($_GET['id']);
       $shop = new Shopping();
       $shop->setId_shop($id);
       
       $nbLine = $this->adShM->deleteShopping($shop);
       if($nbLine > 0){
           header('location:index.php?action=shop_sadmin');
       }
   }


  }

  




}