<?php

//session_start();
class AuthClientController{

    
    public static function isLogged(){
        if(!isset($_SESSION['AuthClient'])){
            
            header('location:index.php?action=log_cus');
            exit;
        }
    }
  //___________________________________________________________//
    public static function isLoggedForIndex(){
        if(!isset($_SESSION['AuthClient'])){
            
            // header('location:index.php?action=log_cus');
            //exit;
        }
    }
    //___________________________________________________________//

    public static function logoutClient(){
       
        unset($_SESSION['AuthClient']);
       
        header('location:index.php?action=features');
    }


    
}