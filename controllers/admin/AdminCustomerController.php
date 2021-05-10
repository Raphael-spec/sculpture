<?php

class AdminCustomerController{

    private $adCusM;

    public function __construct()
    {
        $this->adCusM = new AdminCustomerModel();
    }


    public function listClients(){
        AuthController::isLogged();

        if(isset($_POST['submit']) && !empty($_POST['search'])){
           
            $search = trim(htmlspecialchars(addslashes($_POST['search'])));   
            $allCus = $this->adCusM->getCustomers($search);
          
            require_once('./views/admin/customers/adminCustomersList.php');
  
      }else{
         
        $allCus = $this->adCusM->getCustomers();

        require_once('./views/admin/customers/adminCustomersList.php');

      }
    }
    //___________________________________________________________//

    public function eraseClient(){
        AuthController::isLogged();
            AuthController::accessManager();
                AuthController::accessUser();
  
  
          if(isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT)){
              
                $id = trim(htmlspecialchars(addslashes($_GET['id'])));
  
              $nbLine = $this->adCusM->deleteClient($id);
  
              if($nbLine > 0){
                     
                    header('location:index.php?action=list_cus');
                  }
          }
      }
    //___________________________________________________________//

    public function addClient(){
        AuthController::isLogged();
            AuthController::accessUser();
  
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
                      header('location:index.php?action=list_cus');
                  }
              }
          }
  
          require_once('./views/admin/customers/adminAddCust.php');
      }
    //___________________________________________________________//


      public function editClient(){
        AuthController::isLogged();
            AuthController::accessUser();

        if(isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT)){
            
            $id = trim(htmlspecialchars(addslashes($_GET['id'])));
           
            $editCu = new Customer();
            
            $editCu->setId_c($id);
            
            $editClie = $this->adCusM->collectClient($editCu);
            
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
      
                header('location:index.php?action=list_cus');
                
         }


            require_once('./views/admin/customers/adminEditCus.php');
        }
    }

}