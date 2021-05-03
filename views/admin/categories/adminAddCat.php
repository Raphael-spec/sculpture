<?php ob_start()
 
 


;?>

<div class="row col-8 offset-2">
    <h1 class="display-6 text-center font-verdana border-success text-decoration-underline">Add Category</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">

            <form action="index.php?action=add_cat" method="post" enctype="multipart/form-data">

                <label for="category" class="h6">Category</label>
                <input type="text" id="category" name="category" class="form-control mt-2" placeholder="Please put a new category">

                <label for="picture" class="h6">Picture</label>
                <input type="file" id="picture" name="picture" class="form-control"  >
                
                <button  type="submit" class="btn btn-success col-12 mt-2" name="submit">Add</button>
            </form>


        </div>
    </div>
</div>


<?php
$contenu = ob_get_clean();
require_once('./views/templateAdmin.php');

?>

