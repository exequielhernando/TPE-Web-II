<?php
require_once "./Models/ProductsModel.php";
require_once "./Views/ProductsView.php";
require_once "./Models/ProductsModel.php";


class ProductsController {

    private $model;
    private $view;
    private $modelcate;
    private $viewcate;

	function __construct(){
        
        $this->model = new ProductsModel();
        $this->view = new ProductsView();
        $this->modelcate = new CategoryModel();
        $this->viewcate = new CategoryView();
    }
    public function MostrarProductss(){
        $this->view->DisplayProducts();
    }
    public function checkLogIn(){
        session_start();
        
        if(!isset($_SESSION['userId'])){
            header("Location: " . URL_LOGIN);
            die();
        }

        if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 5000)) { 
            header("Location: " . URL_LOGOUT);
            die(); // destruye la sesión, y vuelve al login
        } 
        $_SESSION['LAST_ACTIVITY'] = time();
    }
    public function GetProducts(){
        $Products = $this->model->GetProducts();
        $this->view->DisplayProductsId($Products);
        
    }
    public function GetProductsByOrder(){
        $Products = $this->model->GetProductsByOrderCategory();
        $this->view->DisplayProductsId($Products);
        
    }
    public function DetailsProduct($id){
        $Product = $this->model->GetProductId($id);
        $this->view->DisplayOnlyProductId($Product);
    }
    public function GetProductsAdmin(){
        $this->checkLogIn();
        $Products = $this->model->GetProducts();
        $Category = $this->modelcate->GetCategoria();
        $this->view->DisplayEditProductsId($Products,$Category);
    }    
    public function GetEditProducts(){
        $this->checkLogIn();
        $id_product = $_POST["id_product"];
        $name= $_POST["name"];
        $description= $_POST["description"];
        $price= $_POST["price"];
        $stock= $_POST["stock"];
        $image= $_POST["image"];
        $id_category =$_POST['id_category'];
        $this->model->SaveEditProduct($name,$description,$price,$stock,$image,$id_category,$id_product);
        $Products = $this->model->GetProducts();
        $Category = $this->modelcate->GetCategoria();
        $this->view->DisplayEditProductsId($Products,$Category); 
    }
    public function InsertProduct(){
        $this->checkLogIn(); 
        $name= $_POST['name'];
        $description= $_POST['description'];
        $price= $_POST['price'];
        $stock= $_POST['stock'];
        $image= $_POST['image'];
        $id_category =$_POST['id_category'];
        $this->model->InsertProduct($name,$description,$price,$stock,$image,$id_category);
        $Products = $this->model->GetProducts();
        $Category = $this->modelcate->GetCategoria();
        $this->view->DisplayEditProductsId($Products,$Category);
    }
    public function BorrarOneProduct($id_product){
        $this->checkLogIn();
        $this->model->BorrarOneProduct($id_product);
        $Products = $this->model->GetProducts();
        $Category = $this->modelcate->GetCategoria();
        $this->view->DisplayEditProductsId($Products,$Category);

    }
    public function VerFormEditProduct($id_product){
        $this->checkLogIn();
        $product = $this->model->GetProductId($id_product);
        $category = $this->modelcate->GetCategoria();
        $this->view->VerFormEditProduct($product,$category);
    }


    public function ProductCsr(){
        $this->checkLogIn();
        $this->view->DisplayProductCsr();


    }

}
?>