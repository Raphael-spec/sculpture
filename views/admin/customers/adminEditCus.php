<?php ob_start();?>

 <div class="container">
     <div class="row">
         <div class="col-8 offset-2">
         <h1 class="display-6 text-center font-verdana text-decoration-underline"> Edit Customer Registration Form N° 0<?=$editClie->getId_c();?></h1>
         <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="text-center" enctype="multipart/form-data">
                <div class="row mt-3  ">
                  <div class="row border border-warning mt-4">
                        <div class="col-6">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Please enter a name" value="<?=$editClie->getName();?>">
                        </div>
                        <div class="col-6 mb-4">
                            <label for="firstname">Firstname</label>
                            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Please enter a firstname" value="<?=$editClie->getFirstname();?>">
                        </div>
                  </div>
                    <div class="row mt-3 border border-secondary">
                        <div class="col-8 mt-3 ">
                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" class="form-control" placeholder="Please enter an address" value="<?=$editClie->getAddress();?>">
                        </div>
                        <div class="col-4 mt-3">
                            <label for="cp">Cp</label>
                            <input type="text" id="cp" name="cp" class="form-control" placeholder="Please enter a cp" value="<?=$editClie->getCp();?>">
                        </div>
                        <div class="col-6">
                            <label for="town">Town</label>
                            <input type="text" id="town" name="town" class="form-control" placeholder="Please enter a town" value="<?=$editClie->getTown();?>">
                        </div>
                        <div class="col-6 mb-5">
                            <label for="country">Country</label>
                            <input type="text" id="country" name="country" class="form-control" placeholder="Please enter a country" value="<?=$editClie->getCountry();?>">
                        </div>
                    </div>
                <div class="row mt-3 border border-secondary">
                    <div class="col-4  mt-3">
                        <label for="mail">Mail</label>
                        <input type="text" id="mail" name="mail" class="form-control" placeholder="Please enter a mail" value="<?=$editClie->getMail();?>">
                    </div>
                    <div class="col-4 mt-3">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Please enter a phone" value="<?=$editClie->getPhone();?>">
                    </div>
                    <div class="col-4 mt-3">
                        <label for="login">Login</label>
                        <input type="text" id="login" name="login" class="form-control" placeholder="Please enter a login" value="<?=$editClie->getLogin();?>">
                    </div>
                    <div class="col-12 mb-5">
                       <label for="password">Password</label>
                       <input type="password" id="password" name="password" class="form-control" placeholder="Please enter a password" value="<?=$editClie->getPassword();?>">
                   </div>
                </div>
                <button type="submit" class="btn btn-primary  col-12 mt-3" name="submit">Edit</button>
            </form>
         </div>
     </div>
 </div>
<?php 
    $contenu = ob_get_clean();
    require_once('./views/templateAdmin.php');
?>