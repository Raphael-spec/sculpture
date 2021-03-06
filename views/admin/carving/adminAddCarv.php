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
                    <div class="col">
                        <label for="dime">Dimension</label>
                        <input type="text" id="dime" name="dime" class="form-control" placeholder="Please enter a dimension" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="quantity">Quantity</label>
                        <input type="number" id="quantity" name="quantity" class="form-control" placeholder="Please enter your content" >
                    </div>
                    <div class="col">
                        <label for="prix">Price</label>
                        <input type="text" id="price" name="price" class="form-control" placeholder="Please enter a price" >
                    </div>
                    <div class="col">
                        <label for="date">Date.C</label>
                        <input type="date" id="date" name="date" class="form-control" placeholder="Please enter a date'" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="image">Picture</label>
                        <input type="file" id="image" name="image" class="form-control"  >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="qual">Quality</label>
                        <textarea id="qual" name="qual" class="form-control" placeholder="Please enter the quality" rows="2"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="content">Content</label>
                        <textarea id="content" name="content" class="form-control" placeholder="Please enter your content" rows="5"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-success  col-12 mt-2" name="submit">Add</button>
            </form>
         </div>
     </div>
 </div>
<?php 
    $contenu = ob_get_clean();
    require_once('./views/templateAdmin.php');
?>