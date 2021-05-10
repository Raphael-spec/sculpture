<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./assets/css/templateAdmin.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>

<div id="mySidebar" class="sidebar">

<div class="text-center">
  <img src="./assets/images/lilnaruto.jpeg" alt="" width="120">
</div>

<h2 class="text-end text-center text-white">Bonjour</br>
<?php if(isset($_SESSION['Auth'])){
    echo $_SESSION['Auth']->firstname;
     } ?>
     </h2>

<?php if(isset($_SESSION['Auth'])){ ?>
  
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
 
  <a href="index.php?action=logout"><i class="fas fa-sign-out-alt"></i>Log out</a>

  <div style="height:10px"></div>

  <button class="dropdown-btn"><i class="fas fa-layer-group "></i> Categories
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="index.php?action=list_cat"><i class="fas fa-list"></i> List</a>
    <a href="index.php?action=add_cat"><i class="fas fa-plus"></i> Add</a>
  </div>

  <button class="dropdown-btn"><i class="fas fa-monument "></i> Carving
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="index.php?action=list_carv"><i class="fas fa-list"></i> List</a>
    <a href="index.php?action=add_carv"><i class="fas fa-plus"></i> Add</a>
  </div>

  <button class="dropdown-btn"><i class="fas fa-camera-retro"></i> Pictures
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="index.php?action=list_pic"><i class="fas fa-list"></i> List</a>
    <?php if($_SESSION['Auth']->id_g == 1) { ?>
      <a href="index.php?action=add_pic"><i class="fas fa-plus"></i> Add</a>
    <?php } ?>
  </div>

  <button class="dropdown-btn"><i class="fas fa-user"></i> Customers
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="index.php?action=list_cus"><i class="fas fa-list"></i> List</a>
    <?php if($_SESSION['Auth']->id_g != 3) { ?>
      <a href="index.php?action=add_cus"><i class="fas fa-plus"></i> Add</a>
    <?php } ?>
  </div>

  <?php if($_SESSION['Auth']->id_g != 3) {?>
  <button class="dropdown-btn"><i class="fas fa-graduation-cap "></i> Grades
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="index.php?action=list_gr"><i class="fas fa-list"></i> List</a>
    <a href="index.php?action=add_gr"><i class="fas fa-plus"></i> Add</a>
  </div>

  <button class="dropdown-btn"><i class="fas fa-users "></i> Users
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="index.php?action=list_us"><i class="fas fa-list"></i> List</a>
    <?php if($_SESSION['Auth']->id_g == 1) { ?>
      <a href="index.php?action=record"><i class="fas fa-plus"></i> Recording</a>
    <?php } ?>
  </div>
  <?php }} ?>
  <a href="index.php" class="text-end "><i class="fas fa-arrow-circle-left"></i></a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Menu</button>  

    <div class="container mt-4 ">
        <div class="row col-6 offset-3">
            <h1 class=" text-center border border-secondary text-secondary rounded display-6">OFFICE</h1>
        </div>   
        <?= $contenu; ?>
    </div>    
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="./assets/js/templateAdmin.js"></script>
   
</body>
</html> 