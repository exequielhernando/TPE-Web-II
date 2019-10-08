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
            $controller->Getmayoristaropa();
        }elseif($partesURL[0] == "insertar") {
            $controller->Insertarmayoristaropa();
        }elseif($partesURL[0] == "setid_categoria") {
            $controller->SetId_categoria($partesURL[1]);
        }elseif($partesURL[0] == "setdescripcion") {
            $controller->SetDescripcionmayoristaropa($partesURL[1]);
        }elseif($partesURL[0] == "setprecio") {
            $controller->SetPreciomayoristaropa($partesURL[1]);
        }elseif($partesURL[0] == "setstock") {
            $controller->SetStockmayoristaropa($partesURL[1]);
        }elseif($partesURL[0] == "setimagen") {
            $controller->SetImagenesmayoristaropa($partesURL[1]);
        }elseif($partesURL[0] == "borrarproducto") {
            $controller->BorrarProductomayoristaropa($partesURL[1]);
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