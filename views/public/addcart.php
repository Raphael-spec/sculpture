<?php ob_start();

if(isset($_SESSION['AuthClient'])){

  $client = json_encode($_SESSION['AuthClient']->id_c);
  $mail = json_encode($_SESSION['AuthClient']->mail);
  $name = json_encode($_SESSION['AuthClient']->name);
  $firstname = json_encode($_SESSION['AuthClient']->firstname);
  $address = json_encode($_SESSION['AuthClient']->address);
  $cp = json_encode($_SESSION['AuthClient']->cp);
  $town = json_encode($_SESSION['AuthClient']->town);
  $country = json_encode($_SESSION['AuthClient']->country);
  
}
?>
<section class="container addcart_size">
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
          

            <form action="" method="post" enctype="multipart/form-data" >
              

              <?php if(isset($_SESSION['AuthClient'])){ ?>

                        <script>
                        
                          var panier = <?php echo json_encode($_SESSION['cart']) ?>;
                          var email = <?php  echo $mail ?>;
                          var id_c = <?php  echo $client ?>;
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

                        <div class="row col-4 offset-4"> 
                              <div class="mt-4 mb-5">
                                  <button class="btn btn-success col-12" id="checkout-button">Buy Now!</button>
                              </div>
                          </div>
                    
                        <?php }else{ ?>
                          <div class="row">
                            <div class="col-6 offset-3">
                              
                            <div class="alert alert-warning text-center mb-3">Please login for purchase</div>
                            </div>
                          </div>

                      
                    <?php  }?>
                          </div>
                        </div>

                
              </form>
  </section>
<?php 
    $contenu = ob_get_clean();
    require_once('./views/public/templatePublic.php');
?>