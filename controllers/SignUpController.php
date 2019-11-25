<?php
require_once "./Views/SignUpView.php";
require_once "./Models/UserModel.php";

class SignUpController {

    private $model;
    private $view;
    private $view2;
	function __construct(){
        $this->view = new SignUpView();
        $this->model = new UserModel();
        $this->view2 = new UserView();
    }
    public function SignUp(){
        session_start();
        session_destroy();
        $this->view->DisplaySignUp();
    }
    public function registrarse(){
        $usuario= $_POST['usuario'];
        $pass= $_POST['pass'];
        $email= $_POST['email'];
        $name= $_POST['name'];
        $lastname= $_POST['lastname'];

        $hash = password_hash($pass, PASSWORD_DEFAULT);
        $this->model->InsertarUsuario($usuario,$hash,$email,$name,$lastname);
        $this->view2->DisplayLogin();
    }
}
?>