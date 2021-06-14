<?php ob_start();
 header('location:index.php?action=valid');

?>



<?php  $contenu = ob_get_clean();
    require_once("./views/public/templatePublic.php");
?> 