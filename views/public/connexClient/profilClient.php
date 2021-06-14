<?php ob_start();?>
        
    <!-- <div class="row">
               <div class="col-4 offset-4  ">
                    <?php // if(isset($valid)){  ?>
                        <div class="alert alert-success text-center"><?//= $valid;?></div>
                    <?php //} ?>
                </div>
        </div> -->

      <!-- <div class="row">
               <div class="col-6 offset-3  ">

            <div class="accordion accordion-flush mt-5" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Your profile
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"> -->

      <div class="container procli_si ">
            <div class="row">
                 <div class="col-6 offset-3">
                    <h1 class="display-6 text-center font-verdana text-decoration-underline"><?php if(isset($_SESSION['AuthClient'])){
                        echo $_SESSION['AuthClient']->login;
                        } ?>'s Registration Form</h1>

                            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="text-center " enctype="multipart/form-data">
                                    <div class="row mt-3  ">
                                    <div class="row border border-warning mt-4 ">
                                            <div class="col-6 mt-3">
                                                <label for="name" class="h6">Name</label>
                                                <input type="text" id="name" name="name"  class="form-control" placeholder="Please enter a name" value="<?=$editClie->getName();?>">
                                            </div>
                                            <div class="col-6 mt-3 mb-4">
                                                <label for="firstname" class="h6">Firstname</label>
                                                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Please enter a firstname" value="<?=$editClie->getFirstname();?>">
                                            </div>
                                    </div>
                                        <div class="row mt-3 border border-secondary">
                                            <div class="col-12 mt-3 ">
                                                <label for="address" class="h6">Address</label>
                                                <input type="text" id="address" name="address" class="form-control" placeholder="Please enter an address" value="<?=$editClie->getAddress();?>">
                                            </div>
                                            <div class="col-6 mt-3">
                                                <label for="cp" class="h6">Cp</label>
                                                <input type="text" id="cp" name="cp" class="form-control" placeholder="Please enter a cp" value="<?=$editClie->getCp();?>">
                                            </div>
                                            <div class="col-6 mt-3">
                                                <label for="town" class="h6">Town</label>
                                                <input type="text" id="town" name="town" class="form-control" placeholder="Please enter a town" value="<?=$editClie->getTown();?>">
                                            </div>
                                            <div class="col-12 mt-3 mb-5">
                                                <label for="country" class="h6">Country</label>
                                                <input type="text" id="country" name="country" class="form-control" placeholder="Please enter a country" value="<?=$editClie->getCountry();?>">
                                            </div>
                                        </div>
                                    <div class="row mt-3 border border-secondary">
                                        <div class="col-12  mt-3">
                                            <label for="mail" class="h6">Mail</label>
                                            <input type="text" id="mail" name="mail" class="form-control" placeholder="Please enter a mail" value="<?=$editClie->getMail();?>">
                                        </div>
                                        <div class="col-6 mt-3">
                                            <label for="phone" class="h6">Phone</label>
                                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Please enter a phone" value="<?=$editClie->getPhone();?>">
                                        </div>
                                        <div class="col-6 mt-3">
                                            <label for="login" class="h6">Login</label>
                                            <input type="text" id="login" name="login" class="form-control" placeholder="Please enter a login" value="<?=$editClie->getLogin();?>">
                                        </div>
                                        <div class="col-12 mt-3 mb-5">
                                        <label for="password" class="h6">Password</label>
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Please enter a password" value="<?=$editClie->getPassword();?>">
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="">
                                            <button type="submit" class="btn btn-primary col-12 mb-5 mt-3" name="submit">Edit</button>
                                        </div>
                                    </div>
                                </form>
                        </div>
                </div>
        </div>
      
      <!-- </div>
    </div>
  </div>
</div>

</div>
        </div>  -->

<?php
    $contenu = ob_get_clean();
    require_once('./views/public/templatePublic.php');
?>

