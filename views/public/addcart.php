<?php ob_start();
var_dump($_SESSION['cart'])
?>

<a  class="btn btn-primary mt-5 mb-3" href="index.php?action=features">Continue your purchase</a>

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
        $sboub = "";
         if(!isset($_SESSION['cart'])){
            
          $sboub = "Your cart is empty...";
        
        }else{
        
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
    <?php }} ?>
    <tr>
        <td colspan="5" class="text-end">Total</td>
        <td colspan="2"><?=$sum?></td>
    </tr>
    <tr>
    <!-- <td colspan="6" class="text-end"><button class="btn btn-success" id="checkout-button">Buy Now!</button></td>
    <td colspan="1"></td> -->

    <div class="row">
      <div class="col-4 offset-4">
        <div class="alert alert-info text-center mb-3"><?=$sboub?></div>
      </div>
    </div>

    </tr>
  </tbody>
</table >

<form action="index.php?action=pay" method="post" enctype="multipart/form-data" id="form">
    <div class="row offset-4">
            <div class="col-4">
              <label for="email">Email*</label>
              <input type="email" id="email" class="form-control mb-4" placeholder="Please enter you email">
            </div>

            <!-- <script>
              var array = [];
              var item = <?//php echo json_encode($_SESSION['cart']) ?>
              array.push(item)

              console.log(array)
            </script> -->

            <?php foreach($_SESSION['cart'] as $cart){ ?>
            <input type="text" id="id"  value="<?php   echo $cart['id'] ?>" >
            <input type="text" id="name"  value="<?php echo $cart['name'] ?>" >
            <input type="text" id="picture"  value="<?php echo $cart['picture'] ?>" >
            <input type="text" id="content"  value="<?php echo $cart['content'] ?>" >
            <input type="text" id="quantity"  value="<?php echo $cart['quantity'] ?>" >
            <input type="text" id="quality"  value="<?php echo $cart['quality'] ?>" >
            <input type="text" id="dimension"  value="<?php echo $cart['dimension'] ?>" >
            <input type="text" id="date"  value="<?php echo $cart['date'] ?>" >
            <input type="text" id="id_cat"  value="<?php echo $cart['id_cat'] ?>" >
            <input type="text" id="name_cat"  value="<?php echo $cart['name_cat'] ?>" >
            <input type="text" id="price"  value="<?=$sum?>" >
            <?php } ?>
            <div class="col-4 mt-4">
                  <button class="btn btn-success" id="checkout-button">Buy Now!</button>
            </div>
      </div>
  </form>

<?php 
    $contenu = ob_get_clean();
    require_once('./views/public/templatePublic.php');
?>