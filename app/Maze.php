<?php

require_once('./app/autoload.php');


class Maze{

    private $ctrCat;
    private $ctrGrd;
    private $ctrUs;
    private $ctrCar;
    private $ctrPub;



    public function __construct()
    {
        $this->ctrCat = new AdminCategoryController();
        $this->ctrGrd = new AdminGradeController();
        $this->ctrUs = new AdminUserController();
        $this->ctrCar = new AdminCarvingController();
        $this->ctrPub = new PublicController();



    }

    public function getMaze(){

        if(isset($_GET['action'])){

                switch($_GET['action']){

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

                    case 'contact':
                        $this->ctrPub->contact();
                        break;

                    case 'about':
                        $this->ctrPub->about();
                        break;
                }
        
        }else{

            $this->ctrPub->getPubCarving();
        }
    }
}