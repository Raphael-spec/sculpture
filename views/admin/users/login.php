<?php ob_start();?>

<h1 class="display-6 text-center font-verdana text-decoration-underline mt-3">Login form</h1>
<div class="container  ">
    <div class="row">
        <div class="col-6 offset-3 bg-light border border-light ">
            <?php if(isset($error)){ ?>
                <div class="alert alert-danger text-center"><?=$error;?></div>
            <?php } ?>
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">

                <label for="loginMail" class="h6">Login or Mail*</label>
                <input type="text" id="loginMail" name="loginMail" class="form-control mt-2" placeholder="Please enter your login or mail">
                
                <label for="password" class="h6 mt-3">Password*</label>
                <input type="password" id="password" name="password" class="form-control mt-2" placeholder="Please Enter your password">

                <button  type="submit" class="btn btn-primary col-12 mt-2 mb-5" name="submit">Log in</button>
            </form>


        </div>
    </div>
</div>



<?php
    $contenu = ob_get_clean();
    require_once('./views/templateAdmin.php');
?>

