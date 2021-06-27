<?php



class AuthController{

    public static function isLogged(){
        
        if(!isset($_SESSION['Auth'])){
            
            header('location:index.php?action=login');
            exit;
        }
    }
    //___________________________________________________________//

    public static function logout(){
        
        unset($_SESSION['Auth']);
        
        header('location:index.php?action=login');
    }
    //___________________________________________________________//

    public static function logoutAndFeatures(){
        
        unset($_SESSION['Auth']);
        
        header('location:index.php?action=features');
    }
    //___________________________________________________________//
    
    public static function accessUser(){
        
        if($_SESSION['Auth']->id_g == 3){
            
            header('location:index.php?action=login');
            exit; 
        }
    }
    //___________________________________________________________//

    public static function accessManager(){
        
        if($_SESSION['Auth']->id_g == 2){
            
            header('location:index.php?action=login');
            exit; 
        }
    }
    //////////////////////////////AUTH_CUSTOMER/////////////////////////////
    
    public static function isLoggedCustomer(){
        if(!isset($_SESSION['AuthClient'])){
            
            header('location:index.php?action=features');
            exit;
        }
    }
    //___________________________________________________________//

    public static function logoutClient(){
       
        unset($_SESSION['AuthClient']);
       
        header('location:index.php?action=features');
    }
}