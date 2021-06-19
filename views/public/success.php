
<?php ob_start();
echo "<script>window.location.assign('index.php?action=valid')</script>";
  ?>




<?php
    $contenu = ob_get_clean();
    require_once('./views/public/templatePublic.php');
?>