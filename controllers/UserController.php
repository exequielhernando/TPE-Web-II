<?php
require_once "./models/UserModel.php";
require_once "./views/UserView.php";
require_once "./controllers/SignUpController.php";
require_once "./controllers/ProductsController.php";



class UserController {
    private $model;
    private $view;
    private $controller;
	function __construct(){
        $this->model = new UserModel();
        $this->view = new UserView();
        $this->controller = new ProductsController();

    }
    public function iniciarSesion(){
        $password = $_POST['password'];
        $usuario = $this->model->getPassword($_POST['user']);
        if (isset($usuario) && password_verify($password, $usuario->pass)){
            var_dump(password_verify($password, $usuario->pass));
            session_start();
            $_SESSION['user'] = $usuario->usuario;
            $_SESSION['userId'] = $usuario->id_usuario;
            if ($usuario->is_admin==1) {
                header("Location: " . URL_PRODUCTSADM);
            }
            else {
                header("Location: " . BASE_URL);
            }
        }else{
            header("Location: " . URL_LOGIN);
        }
    }
    public function ShowUsers(){
        $Users = $this->model->GetUsers();
        $this->view->ShowUsers($Users);
    }
    public function login(){
        $this->view->DisplayLogin();
    }
    public function logout(){
        session_start();
        session_destroy();
        header("Location: " . URL_LOGIN);
    }

}