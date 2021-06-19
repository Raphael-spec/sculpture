<?php ob_start();

         ?>


     

        
        <div class="container procli_si">
  <div class="row row-cols-1 row-cols-lg-2 row-cols-md-1 ">
    <div class="col">
    <section>
                 <div class="col-6 offset-3">
                    <h1 class="display-6 text-center font-verdana text-decoration-underline "><?php if(isset($_SESSION['AuthClient'])){
                        echo $_SESSION['AuthClient']->login;
                        } ?>'s Registration Form</h1>

                            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="text-center " enctype="multipart/form-data">
                                    <div class="row mt-3  ">
                                    <div class="row border border-warning mt-4 ">
                                            <div class="col-6 mt-3">
                                                <label for="name" class="h6">Name</label>
                                                <input type="text" id="name" name="name"  class="form-control" placeholder="Please enter a name" value="<?=$editClie->getName();?>">
                                            </div>
                                            <div class="col-6 mt-3 mb-4">
                                                <label for="firstname" class="h6">Firstname</label>
                                                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Please enter a firstname" value="<?=$editClie->getFirstname();?>">
                                            </div>
                                    </div>
                                        <div class="row mt-3 border border-secondary">
                                            <div class="col-12 mt-3 ">
                                                <label for="address" class="h6">Address</label>
                                                <input type="text" id="address" name="address" class="form-control" placeholder="Please enter an address" value="<?=$editClie->getAddress();?>">
                                            </div>
                                            <div class="col-6 mt-3">
                                                <label for="cp" class="h6">Cp</label>
                                                <input type="text" id="cp" name="cp" class="form-control" placeholder="Please enter a cp" value="<?=$editClie->getCp();?>">
                                            </div>
                                            <div class="col-6 mt-3">
                                                <label for="town" class="h6">Town</label>
                                                <input type="text" id="town" name="town" class="form-control" placeholder="Please enter a town" value="<?=$editClie->getTown();?>">
                                            </div>
                                            <div class="col-12 mt-3 mb-5">
                                                <label for="country" class="h6">Country</label>
                                                <input type="text" id="country" name="country" class="form-control" placeholder="Please enter a country" value="<?=$editClie->getCountry();?>">
                                            </div>
                                        </div>
                                    <div class="row mt-3 border border-secondary">
                                        <div class="col-12  mt-3">
                                            <label for="mail" class="h6">Mail</label>
                                            <input type="text" id="mail" name="mail" class="form-control" placeholder="Please enter a mail" value="<?=$editClie->getMail();?>">
                                        </div>
                                        <div class="col-6 mt-3">
                                            <label for="phone" class="h6">Phone</label>
                                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Please enter a phone" value="<?=$editClie->getPhone();?>">
                                        </div>
                                        <div class="col-6 mt-3">
                                            <label for="login" class="h6">Login</label>
                                            <input type="text" id="login" name="login" class="form-control" placeholder="Please enter a login" value="<?=$editClie->getLogin();?>">
                                        </div>
                                        <div class="col-12 mt-3 mb-5">
                                        <label for="password" class="h6">Password</label>
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Please enter a password" value="<?=$editClie->getPassword();?>">
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="">
                                            <button type="submit" class="btn btn-primary col-12 mb-5 mt-3" name="submit">Edit</button>
                                        </div>
                                    </div>
                                </form>
                        </div>
            </section>
    </div>
    <div class="col">
      
    <section>
      
      <h1 id="space_pro" class="display-6 text-center font-verdana text-decoration-underline"><?php if(isset($_SESSION['AuthClient'])){
      echo $_SESSION['AuthClient']->login;
      } ?>'s Orders</h1>

<table class="table table-striped border border-light p-4 bg-light mt-5 rounded-3 space_table">
  <thead>
      <tr>
          <th>Id</th>
          <th>Date</th>
          <th>Livraison</th>
      </tr>
  </thead>
  <tbody>

        <?php if(empty($orders)){ ?>

           <tr > <td colspan='3' class="text-center text-warning">No orders</td>  </tr>

      <?php   }else{ ?>

        
      <?php foreach ($orders as $order) { ?>
      <tr>
          <td><?=$order->getId_shop();?></td>
          <td><?=$order->getDate();?></td>
          <td> <?php 
                      $date1 = strtotime($order->getDate());
                      $date = strtotime("+2 day", $date1);

                      if(date('Y/m/d', $date) <= date('Y/m/d')){
                          echo 'livré';
                      }else{
                          echo 'en cours';
                      }
                  ?>

            </td>
      </tr>
      <?php } } ?>

  </tbody>
</table>


</section> 
    </div>
  </div>

   </div>  
<?php
    $contenu = ob_get_clean();
    require_once('./views/public/templatePublic.php');
?>

