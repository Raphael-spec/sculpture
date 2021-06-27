<?php ob_start();
?>
<h1 class="display-6 text-center font-verdana text-decoration-underline mt-3">Shopping list</h1>

<table class="table table-responsive-sm table-striped border border-light p-4 bg-light mt-5 rounded-3" id="table_b-e">
    <thead>
        <tr>
            <th>N° order</th>
            <th>Purchase date</th>
            <th>Total amount</th>
            <th>N° customer</th>
            <th colspan="2" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $r) { ?>
        <tr>
            <td><?=$r->getId_shop();?></td>
            <td><?=$r->getDate();?></td>
            <td><?=$r->getPrice();?>€</td>
            <td><?=$r->getCustomer()->getId_c();?></td>
        <?php  if($_SESSION['Auth']->id_g != 3){ ?>
            <td class="text-center">
                <a class="btn btn-danger" href="index.php?action=delete_shop&id=<?=$r->getId_shop()?>"
                onclick="return confirm('Are you sure, you want to delete those order?')">
                <i class="fas fa-trash" id="butt_b-e"></i></a>
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