<?php ob_start();
?>

<div class="container">
  <div class="row ">
    <div class="col-8 bg-success ">
        <img src="./assets/images/<?=$picture;?>" class="mb-5 mt-1 offset-1" class="rounded-1 " class="img-fluid img-thumbnail " width="600px" alt="..." >
        <p  >About the Work</p>
        <hr>
        <div class=" justify-content-between">
            <p>Dimensions cm|inch <span class="offset-8"><?=$dimension;?></span></p>
        </div>
        <hr>
        <div class=" justify-content-between">
            <p>Display <span class="offset-5">The sculpture cannot be displayed outdoors</span></p>
        </div>
        <hr>
        <div class=" justify-content-between">
            <p>Type <span class="offset-9">Unique work</span></p>
        </div>
        <hr>
        <div class=" justify-content-between">
            <p>Authenticity<span class="offset-6"><?=$quality;?></span></p>
        </div>
        <hr>
        <div class=" justify-content-between">
            <p>signature<span class="offset-8">Hand-signed by artist </span></p>
        </div>
        <hr>
        <div class="mb-5">
            <p>About the artwork</p>
            <p>Artwork sold in perfect condition</p>
        </div>

        <p>Want to go further</p>
        <hr>
        <div>
            <p><a href="#">Collecting Sculptures</a><span class="offset-8"><a href="">Artist</a></span></p>
            <p><a href="#">Preserving the sculptures in your collection</a></p>
        </div>
    </div>
    <div class="col-4 bg-danger mt-5">
        <p class="text-center mt-4"><?=$name;?></p>
        <p><?=$name_cat;?>, <?=$date;?></p>
        <p><?=$content;?>€</p>
        <p><?=$price;?>€</p>

      <form>
        <input type="hidden" id="quantity" class="form-control"  min="1" max="1" value="<?=$quantity;?>" >
        <input type="hidden" id="id" value="<?=$id;?>">
        <input type="hidden" id="name" value="<?=$name;?>">
        <input type="hidden" id="auteur" value="<?=$auteur;?>">
        <input type="hidden" id="price" value="<?=$price;?>">
        <input type="hidden" id="content" value="<?=$content;?>">
        <input type="hidden" id="quality" value="<?=$quality;?>">
        <input type="hidden" id="picture" value="<?=$picture;?>">
        <input type="hidden" id="dimension" value="<?=$dimension;?>">
        <input type="hidden" id="date" value="<?=$date;?>">
        <input type="hidden" id="id_cat" value="<?=$id_cat;?>">
        <input type="hidden" id="name_cat" value="<?=$name_cat;?>">
      
        <button id="checkout-cart"  class="btn btn-success">Add to cart</button>
    </form>
    </div>
  </div>
</div>

<?php 
    $contenu = ob_get_clean();
    require_once('./views/public/templatePublic.php');
?>