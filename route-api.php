<?php
require_once("Router.php");
require_once("./api/controllers/ProductsApiController.php");
require_once("./api/controllers/CategoriesApiController.php");

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

// recurso solicitado
$resource = $_GET["resource"];

// método utilizado
$method = $_SERVER["REQUEST_METHOD"];

// instancia el router
$router = new Router();

// arma la tabla de ruteo
$router->addRoute("products", "GET", "ProductsApiController", "GetProducts");
$router->addRoute("products/:ID", "GET", "ProductsApiController", "GetProduct");
$router->addRoute("products/:ID", "DELETE", "ProductsApiController", "DeleteProduct");
$router->addRoute("products", "POST", "ProductsApiController", "AddProduct");
$router->addRoute("products/:ID", "PUT", "ProductsApiController", "UpdateProduct");

$router->addRoute("categories", "GET", "CategoriesApiController", "GetCategories");


// rutea
$router->route($resource, $method);
