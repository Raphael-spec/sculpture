<?php ob_start();  ?>


 <!-- <section id="gal_container">
    <h1 id="gal_title">10 min Inside</h1>
        <div class="gal_row">
            <div class="gal_col">
                <div class="gal_feature_img">
                    <img src="./assets/media/crossover.png" alt="" width="100%" >
                    <img src="./assets/media/play.png" class="gal_play_btn" alt="" onclick="playVideo('./assets/media/Wood_Carving-One_Piece_Whitebeard.mp4')">
                </div>
            </div>
            <div class="gal_col">
                <div class="gal_small_img_row">
                    <div class="gal_small_img">
                        <img src="./assets/media/demon_f.png" alt="" >
                        <img src="./assets/media/play.png" class="gal_play_btn" alt="" onclick="playVideo('./assets/media/Wood_Carving-Naruto_Shippuden_itachi.mp4' )">

                    </div>
                    <div>
                        <p class="gal_text">How to add multiple videos in a website or to make a video gallery</p>
                    </div>                    
                </div>
                <div class="gal_small_img_row">
                    <div class="gal_small_img">
                        <img src="./assets/media/demon_l.jpg" alt="" >
                        <img src="./assets/media/play.png" class="gal_play_btn" alt="" onclick="playVideo('./assets/media/Wood_Carving-One_Piece_Zorro.mp4')">

                    </div>
                    <div>
                        <p class="gal_text">How to add multiple videos in a website or to make a video gallery</p>
                    </div>                    
                </div>
                <div class="gal_small_img_row">
                    <div class="gal_small_img">
                        <img src="./assets/media/demon_r.png" alt="">
                        <img src="./assets/media/play.png" class="gal_play_btn" alt="" onclick="playVideo('./assets/media/Wood_Carving-Attack_of_Titans_ErenvsReiner.mp4')">

                    </div>
                    <div>
                        <p class="gal_text">How to add multiple videos in a website or to make a video gallery</p>
                    </div>                    
                </div>
            </div>
        </div>
</section>

<section class="gal_video_player" id="gal_videoPlayer">
        <video src="./assets/media/Wood_Carving-One_Piece_Whitebeard.mp4" width="100%" controls autoplay type="video/mp4" id="gal_myVideo"></video>
        <img src="./assets/media/shut.png" class="gal_close_btn" alt="" onclick="stopVideo()">
</section>  -->

 <section class="gal_container">
    <div class="gal_heading"><h1 id="gal_title">10 min Inside</h1></div>
        <div class="gal_video-container">
            <div class="gal_video">
                <video   >
                    <source src="./assets/media/Wood_Carving-One_Piece_Whitebeard.mp4" type="video/mp4"/>
                 </video>
                <p class="gal_text">One piece : whitebeard</p>
            </div>
            <div class="gal_video">
                <video >
                    <source src="./assets/media/Wood_Carving-Naruto_Shippuden_itachi.mp4" type="video/mp4">
                </video>
                <p class="gal_text">One piece : whitebeard</p>
            </div>
            <div class="gal_video">
                <video  src="./assets/media/Wood_Carving-One_Piece_Zorro.mp4" ></video>
                <p class="gal_text">One piece : whitebeard</p>
            </div>
            <div class="gal_video">
                <video  src="./assets/media/Wood_Carving-Attack_of_Titans_ErenvsReiner.mp4"  ></video>
                <p class="gal_text">One piece : whitebeard</p>
            </div>
        </div>
</section> 







<?php $contenu = ob_get_clean();
    require_once("./views/public/templatePublic.php");
?>