<?php

class AdminShoppingModel extends Tree{


    public function InsertShop(Shopping $order){

        $sql = "INSERT INTO shopping(id_c)
                VALUES(:id_c)";
        
        $tabParam = [
            "id_c"=>$order->getCustomer()->getId_c(),
                ];

        $result = $this->getRequest($sql, $tabParam);

        return $result;

    }
     //___________________________________________________________//

    public function SelectShoppingTrois(){

            $sql = "SELECT * FROM shopping";
            $result = $this->getRequest($sql);
            $rows = $result->fetchAll(PDO::FETCH_OBJ);
            $tabshop = [];
            foreach($rows as $row){

            $shop = new Shopping();
            $shop->setId_shop($row->id_shop);
            $shop->setDate($row->date);
            $shop->getCustomer()->setId_c($row->id_c);


            array_push($tabshop, $shop);
            
            
        }
        return $tabshop;
    }
     //___________________________________________________________//

    public function SelectShoppingClient(Shopping $order){

        $sql="SELECT * FROM shopping WHERE id_c = :id_c";
           
        $result = $this->getRequest($sql, ['id_c'=>$order->getCustomer()->getId_c()]);


        
        
        $tabShop = [];
        if($result->rowCount() > 0){
            
                $rows = $result->fetchAll(PDO::FETCH_OBJ);
                foreach($rows as $row){

                $shoppingOrder = new Shopping();
                
                $shoppingOrder->setId_shop($row->id_shop);
                $shoppingOrder->setDate($row->date);
                $shoppingOrder->getCustomer()->setId_c($row->id_c);

                array_push($tabShop, $shoppingOrder);

                }
            }


            return $tabShop;
    }
     //___________________________________________________________//
   
     public function deleteShopping(Shopping $order){
        
        $sql = "DELETE FROM shopping
                WHERE id_shop = :id_shop";
        
        $result = $this->getRequest($sql, ['id_shop'=>$order->getId_shop()]);
        
        return $result->rowCount();
    }

}
