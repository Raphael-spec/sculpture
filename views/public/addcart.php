<?php ob_start();
//var_dump($_SESSION['cart']);
if(isset($_SESSION['AuthClient'])){
  //var_dump($_SESSION['AuthClient']);

  $mail = json_encode($_SESSION['AuthClient']->mail);
  $name = json_encode($_SESSION['AuthClient']->name);
  $firstname = json_encode($_SESSION['AuthClient']->firstname);
  $address = json_encode($_SESSION['AuthClient']->address);
  $cp = json_encode($_SESSION['AuthClient']->cp);
  $town = json_encode($_SESSION['AuthClient']->town);
  $country = json_encode($_SESSION['AuthClient']->country);
  
//echo $name . $firstname . $address . $cp . $town .$country;

}

?>
<section class="container">
            <a  class="btn btn-primary mt-5 mb-3" href="index.php?action=features">Continue your purchase</a>

            <?php if(isset($var)){?>
                <div class="row">
                  <div class="col-4 offset-4">
                    <div class="alert alert-info text-center mb-3"><?=$var?></div>
                  </div>
                </div>

            <?php } ?> 
              
            <table class="table table-striped mb-5"  class=" add_table">
              <thead class="table-secondary">
                <tr>
                  <!-- <th>id</th> -->
                  <th>Name</th>
                  <th>Picture</th>
                  <th>Content</th>
                  <th>dimension</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th></th>
                  
                </tr>
              </thead>
              <tbody>
            
              <?php $sum = 0;
                      foreach($_SESSION['cart'] as $cart){
                        $sum += $cart['price'];
                ?>
                <tr>
                  <!-- <td><?//=$cart['id']?></td> -->
                  <td><?=$cart['name']?></td>
                  <td><img src="./assets/images/<?=$cart['picture']?>" alt="" width="100"></td>
                  <td><?=$cart['content']?></td>
                  <td><?=$cart['dimension']?></td>
                  <td><?=$cart['quantity']?></td>
                  <td><?=$cart['price']?></td>
                  <td><a class="btn btn-danger" href="index.php?action=remove_cart&id=<?=$cart['id']?>" onclick="return confirm('Are you sure, you want to delete this carving?')"><i class="fa fa-trash"></i></a></td>
                </tr>
                <?php } ?>
                <tr>
                    <td colspan="5" class="text-end">Total</td>
                    <td colspan="2"><?=$sum?>€</td>
                </tr>
                <tr>
                
                </tr>
              </tbody>
            </table >
          

            <form action="index.php?action=pay" method="post" enctype="multipart/form-data" >
              

              <?php if(isset($_SESSION['AuthClient'])){ ?>

            

                        <script>
                          var panier = <?php echo json_encode($_SESSION['cart']) ?>;
                          var email = <?php  echo $mail ?>;
                          var nameClient = <?php echo $name ?>;
                          var firstname = <?php echo $firstname ?>;
                          var address = <?php echo $address ?>;
                          var cp = <?php echo $cp ?>;
                          var country = <?php echo $country ?>;
                          var town = <?php echo $town ?>;
                          var session = true;
                        </script>

                        <div class="row col-4 offset-4 add_price_div">
                          <input type="hidden" class="text-center add_price" id="price" name="price"  value="<?=$sum?>" >
                        </div>

                    
                        <?php }else{ ?>

                          <script>
                            var session = false;
                          </script>
                    <div class="container">
                      <div class="row col-6 offset-3 border border-dark p-4 mb-5">
                        <h1 class="display-6 text-center font-verdana text-decoration-underline mt-3 mb-5">Please enter your details</h1>
                            <div class="row ">
                                  <div class="col-6">
                                    <label for="name" class="h6">Name*</label>
                                    <input type="text" id="name" name="name" class="form-control mb-4" placeholder="Please enter you name">
                                  </div>           
                                    <div class="col-6">
                                    <label for="firstname" class="h6">Firstname*</label>
                                    <input type="text" id="firstname" name="firstname" class="form-control mb-4" placeholder="Please enter you firstname">
                                  </div>
                            </div> 
                            <div class="row"> 
                                  <div class="col-12">
                                    <label for="address" class="h6">Address*</label>
                                    <input type="text" id="address" name="address" class="form-control mb-4" placeholder="Please enter you address">
                                  </div>
                                  <div class="col-6">
                                    <label for="cp" class="h6">Cp*</label>
                                    <input type="text" id="cp" name="cp" class="form-control mb-4" placeholder="Please enter you cp">
                                  </div>
                                  <div class="col-6">
                                    <label for="email" class="h6">Town*</label>
                                    <input type="text" id="town" name="town" class="form-control mb-4" placeholder="Please enter you town">
                                  </div>
                                  <div class="col-12">
                                    <label for="country" class="h6">Country*</label>
                                    <input type="text" id="country" name="country" class="form-control mb-4" placeholder="Please enter you country">
                                  </div>
                            </div> 
                            <div class="row"> 
                                <div class="col-12">
                                  <label for="email" class="h6">Email*</label>
                                  <input type="email" id="email" name="email" class="form-control mb-4" placeholder="Please enter you email">
                                </div>
                            </div>
                                <input type="hidden" id="price" name="price"  value="<?=$sum?>" >
                      
                    <?php  }?>
                          </div>
                        </div>

                          <div class="row col-4 offset-4"> 
                              <div class="mt-4 mb-5">
                                  <button class="btn btn-success col-12" id="checkout-button">Buy Now!</button>
                              </div>
                          </div>
                
              </form>
  </section>
<?php 
    $contenu = ob_get_clean();
    require_once('./views/public/templatePublic.php');
?>