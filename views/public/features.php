<?php ob_start(); 

 //var_dump($carvs);
?>
<section class="feat_section">
        <div class="row feat_search">
            <div class="col-4 offset-4 ">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="input-group">
                    <input class="form-control text-center" type="search" name="search" id="search" placeholder="Search...">
                    <button type="submit" class="btn btn-outline-secondary bg-info " name="submit" id="loupe"><i class="fa fa-search"></i></button>
                </form>
             </div>
        </div>
    
    <div class="row">
        <div class="col-12">
            <div class="feat_contCat">
                <?php foreach($tabCat as $cat){ ?>
                    <div class="feat_catIn">
                    <a href="index.php?action=features&id=<?=$cat->getId_cat();?>" class="text-center"><img src="./assets/images/<?=$cat->getPicture_cat();?>" class="img-thumbnail"  width="170" alt="" ></a>
                        <p><a href="index.php?action=features&id=<?=$cat->getId_cat();?>" class="text-center"><?=ucfirst($cat->getName_cat());?></a></p>
                    </div>
                <?php } ?>
            </div>
        </div >
    </div>
    
        
    
        <!-- <div class="row"> -->
            <div class="col-12 feat_card">
                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-4">
                <?php foreach($carvs as $carv){?>
                    <div class="col">
                        <div class="card border-light feat_cardCar">
                                <img src="./assets/images/<?= $carv->getCarving()->getPicture();?>" class="card-img-top" width="300" alt="...">
                            <div class="card-body">
                                <h5 class="card-title feat_name_card"><?= $carv->getCarving()->getName();?></h5>
                                <p class="card-text feat_price_card"><?= $carv->getCarving()->getPrice();?>€</p>
                                
                                <form action="index.php?action=checkout" method="post">
                                    <input type="hidden" name="id_carv" value="<?= $carv->getCarving()->getId_carv();?>">
                                    <input type="hidden" name="name" value="<?= $carv->getCarving()->getName();?>">
                                    <input type="hidden" name="picture" value="<?= $carv->getCarving()->getPicture();?>">
                                    <input type="hidden"  name="dime"value="<?= $carv->getCarving()->getDimension();?>">
                                    <input type="hidden"  name="date"value="<?= $carv->getCarving()->getDate();?>">
                                    <input type="hidden"  name="qual"value="<?= $carv->getCarving()->getQuality();?>">
                                    <input type="hidden"  name="content"value="<?= $carv->getCarving()->getContent();?>">
                                    <input type="hidden"  name="quant" value="<?= $carv->getCarving()->getQuantity();?>">
                                    <input type="hidden"  name="price" value="<?= $carv->getCarving()->getPrice();?>">
                                    <input type="hidden"  name="id_pic" value="<?= $carv->getId_pic();?>">
                                    <input type="hidden"  name="picture_l" value="<?= $carv->getPicture_l();?>">
                                    <input type="hidden"  name="picture_r" value="<?= $carv->getPicture_r();?>">
                                    <input type="hidden"  name="name_cat" value="<?= $carv->getCarving()->getCategory()->getName_cat();?>">
                                    <input type="hidden"  name="id_cat" value="<?= $carv->getCarving()->getCategory()->getId_cat();?>">
                                    <?php if( $carv->getCarving()->getQuantity() > 0){ ?>
                                      <button type="submit" name="pass_to" class="btn btn-outline-primary"> See more</button>
                                      
                                    <?php } ?>
                                </form>
                                <?php if($carv->getCarving()->getQuantity() == 0){ ?>
                                    <a href="#" class="btn btn-dark text-white"> 
                                        Unavailable
                                    </a>
                                <?php } ?>
                              
                            </div>
                        </div>
                    </div>
                    <?php } ?> 
                </div>
            </div>
</section>                
<!------------------------------end cards--------------------------------------------------------->
  
    <section class=".feat_carousel_section">
        <div class="featNet_title">
                    <h1>Next Inspirations</h1>
        </div>
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="./assets/media/gun.jpg" alt="" width="50"></div>
                    <div class="swiper-slide"><img src="./assets/media/basa.jpg" alt="" width="50"></div>
                    <div class="swiper-slide"><img src="./assets/media/ble.jpg" alt="" width="50"></div>
                    <div class="swiper-slide"><img src="./assets/media/cha.jpg" alt="" width="50"></div>
                    <div class="swiper-slide"><img src="./assets/media/clover.jpg" alt="" width="50"></div>
                    <div class="swiper-slide"><img src="./assets/media/dbz1.jpg" alt="" width="50"></div>
                    <div class="swiper-slide"><img src="./assets/media/demon.jpg" alt="" width="50"></div>
                    <div class="swiper-slide"><img src="./assets/media/hero.jpg" alt="" width="50"></div>
                    <div class="swiper-slide"><img src="./assets/media/ken.jpg" alt="" width="50"></div>
                    <div class="swiper-slide"><img src="./assets/media/juju2.png" alt="" width="50"></div>
                    <div class="swiper-slide"><img src="./assets/media/mas.jpg" alt="" width="50"></div>
                    <div class="swiper-slide"><img src="./assets/media/naruto.jpeg" alt="" width="50"></div>
                    <div class="swiper-slide"><img src="./assets/media/one2.jpg" alt="" width="50"></div>
                    <div class="swiper-slide"><img src="./assets/media/seiya.jpg" alt="" width="50"></div>
                    <div class="swiper-slide"><img src="./assets/media/sak.jpg" alt="" width="50"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
</section>
<?php $contenu = ob_get_clean();
    require_once("./views/public/templatePublic.php");
?>