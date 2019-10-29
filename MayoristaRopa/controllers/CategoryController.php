<?php
require_once "./Models/CategoryModel.php";
require_once "./Views/CategoryView.php";
require_once "ProductsController.php";
require_once "UserController.php";



class CategoryController {

    private $model;
    private $view;
    private $controller;
    private $controlleruser;

	function __construct(){
        
        $this->model = new CategoryModel();
        $this->view = new CategoryView();
        $this->controller = new ProductsController();
        $this->controlleruser = new UserController();
   
    }
    public function MostrarCategoria(){
        $this->view->DisplayCategoria();
    }
    
  
    public function GetCategoria(){
        $Category = $this->model->GetCategoria();
        $this->view->DisplayCategoriaId($Category);
       
    }

    public function GetEditCategoria(){
        $this->controller->checkLogIn();
        $Category = $this->model->GetCategoria();
        $this->view->DisplayEditCategoriaId($Category);
       
    }

    public function BorrarOneCategory($id_category){
        $this->controller->checkLogIn();
        $this->model->BorrarOneCategory($id_category);
        $Category = $this->model->GetCategoria();
        $this->view->DisplayEditCategoriaId($Category);
    }

    public function InsertCategory(){
        $this->controller->checkLogIn(); 
        $name= $_POST['name'];
        $description= $_POST['description'];
      
        $this->model->InsertCategory($name,$description);
        $Category = $this->model->GetCategoria();
    
        $this->view->DisplayEditCategoriaId($Category);
        }
}
?>