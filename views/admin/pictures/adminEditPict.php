<?php ob_start();?>

<h1 class="display-6 text-center font-verdana text-decoration-underline mt-3 mb-4">Edit Pictures N°<?=$editPic->getId_pic();?></h1>
 <div class="container">
     <div class="row">
         <div class="col-8 offset-2 bg-light mt-4 p-3">
             <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                
                 <div class="row">
                  
                    <div class="col">
                        <label for="id_carv">Name of Carving</label>
                        <select id="id_carv" name="id_carv" class="form-select">
                        <option value="<?=$editPic->getCarving()->getId_carv();?>">
                        <?php
                        foreach ($datas as $dat) {
                             if($dat->getId_carv() == $editPic->getCarving()->getId_carv()) {
                                 echo $dat->getName();
                                }
                            }
                        ?>
                        
                        </option>
                        <?php foreach ($datas as  $dat) { if($dat->getId_carv() != $editPic->getCarving()->getId_carv()) {?>
                           
                      
                        
                        <option value="<?=$dat->getId_carv();?>"><?=$dat->getName();?></option>
                        <?php  } } ;?>
                        </select>
                    </div>
                    
                </div>
             
                <div class="row">
                    <div class="col">
                        <label for="picture_l">Picture_l</label>
                        <input type="file" id="picture_l" name="picture_l" class="form-control"  >
                        <img src="./assets/images/<?=$editPic->getPicture_l();?>" alt="" width="300"  class="img-thumbnail mt-3">
                    </div>
                    <div class="col">
                        <label for="picture_r">Picture_r</label>
                        <input type="file" id="picture_r" name="picture_r" class="form-control"  >
                        <img src="./assets/images/<?=$editPic->getPicture_r();?>" alt="" width="300"  class="img-thumbnail mt-3">
                    </div>
                </div>
                <button type="submit" class="btn btn-warning col-12 mt-2 mb-4" name="submit">edit</button>
            </form>
         </div>
     </div>
 </div> 
<?php 
    $contenu = ob_get_clean();
    require_once('./views/templateAdmin.php');
?>