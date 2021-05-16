<?php ob_start();

//var_dump($_POST)
?>

<div class="container">
  <div class="row ">
    <div class="col-lg-8 col-md-6 col-12 bg-success ">

        <div class="carIt_img1">
        <a href="./assets/images/<?=$picture;?>" target="_blank" ><img src="./assets/images/<?=$picture;?>"  class="img-thumbnail carIt_pictB " width="600px" alt="..." >
        </div> 
        
      
            <div class="carIt_img2"> 
            <a href="#"><img src="./assets/images/<?=$picture;?>"  class="img-thumbnail carIt_pict" width="150px" alt="..." ></a>          
            <a href="#"><img src="./assets/images/<?=$picture_l;?>"  class="img-thumbnail carIt_pict" width="150px" alt="..." ></a>
            <a href="#"><img src="./assets/images/<?=$picture_r;?>"  class="img-thumbnail carIt_pict" width="150px" alt="..." ></a>
            </div>
      
       
        <h3 class="carIt_title1">About the Work</h3>
        <hr class="carIt_hr1">
        <div class="carIt_para">
            <p>Dimensions cm | <span>inch</p>
            <p><?=$dimension;?> cm</p>
        </div>
        <hr>
        <div class="carIt_para">
            <p>Display</p>
            <p>The sculpture cannot be displayed outdoors</p>
        </div>
        <hr>
        <div class="carIt_para">
            <p>Type</p> 
            <p>Unique work</p>
        </div>
        <hr>
        <div class="carIt_para">
            <p>Authenticity</p>
            <p><?=$quality;?></p>
        </div>
        <hr>
        <div class="carIt_para">
            <p>Signature</p>
            <p>Hand-signed by artist</p>
        </div>
        <hr>
        <div class="carIt_para2">
            <p>About the artwork</p>
            <p>Artwork sold in perfect condition</p>
        </div>
        <hr>
        <h3 class="carIt_title2">Want to go further</h3>
        <hr class="carIt_hr1">
        <div class="carIt_para3">
            <p><a href="#">Collecting Sculptures</a></p>
            <p><a href="#">Preserving the sculptures in your collection</a></p>
        </div>
    </div>
    <div class=" col-lg-4 col-md-3 col-12 bg-danger">
       <div class="carIt_paytitle">
            <h1><?=$name;?></h1> 
            <h2><?=$name_cat;?></h2>
       </div>
       <hr class="carIT_pay_hr">
       <p><?=$content;?></p>
       <p><span><?=$name;?></span>, <strong><?=$date;?></strong></p>
       <hr class="carIT_pay_hr">
        <p><?=$price;?>€</p>
        
      <form>
        <label for="email">Email*</label>
        <input type="email" id="email" class="form-control mb-4" placeholder="Votre email svp...">

        <input type="text" name="quantity" id="quantity" class="form-control"  min="1" max="1" value="<?=$quantity;?>" >
        <input type="text" name="id"  id="id" value="<?=$id;?>">
        <input type="text" name="name"  id="name" value="<?=$name;?>">
        <input type="text" name="price"  id="price" value="<?=$price;?>">
        <input type="text" name="content"  id="content" value="<?=$content;?>">
        <input type="text" name="quality"  id="quality" value="<?=$quality;?>">
        <input type="text" name="picture"  id="picture" value="<?=$picture;?>">
        <input type="text" name="dimension"  id="dimension" value="<?=$dimension;?>">
        <input type="text" name="date"  id="date" value="<?=$date;?>">
        <input type="text" name="id_cat"  id="id_cat" value="<?= $id_cat;?>">
        <input type="text"name="name_cat"  id="name_cat" value="<?=$name_cat;?>">
        
            <button id="checkout-button"  class="col-12 carIt_pay_button" >Add to cart</button>
      
    </form>
    </div>
  </div>
</div>

<?php 
    $contenu = ob_get_clean();
    require_once('./views/public/templatePublic.php');
?>