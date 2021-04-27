<?php ob_start(); 

var_dump($carvs)
?>
    <div class="container bg-success"  >
            <div id="carouselExampleControls"  class="carousel slide mt-4 " data-bs-ride="carousel">
                <div class="carousel-inner ">
                  <div class="carousel-item active">
                    <img src="./assets/images/itachi.jpg" class="d-block w-50 "  alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./assets/images/tanjiro.png" class="d-block w-50" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./assets/images/zorro2.jpg" class="d-block w-50" alt="...">
                  </div>
                </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
    
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
            </div>

    </div>
<?php $contenu = ob_get_clean();
    require_once("./views/public/templatePublic.php");
?>