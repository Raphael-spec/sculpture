<?php

session_start();
class AuthClientController{

    
    public static function isLogged(){
        if(!isset($_SESSION['AuthClient'])){
            
            header('location:index.php?action=loginClient');
            exit;
        }
    }
    //___________________________________________________________//

    public static function logout(){
       
        unset($_SESSION['AuthClient']);
       
        header('location:index.php?action=features');
    }


    
}