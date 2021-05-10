<?php ob_start(); 

?>
    <div class="row mb-4">
        <div class="col-4 offset-4">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="input-group">
                <input class="form-control text-center" type="search" name="search" id="search" placeholder="Search...">
                <button type="submit" class="btn btn-outline-secondary bg-info" name="submit"><i class="fa fa-search"></i></button>
            </form>
         </div>
    </div>

    <div class="carC_contCarC">
         <?php foreach($tabCat as $cat){ ?>
             <div class="carC_CarC_In">
             <a href="index.php?action=features&id=<?=$cat->getId_cat();?>" class="text-center"><img src="./assets/images/<?=$cat->getPicture_cat();?>" class="img-thumbnail"  width="170" alt="" ></a>
                <p><a href="index.php?action=features&id=<?=$cat->getId_cat();?>" class="text-center"><?=ucfirst($cat->getName_cat());?></a></p>
            </div>
        <?php } ?>
    </div>

<!-- <div class="row"> -->
        <div class="col-12">
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-4">
        <?php foreach($carvsbyCat as $carv){?>
                <div class="col">
                    <div class="card border-light CarC_cardCar">
                            <img src="./assets/images/<?= $carv->getCarving()->getPicture();?>" class="card-img-top" width="300" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $carv->getCarving()->getName();?></h5>
                            <p class="card-text"><?= $carv->getCarving()->getPrice();?>€</p>
                            
                            <form action="index.php?action=glanceAt" method="post">
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
                                  <button type="submit" name="pass_to" class="btn btn-outline-primary"> See more</button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php } ?> 
            </div>
        </div>
            <!------------------------------end cards--------------------------------------------------------->
            <!-- <div class="col-4 "> -->
                    <!-- <form action="<?// php $_SERVER['PHP_SELF']; ?>" method="post" class="input-group">
                        <input class="form-control text-center" type="search" name="search" id="search" placeholder="Search...">
                        <button type="submit" class="btn btn-outline-secondary bg-info" name="soumis"><i class="fa fa-search"></i></button>
                     </form> -->
                <!-- <div class="card mt-5">
                    <ul class="list-group list-group-flush ">
                      <?php //foreach($tabCat as $cat){ ?>
                        <li class="list-group-item text-center mt-2 ">
                          <a class="btn text-center" href="index.php?action=accueil&id=<?php //$cat->getId_cat();?>"><?php //ucfirst($cat->getNom_cat());?></a>
                        </li>
                      <?php //} ?>
                    </ul>
                </div>  -->
                <!-- <div class="container">
                    <div class="align-items-center offset-3">
                        <?//php foreach($tabCat as $cat){ ?>
                            <div class="col-10 border border-dark mt-5 mb-5">
                                <a class=" btn text-center p-4 " href="index.php?action=features&id=<?//=$cat->getId_cat();?>"><?//=ucfirst($cat->getName_cat());?></a>
                            </div>
                        <?php //} ?> -->
                        <!-- <div class="col-12">
                            One of two columns
                        </div> -->
                    <!-- </div>
                </div> -->
<!---------->

<?php $contenu = ob_get_clean();
    require_once("./views/public/templatePublic.php");
?>