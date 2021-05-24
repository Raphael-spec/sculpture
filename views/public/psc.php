<?php ob_start(); 

?>
<section class="container psc_section">
    <h1 class="psc_title">Preserving the sculptures in your collection</h1>

    <p class="psc_p1">
    The main causes of deterioration of sculptures are linked to the environment, handling, and maintenance. Prevention and maintenance methods can mitigate against these causes.
    </p >
    <p class="psc_p1">
    Sculptures must be kept away from radiators, ventilators, and heaters. They should not be placed against outside walls or on cold or humid surfaces. All contact with the floor should be avoided and they should be kept on platforms or shelves.
    </p>
    <p class="psc_p1">
    You should pay attention to the sculpture's environment. It is recommended to maintain humidity levels between 33 and 65%, as well as a stable temperature between 20 and 22°C. To prevent cracking, joint faulting, and shrinking, the relative humidity should not be below 30% or above 70%, this also prevents swelling and mould.
    </p>
</section>

<?php $contenu = ob_get_clean();
    require_once("./views/public/templatePublic.php");
?>