<?php ob_start();?>
<h1 class="display-6 text-center font-monospace text-decoration-underline mt-3">Users List</h1>

<table class="table table-responsive-sm table-striped border border-light p-4 bg-light mt-5 rounded-3" id="table_b-e">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th id="col_b-e">Firstname</th>
            <th>Login</th>
            <th id="col_b-e2">Mail</th>
            <th>Grade</th>
            <?php if($_SESSION['Auth']->id_g == 1){ ?>
            <th class="text-center">In/Out</th>
            <th colspan="2" class="text-center">Actions</th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($allUsers as $user) { ?>
        <tr>
            <td><?=$user->getId_u();?></td>
            <td><?=$user->getName();?></td>
            <td id="coll_b-e"><?=$user->getFirstname();?></td>
            <td><?=$user->getLogin();?></td>
            <td id="coll_b-e2"><?=$user->getMail();?></td>
            <td><?=$user->getGrade()->getName_g();?></td>
            <?php if($_SESSION['Auth']->id_g == 1){ ?>


            <td class="text-center">
               
                <?php
                   echo ($user->getStatus())
                    ? "<a href='index.php?action=list_us&id=".$user->getId_u()."&status=".$user->getStatus()."' onclick='return confirm(`Are you sure you want to unlock this status?`)' class='btn btn-success'><i class='fas fa-unlock'>Unlock</i></a>"
                    : "<a href='index.php?action=list_us&id=".$user->getId_u()."&status=".$user->getStatus()."' onclick='return confirm(`Are you sure you want to lock on this status?`)' class='btn btn-danger'><i class='fas fa-lock'>Lock on</i></a>"
                ?>
            </td>
            <td class="text-center">
                <a class="btn btn-warning" href="index.php?action=edit_us&id=<?=$user->getId_u();?>">
                    <i class="fas fa-pen" id="butt_b-e"></i>
                </a>
              </td>
              <td  class="text-center">
                <a class="btn btn-danger" href="index.php?action=delete_us&id=<?=$user->getId_u();?>"
                    onclick="return confirm('Are you sure you want to delete this user?')">
                    <i class="fas fa-trash" id="butt_b-e2"></i>
                </a>
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

