<?php ob_start();  ?>

<section id="er_pnfound" style="background: url('./assets/media/titan.jpg'); background-size: cover;">
   <div id="page_not_found">
        <div  class="error_pnfound">
            <div class="error_notfound404">
                <h1>Damn!</h1>
            </div>
            <h2>404 - Page not found</h2>
            <p>The page you are looking for might have been removed had its name changed or is temporarily unavailable</p>
            <a href="#">Go to Homepage</a>
        </div>
   </div>
</section>




<?php $contenu = ob_get_clean();
    require_once("./views/public/templatePublic.php");
?>