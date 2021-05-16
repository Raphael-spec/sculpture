<?php

require_once('./app/autoload.php');


class Maze{

    private $ctrCat;
    private $ctrGrd;
    private $ctrUs;
    private $ctrCar;
    private $ctrPub;
    private $ctrPic;
    private $ctrCus;
    private $ctrPubCli;



    public function __construct()
    {
        $this->ctrCat = new AdminCategoryController();
        $this->ctrPic = new AdminPictureController();
        $this->ctrGrd = new AdminGradeController();
        $this->ctrUs = new AdminUserController();
        $this->ctrCus = new AdminCustomerController();
        $this->ctrCar = new AdminCarvingController();
        $this->ctrPub = new PublicController();
        $this->ctrPubCli = new PublicClientController();



    }

    public function getMaze(){

        if(isset($_GET['action'])){

                switch($_GET['action']){

                    //______________________CATEGORIES_______________________//
                    case 'list_cat':
                        $this->ctrCat->listCategories();
                        break;
                    
                    case 'delete_cat':
                        $this->ctrCat->eraseCat();
                        break;

                    case 'add_cat':
                        $this->ctrCat->addCat();
                        break;

                    case 'edit_cat':
                        $this->ctrCat->editCat();
                        break;

                    //______________________CARVING_______________________//

                    case 'list_carv':
                        $this->ctrCar->listCarving();
                        break;

                    case 'delete_carv':
                        $this->ctrCar->eraseCarving();
                        break;

                    case 'add_carv':
                        $this->ctrCar->addCarving();
                        break;
                    
                    case 'edit_carv':
                        $this->ctrCar->editCarving();
                        break;

                    //______________________PICTURES_______________________//

                    case 'list_pic':
                        $this->ctrPic->listPictures();
                        break;

                    case 'delete_pic':
                        $this->ctrPic->erasePicture();
                        break;

                    case 'add_pic':
                        $this->ctrPic->addPicture();
                        break;

                    case 'edit_pic':
                        $this->ctrPic->editPicture();
                        break;

                    //______________________GRADES_______________________//

                    case 'list_gr':
                        $this->ctrGrd->listGrades();
                        break;

                    case 'delete_gr':
                        $this->ctrGrd->eraseGr();
                        break;

                    case 'add_gr':
                        $this->ctrGrd->addGr();
                        break;

                    case 'edit_gr':
                        $this->ctrGrd->editGr();
                        break;

                    //______________________USERS_______________________//

                    case 'list_us':
                        $this->ctrUs->listUsers();
                        break;

                    case 'delete_us':
                        $this->ctrUs->eraseUser();
                        break;

                    case 'edit_us':
                        $this->ctrUs->EditUser();
                        break;                    
                        
                    case 'login':
                        $this->ctrUs->login();
                        break;

                    case 'record':
                        $this->ctrUs->addUser();
                        break;

                    case 'logout':
                        AuthController::logout();
                        break;

                    case "to_features" :
                        AuthController::logoutAndFeatures();
                        break; 
                    
                    //______________________CUSTOMERS_______________________//

                    case 'list_cus':
                        $this->ctrCus->listClients();
                        break;
    
                    case 'delete_cus':
                        $this->ctrCus->eraseClient();
                        break;
    
                    case 'add_cus':
                        $this->ctrCus->addClient();
                        break;
    
                    case 'edit_cus':
                        $this->ctrCus->editClient();
                        break;
                    
                    //______________________MENU_______________________//


                    case 'contact':
                        $this->ctrPub->contact();
                        break;

                    case 'home':
                        $this->ctrPub->home();
                        break;
                        
                    case 'gallery':
                        $this->ctrPub->gallery();
                        break;

                    case 'about':
                        $this->ctrPub->about();
                        break;
                    
                    case 'features':
                        $this->ctrPub->getPubCarving();
                         break;

                    case 'checkout':
                        $this->ctrPub->bringBack();
                        break;

                    case 'pay':
                        $this->ctrPub->payment();
                        break;

                    case 'success':
                        $this->ctrPub->confirmation();
                        break;

                    case 'cancel':
                        $this->ctrPub->cancel();
                         break;

                    case 'valid':
                        $this->ctrPub->valid();
                        break;

                    //______________________PUBLIC_CLIENT_______________________//

                    case 'regis_cus':
                        $this->ctrPubCli->RegisterClient();
                        break;
                    
                    case 'log_cus':
                        $this->ctrPubCli->loginClient();
                        break;

                    case 'profil_cus':
                            $this->ctrPubCli->profilClient();
                            break;
                        
                    case 'logout_cus':
                        AuthController::logoutClient();
                        break;
                }
        
        }else{

            $this->ctrPub->getPubCarving();
        }
    }
}