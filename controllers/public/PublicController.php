<?php

session_start();

require './vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class PublicController{

    private $pubCatM;
    private $pubCarM;
    private $pubMo;

    public function __construct()
    {
        $this->pubCatM = new AdminCategoryModel();
        $this->pubCarM = new AdminCarvingModel();
        $this->pubPicM = new AdminPictureModel();
        $this->pubMo = new PublicModel();
    }
    
    public function getPubCarving(){
        
        AuthClientController::isLoggedForIndex();
       
        if(isset($_GET['id']) && !empty($_GET['id'])){

            if( isset($_POST['submit']) && !empty($_POST['search'])){

                $search = trim(htmlspecialchars(addslashes($_POST['search'])));
                
                $tabCat = $this->pubCatM->getCategories();
                $carvs = $this->pubPicM->getPicture($search);
                var_dump($_POST);
                require_once('./views/public/features.php');
            }
            
                $id = trim(htmlentities(addslashes($_GET['id'])));
                $p = new Picture();

                $p->getCarving()->getCategory()->setId_cat($id);
                $carvsbyCat = $this->pubMo->findCarvByCat($p);
                $tabCat = $this->pubCatM->getCategories();
                require_once('./views/public/carvingCat.php');

        }else{
            if( isset($_POST['submit']) && !empty($_POST['search'])){
                $search = trim(htmlspecialchars(addslashes($_POST['search'])));
                $tabCat = $this->pubCatM->getCategories();
                $carvs = $this->pubPicM->getPicture($search);
                var_dump($_POST);
                require_once('./views/public/features.php');
            }
                $tabCat = $this->pubCatM->getCategories();
                $carvs = $this->pubPicM->getPicture();

        require_once('./views/public/features.php');
        }
    }
    //___________________________________________________________//

    public function bringBack(){
      
        
        if(isset($_POST['pass_to']) && !empty($_POST['name']) && !empty($_POST['price'])){
            
            $id = htmlspecialchars(addslashes($_POST['id_carv']));
            $name = htmlspecialchars(addslashes($_POST['name']));
            $picture = htmlspecialchars(addslashes($_POST['picture']));
            $dimension = htmlspecialchars(addslashes($_POST['dime']));
            $date = htmlspecialchars(addslashes($_POST['date']));
            $quality = htmlspecialchars(addslashes($_POST['qual']));
            $content = htmlspecialchars(addslashes($_POST['content']));
            $quantity = htmlspecialchars(addslashes($_POST['quant']));
            $price = htmlspecialchars(addslashes($_POST['price']));
            $id_cat = htmlspecialchars(addslashes($_POST['id_cat']));
            $name_cat = htmlspecialchars(addslashes($_POST['name_cat']));
            $id_pic = htmlspecialchars(addslashes($_POST['id_pic']));
            $picture_l = htmlspecialchars(addslashes($_POST['picture_l']));
            $picture_r = htmlspecialchars(addslashes($_POST['picture_r']));


            require_once('./views/public/carvingItem.php');

        }
    }
    //___________________________________________________________//

    public function payment(){
      
        if(isset($_POST) && !empty($_POST['email'])){

            
            \Stripe\Stripe::setApiKey('sk_test_51IdC0SEYTj0p2Az76g8Q530n2zC2GgwfkvjzmxmrDI3FrsH91r6CrWPfJQ1ddYCXhm3nN45aVYDdVZYoFkvNT9VN00aI8QsXPR');

                header('Content-Type: application/json');


                $checkout_session = \Stripe\Checkout\Session::create([
                    
                    'payment_method_types' => ['card'],
                    'line_items' => [[
                    'price_data' => [
                    'currency' => 'eur',
                    'unit_amount' => $_POST['price']*100,
                    'product_data' => [
                        'name' => $_POST['name']."-".$_POST['dimension'],
                        'images' => ["https://imgshare.io/image/dragonball.pXyBYP"],
                        'content' => $_POST['content'],
                        ],
                        ],
                        'quantity' => 1,
                    ]],
                    'customer_email'=>$_POST['mail'],
                    'mode' => 'payment',
                    'success_url' => 'http://localhost/php/poo/app/sculpture//index.php?action=success',
                    'cancel_url' => 'http://localhost:8080/php/poo/app/sculpture/index.php?action=cancel',
                    ]);
                        $_SESSION['pay'] = $_POST;
                    echo json_encode(['id' => $checkout_session->id]);

                }

            }

            public function confirmation(){
                    
                $carv = new Carving();
                $carv->setId_carv($_SESSION['pay']['id']);
                // var_dump($_SESSION['pay']);
            
            $email = $_SESSION['pay']['mail'];
            $name = $_SESSION['pay']['name'];
            $dimension = $_SESSION['pay']['dimension'];
            $price = $_SESSION['pay']['price'];
            $content = $_SESSION['pay']['content'];
            
            $mail = new PHPMailer(true);
            
            try {
            
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'dwwm94@gmail.com';                     //SMTP username
                $mail->Password   = 'mziyzxforjcwijpo';                                //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            
                //Recipients
                $mail->setFrom('dwwm94@gmail.com', 'Wood Art');
                $mail->addAddress($email, 'Mr/Mme');     //Add a recipient
            
            
                //Content
                $mail->isHTML(true);                                  
                $mail->Subject = 'Here is the subject';
                $mail->Body    = "
                <h2>confirmation d'achat</h2>
                <div>
                <b> Name : $name</b>
                <b> Dimension : $dimension</b>
                <b> Content : $content</b>
                <b> Price : $price €</b>
                <p>Nous vous Remercions pour votre achat, à très bientôt !</p>
                </div>";
            
                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            
            require_once('./views/public/success.php');
            
                }

    //___________________________________________________________//
   
    public function cancel(){
       
        
        
        require_once('./views/public/cancel.php');

    }
    //___________________________________________________________//

     public function valid(){
       
        
               
        require_once('./views/public/valid.php');
    
        }
    //___________________________________________________________//
    public function contact(){
        AuthClientController::isLoggedForIndex();

        require_once('./views/public/contact.php');

    }
    //___________________________________________________________//
    
    public function about(){
        AuthClientController::isLoggedForIndex();
        
        require_once('./views/public/about.php');

    }
    //___________________________________________________________//
    
    public function gallery(){
        AuthClientController::isLoggedForIndex();
         
        require_once('./views/public/gallery.php');

    }
    //___________________________________________________________//

    public function home(){
        AuthClientController::isLoggedForIndex();
         
        require_once('./views/public/home.php');

    }
}