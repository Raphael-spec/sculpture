<?php

class PublicClientController{

    private $adCusM;
    private $adShM;


    public function __construct()
    {
        $this->adCusM = new AdminCustomerModel();
        $this->adShM = new AdminShoppingModel();

    }

    public function registerClient(){

        if(isset ($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['login'])){
  
            if(filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL) && strlen($_POST['password']) >= 4){

                $name = trim(htmlentities(addslashes($_POST['name'])));
                $firstname = trim(htmlentities(addslashes($_POST['firstname'])));
                $address = (trim(htmlentities(addslashes($_POST['address']))));
                $cp = trim(htmlentities(addslashes($_POST['cp'])));
                $town = trim(htmlentities(addslashes($_POST['town'])));
                $country = trim(htmlentities(addslashes($_POST['country'])));
                $mail = trim(htmlentities(addslashes($_POST['mail'])));
                $phone = (trim(htmlentities(addslashes($_POST['phone']))));
                $login = trim(htmlentities(addslashes($_POST['login'])));
                $password = md5(trim(htmlentities(addslashes($_POST['password']))));

            $client = new Customer();

                $client->setName($name);
                $client->setFirstname($firstname);
                $client->setAddress($address);
                $client->setCp($cp);
                $client->setTown($town);
                $client->setCountry($country);
                $client->setMail($mail);
                $client->setPhone($phone);
                $client->setLogin($login);
                $client->setPassword($password);

            $yes = $this->adCusM->PutClient($client);
                if($yes){
                    
                    header('location:index.php?action=log_cus');
                }
            }
        }

        require_once('./views/public/connexClient/registerClient.php');
    }
    //___________________________________________________________//

    public function loginClient(){


        if(isset($_POST['submit'])){
            //var_dump($_POST);
            if(strlen($_POST['password']) >= 4 && !empty($_POST['loginMail'])){
    
                $loginMail = trim(htmlentities(addslashes($_POST['loginMail'])));
                $password = md5(trim(htmlentities(addslashes($_POST['password']))));
    
                $logCusto = $this->adCusM->signInClient($loginMail, $password);
                    
                    if(!empty($logCusto)){
                            
                            session_start();
                            $_SESSION['AuthClient'] = $logCusto;
                            //var_dump($_SESSION);
                            
                            header('location:index.php?action=features');
                    }else{
                        
                        $error = "Your login/mail or/and password does/do not match"; 
                    }
            }else{
                $error = "Please enter valids datas"; 
            }
        }
        require_once('./views/public/connexClient/loginClient.php');
    }
    //___________________________________________________________//

    public function profilClient(){

        AuthController::isLoggedCustomer();
           
            $id = $_SESSION['AuthClient']->id_c;
                       
            $editCu = new Customer();
            
            $editCu->setId_c($id);
            
            $editClie = $this->adCusM->collectClient($editCu);
            
            $valid = "";
         
            if(isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['password'])){
               
               $name = trim(htmlentities(addslashes($_POST['name'])));
               $firstname = trim(htmlentities(addslashes($_POST['firstname'])));
               $address = trim(htmlentities(addslashes($_POST['address'])));
               $cp = trim(htmlentities(addslashes($_POST['cp'])));
               $town = trim(htmlentities(addslashes($_POST['town'])));
               $country = trim(htmlentities(addslashes($_POST['country'])));
               $mail = trim(htmlentities(addslashes($_POST['mail'])));
               $phone = trim(htmlentities(addslashes($_POST['phone'])));
               $login = trim(htmlentities(addslashes($_POST['login'])));
               $password = md5(trim(htmlentities(addslashes($_POST['password']))));

               $editClie->setname($name);
               $editClie->setFirstname($firstname);
               $editClie->setAddress($address);
               $editClie->setCp($cp);
               $editClie->setTown($town);
               $editClie->setCountry($country);
               $editClie->setMail($mail);
               $editClie->setPhone($phone);
               $editClie->setLogin($login);
               $editClie->setPassword($password);
               
               $ok = $this->adCusM->changeClient($editClie); 
               
               
                if($ok){
                    $valid = "Your new profil has been modified"; 
                    
                    header('location:index.php?action=profil_cus');
                }else{
                    
                    $valid = "Your profil hasn't been modified";  
                }
                
         }

         $order = new Shopping();
         $order->getCustomer()->setId_c($id);

         $orders = $this->adShM->SelectShoppingClient($order);


            require_once('./views/public/connexClient/profilClient.php');
        
    }



    
}