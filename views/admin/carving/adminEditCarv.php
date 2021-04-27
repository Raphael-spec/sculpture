<?php ob_start();
var_dump($_FILES);

?>

 <div class="container">
     <div class="row">
         <div class="col-8 offset-2">
         <h1 class="display-6 text-center font-monospace text-decoration-underline">Edit Carving N°0<?=$editCar->getId_carv();?></h1>
             <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                
                <div class="row">
                    <div class="col">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="<?=$editCar->getName();?>" >
                    </div>
                    <div class="col">
                        <label for="cat">Catégory</label>
                        <select id="cat" name="cat" class="form-select">
                        <option value="<?=$editCar->getCategory()->getId_cat();?>">
                        <?php
                        foreach ($tabCat as $cat) {
                             if($cat->getId_cat() == $editCar->getCategory()->getId_cat()) {
                                 echo $cat->getName_cat();
                                }
                            }
                        ?>
                        
                        </option>
                        <?php foreach ($tabCat as  $cat) { if($cat->getId_cat() != $editCar->getCategory()->getId_cat()) {?>
                           
                      
                        
                        <option value="<?=$cat->getId_cat();?>"><?=$cat->getName_cat();?></option>
                        <?php  } } ;?>
                        </select>
                    </div>
                    <div class="col">
                        <label for="date">Date.C</label>
                        <input type="date" id="date" name="date" class="form-control" value="<?=$editCar->getDate();?>" >
                    </div>
                </div>
                <div class="row">
                    <div class="container col-6 ">
                        <label for="dime">Dimension</label>
                        <input type="text" id="dime" name="dime" class="form-control" value="<?=$editCar->getDimension();?>" >
                   
                    
                        <label for="quantity">Quantity</label>
                        <input type="number" id="quantity" name="quantity" class="form-control" value="<?=$editCar->getQuantity();?>" >
                  
                    
                        <label for="price">Price</label>
                        <input type="text" id="price" name="price" class="form-control" value="<?=$editCar->getPrice();?>" >
                   
                        <label for="image">Picture</label>
                        <input type="file" id="image" name="image" class="form-control"  >
                     </div>
              
                     <div class="container  col-6 ">
                        <img src="./assets/images/<?=$editCar->getPicture();?>" alt="" width="348"  class="img-thumbnail mt-3">
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-3">
                        <label for="qual">Quality</label>
                        <textarea id="qual" name="qual" class="form-control" rows="2"><?=$editCar->getQuality();?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-3">
                        <label for="content">Content</label>
                        <textarea id="content" name="content" class="form-control" rows="5"><?=$editCar->getContent();?></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-warning  col-12 mt-2" name="submit">Edit</button>
            </form>
         </div>
     </div>
 </div>
<?php 
    $contenu = ob_get_clean();
    require_once('./views/templateAdmin.php');
?>