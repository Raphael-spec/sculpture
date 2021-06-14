<?php ob_start();?>

<h1 class="display-6 text-center font-verdana text-decoration-underline mt-3 mb-5">Customer Registration Form</h1>
 <div class="container ">
     <div class="row ">
         <div class="col-8 offset-2  p-4 bg-light">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="text-center" enctype="multipart/form-data">
                    
                    <div class="row border border-success mt-4">
                            <div class="col-6">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Please enter a name">
                            </div>
                            <div class="col-6 mb-4">
                                <label for="firstname">Firstname</label>
                                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Please enter a firstname">
                            </div>
                    </div>
                        <div class="row mt-3 border border-secondary">
                            <div class="col-8 mt-3 ">
                                <label for="address">Address</label>
                                <input type="text" id="address" name="address" class="form-control" placeholder="Please enter an address">
                            </div>
                            <div class="col-4 mt-3">
                                <label for="cp">Cp</label>
                                <input type="text" id="cp" name="cp" class="form-control" placeholder="Please enter a cp">
                            </div>
                            <div class="col-6">
                                <label for="town">Town</label>
                                <input type="text" id="town" name="town" class="form-control" placeholder="Please enter a town">
                            </div>
                            <div class="col-6 mb-5">
                                <label for="country">Country</label>
                                <input type="text" id="country" name="country" class="form-control" placeholder="Please enter a country">
                            </div>
                        </div>
                    <div class="row mt-3 border border-secondary">
                        <div class="col-4  mt-3">
                            <label for="mail">Mail</label>
                            <input type="text" id="mail" name="mail" class="form-control" placeholder="Please enter a mail">
                        </div>
                        <div class="col-4 mt-3">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Please enter a phone">
                        </div>
                        <div class="col-4 mt-3">
                            <label for="login">Login</label>
                            <input type="text" id="login" name="login" class="form-control" placeholder="Please enter a login">
                        </div>
                        <div class="col-12 mb-5">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Please enter a password">
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-primary  col-12 mt-3 mb-4" name="submit">Add</button>
                    </div>
                </form>
            </div>
     </div>
 </div>
<?php 
    $contenu = ob_get_clean();
    require_once('./views/templateAdmin.php');
?>