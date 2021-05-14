<?php ob_start();  ?>
<!-- <section class="home_section">
    <div class="home_container">
        <div class="home_box">
            <span class="ho_span"></span>
                <div class="ho_content">
                    <h2>Card One</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, libero!</p>
                    <a href="">read More</a>
                </div>
        </div>
        <div class="home_box">
            <span class="ho_span"></span>
                <div class="ho_content">
                    <h2>Card Two</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, libero!</p>
                    <a href="">read More</a>
                </div>
        </div>
        <div class="home_box">
            <span class="ho_span"></span>
                <div class="ho_content">
                    <h2>Card Three</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, libero!</p>
                    <a href="">read More</a>
                </div>
        </div>
    </div>
</section> -->
<section class="home_section">
    <div class="home_container">
        <span class="home_text1">Welcome in</span>
        <span class="home_text2">Wood art</span>
    </div>
</section>




<?php $contenu = ob_get_clean();
    require_once("./views/public/templatePublic.php");
?>