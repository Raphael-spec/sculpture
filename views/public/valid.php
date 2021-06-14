
<section class="val_section">
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