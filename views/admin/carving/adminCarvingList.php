<?php ob_start();?>
<h1 class="display-6 text-center font-verdana text-decoration-underline mt-3">Carving list</h1>

<div class="row ">
    <div class="col-4 offset-8 mt-5">
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" class="input-group">
            <input class="form-control text-center" type="search" name="search" id="search" placeholder="Search..." >
            <button type="submit" class="btn btn-outline-secondary" name="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
</div>
<table class="table table-responsive-sm table-striped border border-light p-4 bg-light mt-4 rounded-3" id="table_b-e">
      <thead>
          <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Picture</th>
              <th id="col_b-e3">Dimension</th>
              <th id="col_b-e">Date</th>
              <th id="col_b-e2">Content</th>
              <th>Price</th>
              <th>Category</th>
          
              <th colspan="2" class="text-center">Actions</th>
          </tr>
      </thead>
     <tbody>
          <tr>
          <?php if(is_array($carvs)){ foreach ($carvs as $carv) { ?>
              <td><?=$carv->getId_carv();?></td>
              <td><?=$carv->getName();?></td>
              <td><img src="./assets/images/<?=$carv->getPicture();?>" alt="" width="100" id="pict_b-e"></td>
              <td id="coll_b-e3"><?=$carv->getDimension();?></td>
              <td id="coll_b-e"><?=$carv->getDate();?></td>
              <td id="coll_b-e2"><?=substr($carv->getContent(),0,250);?></td>
              <td><?=$carv->getPrice();?></td>
              <td><?=$carv->getCategory()->getName_cat();?></td>
           
              <td class="text-center">
                <a class="btn btn-warning" href="index.php?action=edit_carv&id=<?=$carv->getId_carv();?>">
                    <i class="fas fa-pen" id="butt_b-e"></i>
                </a>
              </td>
              <?php if($_SESSION['Auth']->id_g != 3){ ?>
              <td  class="text-center">
                <a class="btn btn-danger" href="index.php?action=delete_carv&id=<?=$carv->getId_carv();?>"
                    onclick="return confirm('Are you sure, you want to delete this carving?')">
                    <i class="fas fa-trash" id="butt_b-e2"></i>
                </a>
              </td>
              <?php } ?>
          </tr>
          <?php }}else{ echo"<tr class='text-center text-danger'><td colspan='10' >".$carvs."</td></tr>";} ?>
      </tbody>
  </table>

<?php
    $contenu = ob_get_clean();
    require_once('./views/templateAdmin.php');
?>
