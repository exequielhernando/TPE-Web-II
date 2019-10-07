<?php
require_once "./Models/mayoristaropaModel.php";
require_once "./Views/mayoristaropaView.php";

class mayoristaropaController {

    private $model;
    private $view;

	function __construct(){
        
        $this->model = new mayoristaropaModel();
        $this->view = new mayoristaropaView();
    }
    
    public function checkLogIn(){
        session_start();
        
        if(!isset($_SESSION['userId'])){
            header("Location: " . URL_LOGIN);
            die();
        }

        if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 5000)) { 
            header("Location: " . URL_LOGOUT);
            die(); // destruye la sesión, y vuelve al login
        } 
        $_SESSION['LAST_ACTIVITY'] = time();
    }

    public function Getmayoristaropa(){
        $this->checkLogIn();
        $mayoristaropa = $this->model->Getmayoristaropa();
        $this->view->Displaymayoristaropa($mayoristaropa);
    }

    public function Insertarmayoristaropa(){
        $this->checkLogIn();
        $finalout = 0;
        if($_POST['finalout'] == 'on'){
            $finalout = 1;
        }
        $this->model->Insertarmayoristaropa($_POST['id_categoria'],$_POST['descripcion'],$_POST['precio'],$_POST['stock'],$_POST['imagenes'],$finalout );
        header("Location: " . BASE_URL);
    }

    public function Finalizarmayoristaropa($id){
        $this->checkLogIn();
        $this->model->Finalizarmayoristaropa($id);
        header("Location: " . BASE_URL);
    }

    public function Borrarmayoristaropa($id){
        $this->checkLogIn();
        $this->model->Borrarmayoristaropa($id);
        header("Location: " . BASE_URL);
    }
}


?>