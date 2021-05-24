<?php ob_start(); 

?>
<section class="container bcs_section">
    <h1 class="bcs_title">The benefits of collecting sculptures</h1>

    <p class="bcs_p1">
    You may be worried that a sculpture collection takes up too much space, but it also offers many advantages. A sculpture does not only decorate a wall – it adorns an entire space. What's more, certain sculptures may be used outside as well as inside. Aside from these "physical" advantages, sculpture enables collectors to choose from a wide range of formats, from small sculptures to monumental ones.
    </p >
    <p class="bcs_p1">
    In recent years, sculpture has seen a renewed interest on the contemporary art scene. For many years, young sculptors have been awarded the MAIF Prize for Sculpture and, for the past few years, the Olivier Foundation Sculpture Prize.
    </p>
    <p class="bcs_p1">
    To help collectors discover the emerging talents of the French and international sculpture scene, several Salons have recently started taking place. The most notable include the Sculpturum Salon, inaugurated in 2015. Sculpture is also strongly represented in all the official Salons, however, such as the Salon d'Automne. These exhibition spaces are the best places to help collectors develop their eye for sculpture. 
    </p>
</section>

<?php $contenu = ob_get_clean();
    require_once("./views/public/templatePublic.php");
?>