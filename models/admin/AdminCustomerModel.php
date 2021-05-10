<?php

class AdminCustomerModel extends Tree{

    public function getCustomers($search = null){

        if(!empty($search)){

                $sql = "SELECT *
                        FROM customer
                        WHERE name LIKE :name OR phone LIKE :phone OR mail LIKE :mail
                        ORDER BY id_c";

                $searchPar = ["name"=>"$search%", "phone"=>"$search%", "mail"=>"$search%"];
       
                $result = $this->getRequest($sql, $searchPar);

        }else{

                $sql = "SELECT *
                        FROM customer
                        ORDER BY id_c";

                $result = $this->getRequest($sql);

        }
        
        $rows = $result->fetchAll(PDO::FETCH_OBJ);

        $tabCus = [];

            foreach($rows as $row){

                $cus = new Customer();

                $cus->setId_c($row->id_c);
                $cus->setName($row->name);
                $cus->setFirstname($row->firstname);
                $cus->setAddress($row->address);
                $cus->setCp($row->cp);
                $cus->setTown($row->town);
                $cus->setCountry($row->country);
                $cus->setMail($row->mail);
                $cus->setPhone($row->phone);
                $cus->setLogin($row->login);
                $cus->setPassword($row->password);
            
                array_push($tabCus, $cus);
        }
        
        if($result->rowCount() > 0){
            
            return $tabCus;
        }else{
            
            return "No informations about this client...";
        }
    }   
    //___________________________________________________________//

    public function deleteClient($id){

        $sql = "DELETE FROM customer
                WHERE id_c = :id";
        
        $result = $this->getRequest($sql,['id'=> $id]);
    
        $nb = $result->rowCount();
            
            return $nb;
    }
    //___________________________________________________________//

    public function PutClient(Customer $cli){

        $sql = "INSERT INTO customer(name, firstname, address, cp, town, country, mail, phone, login, password)
                VALUES(:name, :firstname, :address, :cp, :town, :country, :mail, :phone, :login, :password)";
        
        $tabParame = [
    
                    "name"=>$cli->getName(),
                    "firstname"=>$cli->getFirstname(),
                    "address"=>$cli->getAddress(),
                    "cp"=>$cli->getCp(),
                    "town"=>$cli->getTown(),
                    "country"=>$cli->getCountry(),
                    "mail"=>$cli->getMail(),
                    "phone"=>$cli->getPhone(),
                    "login"=>$cli->getLogin(),
                    "password"=>$cli->getPassword()
    
                    ];
            
    
        $result = $this->getRequest($sql, $tabParame);
    
        return $result;
    
    }
    //___________________________________________________________//

        public function changeClient(Customer $client){

            $sql = "UPDATE customer
                    SET name = :name, firstname = :firstname, address = :address, cp = :cp, town = :town, country = :country, mail = :mail, phone = :phone, login = :login, password = :password
                    WHERE id_c = :id";
            
            $tabParams = [

                        "id"=>$client->getId_c(),
                        "name"=>$client->getName(),
                        "firstname"=>$client->getFirstname(),
                        "address"=>$client->getAddress(),
                        "cp"=>$client->getCp(),
                        "town"=>$client->getTown(),
                        "country"=>$client->getCountry(),
                        "mail"=>$client->getMail(),
                        "phone"=>$client->getPhone(),
                        "login"=>$client->getLogin(),
                        "password"=>$client->getPassword()
            
                        ];


        $result = $this->getRequest($sql, $tabParams);
         
            return $result->rowCount();

        }

        public function collectClient(Customer $cli){
            
            $sql = "SELECT *
                    FROM customer
                    WHERE id_c = :id";
            
            $result = $this->getRequest($sql, ['id'=>$cli->getId_c()]);

            if($result->rowCount() > 0){
                
                $row = $result->fetch(PDO::FETCH_OBJ);

                    $editCus = new Customer();
                    
                    $editCus->setId_c($row->id_c);
                    $editCus->setName($row->name);
                    $editCus->setFirstname($row->firstname);
                    $editCus->setAddress($row->address);
                    $editCus->setCp($row->cp);
                    $editCus->setTown($row->town);
                    $editCus->setCountry($row->country);
                    $editCus->setMail($row->mail);
                    $editCus->setPhone($row->phone);
                    $editCus->setLogin($row->login);
                    $editCus->setPassword($row->password);

                return $editCus;
            }
        }
    //___________________________________________________________//

        public function signInClient($loginEmail, $password){
       
            $sql = "SELECT * 
                    FROM customer
                    WHERE (login = :logEmail OR mail = :logEmail) AND password = :password";
             
             $result = $this->getRequest($sql,['logEmail'=>$loginEmail, 'password'=>$password]);
            
             $row = $result->fetch(PDO::FETCH_OBJ);
             
             return $row;
         }
}