<?php


require_once "controllers/UserController.php";
require_once "controllers/SignUpController.php";
require_once "controllers/ProductsController.php";
require_once "controllers/CategoryController.php";



$action = $_GET["action"];

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("URL_PRODUCTS", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/products');
define("URL_CATEGORY", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/Ca');

define("BASE_FORMEDITPRODUCT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/formeditproduct');
define("URL_LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
define("URL_LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');
define("URL_SIGNUP", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/signup');
define("URL_EDITPRODUCTS", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/editproducts');
define("URL_EDITCATEGORIA", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/editcategoria');

$controller = new ProductsController();
$controllercate = new CategoryController();


if($action == ''){
    $controller->GetProducts();
}else{
    if (isset($action)){
        $partesURL = explode("/", $action);

        if($partesURL[0] == "products"){
            $controller->GetProducts();
        }elseif($partesURL[0] == "category") {
            $controllercate->GetCategoria();
        }elseif($partesURL[0] == "editproducts") {
            $controller->GetEditProducts();
        }elseif($partesURL[0] == "editcategory") {
            $controllercate->GetEditCategoria();
        }elseif($partesURL[0] == "insertproduct") {
            $controller->InsertProduct();
        }
        elseif($partesURL[0] == "product") {
            $controller->DetailsProduct();
        }
        elseif($partesURL[0] == "insertcategory") {
            $controllercate->InsertCategory();
        }
        elseif($partesURL[0] == "setid_categoria") {
            $controller->SetId_categoriaProducts($partesURL[1]);
        }elseif($partesURL[0] == "setdescripcion") {
            $controller->SetDescripcionProducts($partesURL[1]);
        }elseif($partesURL[0] == "setprecio") {
            $controller->SetPrecioProducts($partesURL[1]);
        }elseif($partesURL[0] == "setstock") {
            $controller->SetStockProducts($partesURL[1]);
        }elseif($partesURL[0] == "setimagen") {
            $controller->SetImagenesProducts($partesURL[1]);
        }elseif($partesURL[0] == "BorrarOneProduct") {
            $controller->BorrarOneProduct($partesURL[1]);
        }
        elseif($partesURL[0] == "BorrarOneCategory") {
            $controllercate->BorrarOneCategory($partesURL[1]);
        }
        elseif($partesURL[0] == "EditProducts") {
            $controller->EditProducts($partesURL[1]);
        }
        elseif($partesURL[0] == "login") {
            $controllerUser = new UserController();
            $controllerUser->Login();

        }elseif($partesURL[0] == "signin") {
            $controllerUser = new UserController();
            $controllerUser->Login();

        }elseif($partesURL[0] == "iniciarSesion") {
            $controllerUser = new UserController();
            $controllerUser->IniciarSesion();

        }elseif($partesURL[0] == "signup") {
            $controllerSignUp = new SignUpController();
            $controllerSignUp->SignUp();

        }elseif($partesURL[0] == "registrarse") {
            $controllerUser2 = new SignUpController();
            $controllerUser2->registrarse();

        }elseif($partesURL[0] == "logout") {
            $controllerUser = new UserController();
            $controllerUser->Logout();
        }
        elseif($partesURL[0] == "FormEditProduct") {
            $controller = new ProductsController();
            $controller->VerFormEditProduct();
        }  
        elseif($partesURL[0] == "UpdateProduct") {
            $controller = new ProductsController();
            $controller->GetEditProducts();

        }
    }
}
?>