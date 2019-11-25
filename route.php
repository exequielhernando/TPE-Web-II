<?php


require_once "controllers/UserController.php";
require_once "controllers/SignUpController.php";
require_once "controllers/ProductsController.php";
require_once "controllers/CategoryController.php";
require_once "controllers/ImagesController.php";




$action = $_GET["action"];

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("URL_PRODUCTS", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/products');
define("URL_PRODUCT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/product');

define("URL_CATEGORY", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/Ca');
define("BASE_FORMEDITPRODUCT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/formeditproduct');
define("URL_LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
define("URL_LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');
define("URL_SIGNUP", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/signup');
define("URL_PRODUCTSADM", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/productsadm');
define("URL_EDITCATEGORIA", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/editcategoria');

$controllerProduct = new ProductsController();
$controllerCategory = new CategoryController();
$controllerUser = new UserController();
$controllerSignUp = new SignUpController();
$controllerImages = new ImagesController();

if($action == ''){
    $controllerProduct->GetProducts();
}else{
    if (isset($action)){
        $partesURL = explode("/", $action);
        
        if($partesURL[0] == "products"){
            $controllerProduct->GetProducts();
        }elseif($partesURL[0] == "FormEditProduct") {
            $controllerProduct->VerFormEditProduct($partesURL[1]);
        }elseif($partesURL[0] == "productsbyorder") {
            $controllerProduct->GetProductsByOrder();
        }elseif($partesURL[0] == "UpdateProduct") {
            $controllerProduct->GetEditProducts();
        }elseif($partesURL[0] == "productsadm"){
            $controllerProduct->GetProductsAdmin();
        }elseif($partesURL[0] == "insertproduct") {
            $controllerProduct->InsertProduct();
        }elseif($partesURL[0] == "product") {
            $controllerProduct->DetailsProduct($partesURL[1]);
        }elseif($partesURL[0] == "BorrarOneProduct") {
            $controllerProduct->BorrarOneProduct($partesURL[1]);
        }elseif($partesURL[0] == "category") {
            $controllerCategory->GetCategoria();
        }elseif($partesURL[0] == "editcategory") {
            $controllerCategory->GetEditCategoria();
        }elseif($partesURL[0] == "insertcategory") {
            $controllerCategory->InsertCategory();
        }elseif($partesURL[0] == "BorrarOneCategory") {
            $controllerCategory->BorrarOneCategory($partesURL[1]);
        }elseif($partesURL[0] == "EditCategory") {
            $controllerCategory->GetEditCategoriaId($partesURL[1]);
        }elseif($partesURL[0] == "UpdateCategory") {
            $controllerCategory->SaveEditCategory();
        }elseif($partesURL[0] == "login") {
            $controllerUser->Login();
        }elseif($partesURL[0] == "signin") {
            $controllerUser->Login();
        }elseif($partesURL[0] == "iniciarSesion") {
            $controllerUser->IniciarSesion();
        }elseif($partesURL[0] == "logout") {
            $controllerUser->Logout();
        }elseif($partesURL[0] == "signup") {
            $controllerSignUp->SignUp();
        }elseif($partesURL[0] == "registrarse") {
            $controllerSignUp->registrarse();
        }
        elseif($partesURL[0] == "addImages") {
            $controllerImages->addImages($partesURL[1]);
        }
    }
}
?>
