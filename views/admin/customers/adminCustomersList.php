<?php ob_start();?>
<h1 class="display-6 text-center font-verdana text-decoration-underline mt-3">Customers list</h1>

<div class="row">
    <div class="col-4 offset-8 mt-5">
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" class="input-group">
            <input class="form-control text-center" type="search" name="search" id="search" placeholder="Search..." >
            <button type="submit" class="btn btn-outline-secondary" name="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
</div>
<table class="table table-striped border border-light p-4 bg-light mt-4 rounded-3">
      <thead>
          <tr>
              <th>Id_c</th>
              <th>Name</th>
              <th>Firstname</th>
              <th>Address</th>
              <th>Cp</th>
              <th>Town</th>
              <th>Country</th>
              <th>Mail</th>
              <th>Phone</th>
              <th>Login</th>
              <!-- <th>Password</th> -->
              <th colspan="2" class="text-center">Actions</th>
          </tr>
      </thead>
     <tbody>
          <tr>
          <?php if(is_array($allCus)){ foreach ($allCus as $cus) { ?>
              <td><?=$cus->getId_c();?></td>
              <td><?=$cus->getName();?></td>
              <td><?=$cus->getFirstname();?></td>
              <td><?=$cus->getAddress();?></td>
              <td><?=$cus->getCp();?></td>
              <td><?=$cus->getTown();?></td>
              <td><?=$cus->getCountry();?></td>
              <td><?=$cus->getMail();?></td>
              <td><?=$cus->getPhone();?></td>
              <td><?=$cus->getLogin();?></td>
              <!-- <td><?//=$cus->getPassword();?></td> -->
              <?php if($_SESSION['Auth']->id_g != 3){ ?>
              <td class="text-center">
                <a class="btn btn-warning" href="index.php?action=edit_cus&id=<?=$cus->getId_c();?>">
                    <i class="fas fa-pen"></i>
                </a>
              </td>
              <?php } ?>
              <?php if($_SESSION['Auth']->id_g == 1){ ?>
              <td  class="text-center">
                <a class="btn btn-danger" href="index.php?action=delete_cus&id=<?=$cus->getId_c();?>"
                    onclick="return confirm('Are you sure, you want to delete this client?')">
                    <i class="fas fa-trash"></i>
                </a>
              </td>
              <?php } ?>
          </tr>
          <?php }}else{ echo"<tr class='text-center text-danger'><td colspan='12' >".$allCus."</td></tr>";} ?>
      </tbody>
  </table>

<?php
    $contenu = ob_get_clean();
    require_once('./views/templateAdmin.php');
?>