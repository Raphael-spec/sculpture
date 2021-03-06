<?php ob_start();
var_dump( $allPic);
?>
<div class="row">
    <div class="col-4 offset-8">
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" class="input-group">
            <input class="form-control text-center" type="search" name="search" id="search" placeholder="Search..." >
            <button type="submit" class="btn btn-outline-secondary" name="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
</div>
<h1 class="display-6 text-center font-verdana text-decoration-underline">Pictures list</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Picture_l</th>
            <th>Picture_r</th>
            <!-- <th>id_carv</th> -->
            <th>Name of Carv</th>



            <th colspan="2" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($allPic as $pic) { ?>
        <tr>
            <td><?=$pic->getId_pic();?></td>
            <td><img src="./assets/images/<?=$pic->getPicture_l();?>" alt="" width="120"></td>
            <td><img src="./assets/images/<?=$pic->getPicture_r();?>" alt="" width="120"></td>
            <!-- <td><?=$pic->getCarving()->getid_carv();?></td> -->
            <td><?=$pic->getCarving()->getName();?></td>


            <td class="text-center">
                <a class="btn btn-warning" href="index.php?action=edit_pic&id=<?=$pic->getId_pic();?>">
                <i class="fas fa-pen"></i></a>
            </td>
            <?php  if($_SESSION['Auth']->id_g != 3){ ?>
            <td class="text-center">
                <a class="btn btn-danger" href="index.php?action=delete_pic&id=<?=$pic->getId_pic();?>"
                onclick="return confirm('Are you sure, you want to delete those pictures?')">
                <i class="fas fa-trash"></i></a>
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