<?php ob_start();?>

<div class="row col-8 offset-2">
    <h1 class="display-6 text-center font-verdana border-white text-decoration-underline">Edit Category N°0<?=$editCat->getId_cat();?></h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="row ">
                    <div class=" container col-4 offet-4 mt-4">
                        <input type="text" class="form-control text-center" name="id" value="<?=$editCat->getId_cat();?>" readonly>
                    </div>
                </div>

                        <label for="categorie" class="h6">Category</label>
                        <input type="text" id="category" name="category" class="form-control" value="<?=$editCat->getName_cat();?>">

                        <label for="image">Picture</label>
                        <input type="file" id="picture" name="picture" class="form-control"  >
                                         
                        <img src="./assets/images/<?=$editCat->getPicture_cat();?>" alt="" width="348"  class="img-thumbnail mt-3">
                    
                        
                        <button type="submit" class="btn btn-warning col-12 mt-2" name="submit">Edit</button>
            </form>
        </div>
    </div>
</div>


<?php
$contenu = ob_get_clean();
require_once('./views/templateAdmin.php');

?>

