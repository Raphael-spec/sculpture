<?php ob_start(); 

 //var_dump($carvs)
?>

    <div class="row">
        <div class="col-8">
            <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php foreach($carvs as $carv){?>
                <div class="col">
                    <div class="card">
                            <img src="./assets/images/<?= $carv->getPicture();?>" class="card-img-top" width="300" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $carv->getName();?></h5>
                            <p class="card-text"><?= $carv->getPrice();?>€</p>
                            
                            <form action="index.php?action=glanceAt" method="post">
                                <input type="hidden" name="id_carv" value="<?= $carv->getId_carv();?>">
                                <input type="hidden" name="name" value="<?= $carv->getName();?>">
                                <input type="hidden" name="picture" value="<?= $carv->getPicture();?>">
                                <input type="hidden"  name="dime"value="<?= $carv->getDimension();?>">
                                <input type="hidden"  name="date"value="<?= $carv->getDate();?>">
                                <input type="hidden"  name="qual"value="<?= $carv->getQuality();?>">
                                <input type="hidden"  name="content"value="<?= $carv->getContent();?>">
                                <input type="hidden"  name="quant" value="<?= $carv->getQuantity();?>">
                                <input type="hidden"  name="price" value="<?= $carv->getPrice();?>">
                                <input type="hidden"  name="id_cat" value="<?= $carv->getCategory()->getId_cat();?>">
                                <input type="hidden"  name="name_cat" value="<?= $carv->getCategory()->getName_cat();?>">
                                  <button type="submit" name="pass_to" class="btn btn-outline-primary"> See more</button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php } ?> 
            </div>
        </div>
            <!------------------------------end cards--------------------------------------------------------->
            <div class="col-4 ">
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="input-group">
                        <input class="form-control text-center" type="search" name="search" id="search" placeholder="Rechecher...">
                        <button type="submit" class="btn btn-outline-secondary bg-info" name="soumis"><i class="fa fa-search"></i></button>
                     </form>
                <!-- <div class="card mt-5">
                    <ul class="list-group list-group-flush ">
                      <?php //foreach($tabCat as $cat){ ?>
                        <li class="list-group-item text-center mt-2 ">
                          <a class="btn text-center" href="index.php?action=accueil&id=<?php //$cat->getId_cat();?>"><?php //ucfirst($cat->getNom_cat());?></a>
                        </li>
                      <?php //} ?>
                    </ul>
                </div>  -->
                <div class="container">
                    <div class="align-items-center offset-3">
                        <?php foreach($tabCat as $cat){ ?>
                            <div class="col-10  mt-5 mb-5">
                                <a class="border border-dark p-2" href="index.php?action=features&id=<?=$cat->getId_cat();?>"><?=ucfirst($cat->getName_cat());?></a>
                            </div>
                        <?php } ?>
                        <!-- <div class="col-12">
                            One of two columns
                        </div> -->
                    </div>
                </div>
<!---------->
</div>
<?php $contenu = ob_get_clean();
    require_once("./views/public/templatePublic.php");
?>