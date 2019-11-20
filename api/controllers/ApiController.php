<?php

abstract class ApiController {
    protected $productsModel;
    protected $categoryModel;
    protected $userModel;
    protected $view;
    private $data; 

    public function __construct() {
        $this->view = new JSONView();
        $this->data = file_get_contents("php://input"); 
        $this->productsModel = new ProductsModel();
        $this->categoryModel = new CategoryModel();
        $this->userModel = new UserModel();
    }

    function getData(){ 
        return json_decode($this->data); 
    }  

}

?>
