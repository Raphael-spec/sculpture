<?php ob_start();?>

<h1 class="display-6 text-center font-verdana text-decoration-underline mt-3 mb-5">Add Pictures</h1>
 <div class="container">
     <div class="row">
         <div class="col-8 offset-2 bg-light p-3">
             <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                
                 <div class="row">
                  
                    <div class="col">
                        <label for="id_carv">Name of Carving</label>
                        <select id="id_carv" name="id_carv" class="form-select">
                        <option value="">Choose</option>
                        <?php foreach ($datas as  $dat) {;?>
                           
                      
                        <option value="<?= $dat->getId_carv();?>"><?= $dat->getName();?></option>
                        <?php  } ;?>
                        </select>
                    </div>
                    
                </div>
             
                <div class="row">
                    <div class="col">
                        <label for="picture_l">Picture_l</label>
                        <input type="file" id="picture_l" name="picture_l" class="form-control"  >
                    </div>
                    <div class="col">
                        <label for="picture_r">Picture_r</label>
                        <input type="file" id="picture_r" name="picture_r" class="form-control"  >
                    </div>
                </div>
                <button type="submit" class="btn btn-success  col-12 mt-2 mb-4" name="submit">Add</button>
            </form>
         </div>
     </div>
 </div> 
<?php 
    $contenu = ob_get_clean();
    require_once('./views/templateAdmin.php');
?>