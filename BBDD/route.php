<?php


require_once "Controllers/mayoristaropaController.php";
require_once "controllers/UserController.php";

$action = $_GET["action"];
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("URL_mayoristaropa", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/mayoristaropa');
define("URL_LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
define("URL_LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');

$controller = new mayoristaropaController();

if($action == ''){
    $controller->Getmayoristaropa();
}else{
    if (isset($action)){
        $partesURL = explode("/", $action);

        if($partesURL[0] == "mayoristaropa"){
            $controller->GetTareas();
        }elseif($partesURL[0] == "insertar") {
            $controller->InsertarTarea();
        }elseif($partesURL[0] == "finalizar") {
            $controller->FinalizarTarea($partesURL[1]);
        }elseif($partesURL[0] == "borrar") {
            $controller->BorrarTarea($partesURL[1]);
        }elseif($partesURL[0] == "login") {
            $controllerUser = new UserController();
            $controllerUser->Login();
        }elseif($partesURL[0] == "iniciarSesion") {
            $controllerUser = new UserController();
            $controllerUser->IniciarSesion();
        }elseif($partesURL[0] == "logout") {
            $controllerUser = new UserController();
            $controllerUser->Logout();
        }
    }
}

?>