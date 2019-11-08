<?php
require_once("Router.php");
require_once("./api/ProductsApiController.php");
require_once("./api/CategoryApiController.php");
require_once("./api/UserApiController.php");
require_once("./api/SignUpApiController.php");

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

// recurso solicitado
$resource = $_GET["resource"];

// método utilizado
$method = $_SERVER["REQUEST_METHOD"];

// instancia el router
$router = new Router();

// arma la tabla de ruteo
$router->addRoute("products", "GET", "ProductsApiController", "GetProducts");
$router->addRoute("products/:ID", "GET", "ProductsApiController", "GetProductId");
$router->addRoute("products/:ID", "DELETE", "ProductsApiController", "BorrarOneProduct");
$router->addRoute("products", "POST", "ProductsApiController", "InsertProduct");
$router->addRoute("products/:ID", "PUT", "ProductsApiController", "SaveEditProduct");


$router->addRoute("category", "GET", "CategoryApiController", "GetCategoria");
$router->addRoute("category/:ID", "GET", "CategoryApiController", "GetCategoriaId");
$router->addRoute("category/:ID", "DELETE", "CategoryApiController", "BorrarOneCategory");
$router->addRoute("category", "POST", "CategoryApiController", "InsertCategory");
$router->addRoute("category/:ID", "PUT", "CategoryApiController", "SaveEditCategory");

$router->addRoute("user/:ID", "GET", "UserApiController", "GetPassword");
$router->addRoute("user", "POST", "UserApiController", "InsertarUsuario");


// rutea
$router->route($resource, $method);
