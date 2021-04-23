<?php ob_start();?>

 <div class="container">
     <div class="row">
         <div class="col-8 offset-2">
         <h1 class="display-6 text-center font-verdana text-decoration-underline">Add Carving</h1>
             <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                
                <div class="row">
                    <div class="col">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Please enter a name" >
                    </div>
                    <div class="col">
                        <label for="cat">Catégory</label>
                        <select id="cat" name="cat" class="form-select">
                        <option value="">Choose</option>
                        <?php foreach ($tabCat as  $cat) {;?>
                           
                      
                        <option value="<?=$cat->getId_cat();?>"><?=$cat->getName_cat();?></option>
                        <?php   } ;?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="prix">Price</label>
                        <input type="text" id="price" name="price" class="form-control" placeholder="Please enter a price" >
                    </div>
                    <div class="col">
                        <label for="quantity">Quantity</label>
                        <input type="number" id="quantity" name="quantity" class="form-control" placeholder="Please enter your content" >
                    </div>
                    <div class="col">
                        <label for="crea_date">Creation.D</label>
                        <input type="date" id="crea_date" name="crea_date" class="form-control" placeholder="Please enter a creation date'" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="picture_f">Picture.F</label>
                        <input type="file" id="image_f" name="image_f" class="form-control"  >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="picture_l">Picture.L</label>
                        <input type="file" id="image_l" name="image_l" class="form-control"  >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="picture_r">Picture.R</label>
                        <input type="file" id="image_r" name="image_r" class="form-control"  >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="content">Content</label>
                        <textarea id="content" name="content" class="form-control" placeholder="Please enter your content" rows="5"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary  col-12 mt-2" name="submit">Add</button>
            </form>
         </div>
     </div>
 </div>
<?php 
    $contenu = ob_get_clean();
    require_once('./views/templateAdmin.php');
?>