<?php ob_start();  ?>

<section class="pb-video-container">
    <div class="col-md-10  offset-md-1">
        <h3 class="text-center gal_title">10 min Inside</h3>
        <div class="row pb-row ">
            <div class="col-lg-3 col-md-6 col-12 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/Cuim4K8fxbk" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-center">Naruto Shippuden - Itachi</label>
            </div>
            <div class="col-lg-3 col-md-6 col-12 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/qMOFhZCgt10" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-center">One Piece - Zoro</label>
            </div>
            <div class="col-lg-3 col-md-6 col-12 pb-video">
                <iframe class="pb-video-frame " width="100%" height="230" src="https://www.youtube.com/embed/lpoX8AAlGtY" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-center">Demon Slayer - Zenitsu</label>
            </div>
            <div class="col-lg-3 col-md-6 col-12 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/kf8RgqFSsWc" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-center">Attack on Titan - Eren vs Reiner</label>
            </div>
        </div>
        <div class="row pb-row">
            <div class="col-lg-3 col-md-6 col-12 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/x3LbuczB2Y4" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-center">Demon Slayer - Inosuke</label>
            </div>
            <div class="col-lg-3 col-md-6 col-12 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/NYBpo-AhKSw" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-center">Naruto Shippuden - Sasuke</label>
            </div>
            <div class="col-lg-3 col-md-6 col-12 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/Y2ZG11YWadE" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-center">One Piece - Mihawk</label>
            </div>
            <div class="col-lg-3 col-md-6 col-12 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/Gfc9l-qpzYk" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-center">Attack on Titan - Levi vs Beast Titan</label>
            </div>
        </div>
    </div>
</section >



<?php $contenu = ob_get_clean();
    require_once("./views/public/templatePublic.php");
?>