<?php

class PublicClientController{

    private $adCusM;

    public function __construct()
    {
        $this->adCusM = new AdminCustomerModel();
    }

    public function RegisterClient(){

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
                    
                    header('location:index.php?action=loginClient');
                }
            }
        }

        require_once('./views/public/connexClient/registerClient.php');
    }
    //___________________________________________________________//

    public function loginClient(){


        if(isset($_POST['submit'])){
            //var_dump($_POST);
            if(strlen($_POST['password']) >= 4 && !empty($_POST['loginEmail'])){
    
                $loginEmail = trim(htmlentities(addslashes($_POST['loginEmail'])));
                $password = md5(trim(htmlentities(addslashes($_POST['password']))));
    
                $logCusto = $this->adCusM->signInClient($loginEmail, $password);
                    
                    if(!empty($logCusto)){
                            
                            session_start();
                            $_SESSION['AuthClient'] = $logCusto;
                            //var_dump($_SESSION);
                            
                            header('location:index.php?action=profilClient');
                    }else{
                        $error = "Votre login/email ou/et mot de passe ne corespondent pas"; 
                    }
            }else{
                $error = "Entrée les données valides"; 
            }
        }
        require_once('./views/public/connexClient/loginClient.php');
    }
}