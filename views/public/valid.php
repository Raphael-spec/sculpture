<!-- <div class="container p-5  mt-5" style="min-height:750px">
  <div class="row">
    <div class="col-3">
  
    </div>
    <div class="col-6 text-center border border-secondary rounded ">
    <h1 class="text-success mb-5">Confirmation de commande</h1>
    <img src="./assets/media/sunlight.jpg" width="400" alt="">
    <p class=" text-secondary display-6 ">Merci pour votre achat <p>
    <div class="row">
        <div class="col-6 offset-3">
    <a href="index.php" style="text-decoration: none"><p class=" border border-secondary text-success border border-3 h4 rounded-pill mt-3">a très bientôt<p></a>
        </div>
    </div>
    </div>
    <div class="col-3">
     
    </div>
  </div> -->
<section class="val_section" style="background: center / contain no-repeat url('./assets/media/dragonball.jpg'); background-size: cover;">
    <div class="val_center">
      <div class="val_title">
          <h1>Purchase confirmation</h1>
      </div>
        <div class="val_iconi">
            <i class="fa fa-check" ></i>
        </div>
        <div class="val_title2">
          Success!!
        </div>
        <div class="val_desc">
          Thank you for your purchase
        </div>
        <div class="val_button">
          <a href="index.php?action=features">See you soon</a>
        </div>
  </div>
</section>


<?php $contenu = ob_get_clean();
    require_once("./views/public/templatePublic.php");
?>