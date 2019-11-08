<?php

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("URL_PRODUCTS", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/products');
define("URL_CATEGORY", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/Ca');
define("BASE_FORMEDITPRODUCT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/formeditproduct');
define("URL_LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
define("URL_LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');
define("URL_SIGNUP", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/signup');
define("URL_PRODUCTSADM", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/productsadm');
define("URL_EDITCATEGORIA", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/editcategoria');

class ConfigApp{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
        '' => ProductsController#/',
        'products'=> ProductsController#Products',
        'producto'=> ProductsController#Product',
        'categorias'=> CategorytController#Category',
        'loguear'=> ProductsController#Login',
        'deslogear'=> ProductsController#Logout',
        'registrarse'=> ProductsController#SignUp',
        'loguear'=> ProductsController#SignIn',
        ''=> ProductController#productsbyorder',
        ''=> ProductController#FormEditProduct',
        ''=> ProductController#UpdateProduct',
        ''=> ProductController#productsadm',
        ''=> ProductController#insertproduct',
        ''=> ProductController#BorrarOneProduct',
        ''=> ProductController#editcategory',        
        ''=> ProductController#insertcategory',
        ''=> ProductController#BorrarOneCategory',
        ''=> ProductController#EditCategory',
        ''=> ProductController#UpdateCategory',
        ''=> controllerUser#iniciarSesion',
        ''=> ControllerSignUp#registrarse'
        ];

}