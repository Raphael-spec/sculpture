<?php ob_start();

?>
<h1 class="display-6 text-center font-verdana text-decoration-underline mt-3">Categories list</h1>

<table class="table table-responsive-sm table-striped border border-light p-4 bg-light mt-5 rounded-3" id="table_b-e">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Pictures</th>


            <th colspan="2" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($allCat as $cat) { ?>
        <tr>
            <td><?=$cat->getId_cat();?></td>
            <td><?=$cat->getName_cat();?></td>
            <td><img src="./assets/images/<?=$cat->getPicture_cat();?>" alt="" width="120" id="pict_b-e"></td>


            <td class="text-center">
                <a class="btn btn-warning" href="index.php?action=edit_cat&id=<?=$cat->getId_cat();?>">
                <i class="fas fa-pen" id="butt_b-e"></i></a>
            </td>
            <?php  if($_SESSION['Auth']->id_g != 3){ ?>
            <td class="text-center">
                <a class="btn btn-danger" href="index.php?action=delete_cat&id=<?=$cat->getId_cat();?>"
                onclick="return confirm('Are you sure, you want to delete this category?')">
                <i class="fas fa-trash" id="butt_b-e2"></i></a>
            </td>
            <?php } ?>
        </tr>
        <?php } ?>
    </tbody>

</table>


<?php
    $contenu = ob_get_clean();
    require_once('./views/templateAdmin.php');
?>