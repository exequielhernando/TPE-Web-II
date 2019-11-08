<?php

abstract class ApiController {
    protected $modelProducts;
    protected $modelCategory;
    protected $modelUser;

    protected $view;
    private $data; 

    public function __construct() {
        $this->view = new JSONView();
        $this->data = file_get_contents("php://input"); 
        $this->modelProducts = new ProductsModel();
        $this->modelCategory = new CategoryModel();
        $this->modelUser = new UserModel();
    }

    function getData(){ 
        return json_decode($this->data); 
    }  
}

?>
