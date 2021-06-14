<?php ob_start();?>

<div class="container logcli_si" >
    <div class="row">
        <div class="col-6 offset-3">
        <div class="row">
            <div class=" border border-primary mb-5 mt-5 p-3">
                <h1 class="display-6 text-center font-verdana text-decoration-underline ">Connexion form</h1>
             </div>
        </div>
            <?php if(isset($error)){ ?>
                <div class="alert alert-danger text-center"><?=$error;?></div>
            <?php } ?>
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">

                <label for="loginMail" class="h6">Login or Mail*</label>
                <input type="text" id="loginMail" name="loginMail" class="form-control mt-2" placeholder="Please enter your login or mail">
                
                <label for="password" class="h6">Password*</label>
                <input type="password" id="password" name="password" class="form-control mt-2" placeholder=" Please Enter your password">

                <button  type="submit" class="btn btn-primary col-12 mt-4 mb-4" name="submit">Valid</button>
            </form>


        </div>
    </div>
</div>



<?php
    $contenu = ob_get_clean();
    require_once('./views/public/templatePublic.php');
?>

