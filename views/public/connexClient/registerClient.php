<?php ob_start();?>

 <div class="container regcli_si">
    <div class="row">
         <div class="col-6 offset-3">
         <h1 class="display-6 text-center font-verdana text-decoration-underline">Register Form</h1>
         <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="text-center" enctype="multipart/form-data">
                <div class="row mt-3  ">
                  <div class="row border border-info mt-4">
                        <div class="col-6 mb-4  mt-3">
                            <label for="name" class="h6">Name*</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Please enter a name" required>
                        </div>
                        <div class="col-6 mb-4 mt-3">
                            <label for="firstname " class="h6">Firstname*</label>
                            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Please enter a firstname" required>
                        </div>
                  </div>
                    <div class="row mt-3 border border-secondary">
                        <div class="col-12 mt-3 ">
                            <label for="address" class="h6">Address*</label>
                            <input type="text" id="address" name="address" class="form-control" placeholder="Please enter an address" required>
                        </div>
                        <div class="col-6 mt-3">
                            <label for="cp" class="h6">Cp*</label>
                            <input type="text" id="cp" name="cp" class="form-control" placeholder="Please enter a cp" required>
                        </div>
                        <div class="col-6 mt-3">
                            <label for="town" class="h6">Town*</label>
                            <input type="text" id="town" name="town" class="form-control" placeholder="Please enter a town" required>
                        </div>
                        <div class="col-12 mb-5 mt-3 ">
                            <label for="country" class="h6">Country*</label>
                            <input type="text" id="country" name="country" class="form-control" placeholder="Please enter a country" required>
                        </div>
                    </div>
                <div class="row mt-3 border border-secondary">
                    <div class="col-4  mt-3">
                        <label for="mail" class="h6">Mail*</label>
                        <input type="text" id="mail" name="mail" class="form-control" placeholder="Please enter a mail" required>
                    </div>
                    <div class="col-4 mt-3">
                        <label for="phone" class="h6">Phone*</label>
                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Please enter a phone" required>
                    </div>
                    <div class="col-4 mt-3">
                        <label for="login" class="h6">Login*</label>
                        <input type="text" id="login" name="login" class="form-control" placeholder="Please enter a login" required>
                    </div>
                    <div class="col-12 mb-5 mt-3">
                       <label for="password" class="h6">Password*</label>
                       <input type="password" id="password" name="password" class="form-control" placeholder="Please enter a password" required>
                   </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-primary  col-12 mt-2" name="submit">Add</button>
                </div>
            </form>
            <p class="text-danger text-start mt-3">*required fields</p>
         </div>
    </div>
 </div>
<?php 
    $contenu = ob_get_clean();
    require_once('./views/public/templatePublic.php');
?>