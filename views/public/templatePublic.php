
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carving Wood</title>
  <link rel="stylesheet" href="./assets/css/templatePublicTopHeader.css">
  <link rel="stylesheet" href="./assets/css/templatePublicHeader.css">
  <link rel="stylesheet" href="./assets/css/templatePublicHome.css ">
  <link rel="stylesheet" href="./assets/css/templatePublicFeatures.css ">
  <link rel="stylesheet" href="./assets/css/templatePublicCarvingCat.css">
  <link rel="stylesheet" href="./assets/css/templatePublicCarvingItem.css">
  <link rel="stylesheet" href="./assets/css/templatePublicAbout.css">
  <link rel="stylesheet" href="./assets/css/templatePublicGallery.css">
  <link rel="stylesheet" href="./assets/css/templatePublicContact.css">
  <link rel="stylesheet" href="./assets/css/templatePublic.css">
  <link rel="stylesheet" href="./assets/css/templatePublicFooter.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">




</head>
<body>
   <header>
    <div class="hea_topheader">
        <ul class="hea_ul">
        
        <?php  if(!isset($_SESSION['AuthClient'])){?>
          <li><a href="index.php?action=log_cus"><i class='fa fa-lock'></i>Sign in</a></li>
          <li><a href="index.php?action=regis_cus"><i class="fa fa-plus"></i>Register</a></li>
          <?php } ?>
          <?php if(isset($_SESSION['AuthClient'])){?>
            <li>
              <a href="index.php?action=logout_cus"><i class='fa fa-unlock'></i>Deconnexion</a>
            </li>
            <li>
              <a href="index.php?action=profil_cus">
                <i class="fa fa-user"></i>Profil <?php if(isset($_SESSION['AuthClient'])){
                  echo $_SESSION['AuthClient']->login;
                  } ?>
              </a>
            </li>
          <?php } ?>
          <li><a href="#"><img src="./assets/media/sac.png" alt="" width="25px"></a></li>
          
        </ul>
    </div>
    <section id="head_down">
        <div id="head_logo">WoodArt</div>
          <nav class="head_nav" >
              <ul class="head_ul">
                  <li><a href="#" class="active">Features</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Gallery</a></li>
                  <li><a href="#">Contact</a></li>
              </ul>
          </nav>
          <div class="head_menu"><i class="fa fa-bars" style="font-size:24px"></i></div>

    </section>
<!-- <nav>
    <div class="logo">CarvingWood</div>
    <label for="btn" class="iconi">
      <span class="fa fa-bars"></span>
    </label>
    <input type="checkbox" id="btn">
    <ul id="first">
      <li>
        <a href="#">Features</a>
      </li>
      <li><a href="index.php?action=about">About</a></li>
      <li><a href="#">Gallery</a></li>
      
      <li>
        <label for="btn-1" class="show">Services +</label>
        <a href="#">Services</a>
        <input class="barre" type="checkbox" id="btn-1">
        <ul id="sec">
            <li><a href="#">Connexion</a></li>
            <li><a href="#">Register</a></li>
        </ul>
      </li>
      
      <li><a href="index.php?action=contact">Contact</a></li>
      <li><a href="#"><i class="fa fa-cart-plus" style="font-size:24px"></i></a></li>
    </ul>
  </nav> -->
  <!-- <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> -->


<!-- <nav class="d-flex justify-content-between bg-info pt-2 pb-2">
    <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        </li>
    </ul>
 
    <ul class="nav justify-content-center">
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Active</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Connexion</a></li>
                  <li><a class="dropdown-item" href="#">Register</a></li>
                   <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li> 
                </ul>
          </li>
      </ul>
      
      <ul id="badaboom" class="nav justify-content-end">
        <li class="nav-item">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
      </li>
    </ul>
</nav> -->
</header>

<main class="container mb-5 mt-5">
          <?=$contenu;?>

</main> 
<!-- <footer id="footer">
  <div class="footer-content">
      <h3>Carving Wood</h3>
      <p>Lorem, ipsum dolor.</p>
          <ul class="socials">
              <li><a href="#"><i class="fa fa-facebook" ></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" ></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus" ></i></a></li>
              <li><a href="#"><i class="fa fa-youtube" ></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin-square" ></i></a></li>
          </ul>
  </div>
  <div class="footer-bottom">
      <p>copyright &copy;2021 carvingWood. designed by <span>L.rhafell</span></p>
  </div>
</footer> -->
<footer id="footer">
<!-- <a href="#head_logo" id="ankle"><img src="./assets/media/arrow_up_5.png" alt="" width="50"></a> -->
    <div class="footer_info">
        <div class="foo_footer_width about_foo bg-secondary">
            <h2 >About</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet beatae non fugit nobis maiores esse ad, vel dolorem, quia ratione dolores repellat praesentium fugiat. Ullam earum iure quae enim blanditiis?</p>

                <div class="foo_social-media">
                    <ul class="foo_ul" >
                        <li ><a href="#" class="foo_a" ><i class="fa fa-facebook" ></i></a></li>
                        <li ><a href="#" class="foo_a"><i class="fa fa-linkedin-square" ></i></a></li>
                        <li ><a href="#" class="foo_a"><i class="fa fa-twitter" ></i></a></li>
                    </ul>
                </div>
        </div>
        <div class="foo_footer_width link_foo bg-primary">
            <h2>Quick Link</h2>
                <ul class="foo_ul">
                    <li ><a href="#" class="foo_a">Features</a></li>
                    <li ><a href="#" class="foo_a">About</a></li>
                    <li ><a href="#" class="foo_a">Gallery</a></li>
                    <li ><a href="#" class="foo_a">Connexion</a></li>
                    <li ><a href="#" class="foo_a">Register</a></li>
                    <li ><a href="#" class="foo_a">Contact</a></li>
                    
                </ul>
        </div>
        <div class="foo_footer_width contactt_foo bg-info">
            <h2 >Contact</h2>
                <ul class="foo_ul">
                    <li >
                        <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <p>
                            512 Brown paper bag mayflower Jacksonville 75094
                        </p>
                    </li>
                    <li >
                        <span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                        <a href="#" class="foo_a">carvingwood@temporary.net</a>
                    </li>
                    <li >
                        <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <a href="#" class="foo_a">000 0000 000</a>
                    </li>

                </ul>
        </div>
    </div>
    <div class="foo_copy-right">
      <p>copyright &copy;2021 carvingWood. designed by L.rhafell</p>
    </div>
</footer>

  <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script> -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="./assets/js/templatePublicGallery.js"></script>
  <script src="./assets/js/templatePublicFeatures.js"></script>
  <script src="./assets/js/templatePublicHeader.js"></script>
  <script src="./assets/js/templatePublicCarvingItem.js"></script>
  <script src="./assets/js/templatePublicHome.js"></script>
 
</html>










