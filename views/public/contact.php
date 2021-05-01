<?php ob_start();  ?>

<div class="container-fluid" style="background-image:  url(./assets/images/forest.jpg); background-size: cover;">
<section class ="contact"  ">
    <div class="content">
        <h2>Contact Us</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque nesciunt ratione amet recusandae perferendis, saepe animi quae molestias sunt dolorum asperiores, omnis ad quod laboriosam. Labore perspiciatis sint maiores quam.</p>
    </div>
    <div class="inside">
        <div class="contactInfo">
            <div class="box">
                <div class="iconi"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Address</h3>
                    <p>512 Brown paper bag <br>Jacksonville <br>75094</p>
                </div>
            </div>
            <div class="box">
                <div class="iconi"><i class="fa fa-phone" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Phone</h3>
                    <p>555-708-9001</p>
                </div>
            </div>
            <div class="box">
                <div class="iconi"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Mail</h3>
                    <p>carvingwood@temporary.net</p>
                </div>
            </div>
        </div>
        <div class="contactForm">
            <form action="">
                <h2>Send Message</h2>
                <div class="inputBox">
                    <input class="inp" type="text" name="" required="required">
                    <span class="sp">Full Name</span>
                </div>
                <div class="inputBox">
                    <input class="inp" type="text" name="" required="required">
                    <span class="sp">Mail</span>
                </div>
                <div class="inputBox">
                    <textarea required></textarea>
                    <span class="sp">Type your message...</span>
                </div>
                <div class="inputBox">
                    <input class="inp" type="submit" name="" value="Send">
                </div>
            </form>
        </div>
        </div>
</section>
</div>
  
<?php $contenu = ob_get_clean();
    require_once("./views/public/templatePublic.php");
?>
