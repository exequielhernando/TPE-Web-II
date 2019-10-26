<?php
require_once "./Models/ProductsModel.php";
require_once "./Views/ProductsView.php";

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
   //FUNCION PRINCIPAL ENCARGADA DE MOSTRAR LOS PRODUCTOS Y LAS CATEGORIAS DE LA BASE DE DATOS EN LA TABLA DEL TEMPLATES PRODUCTS.
    public function GetProducts(){
        $Products = $this->model->GetProducts();
        $this->view->DisplayProductsId($Products);
        
    }

    public function GetEditProducts(){
        $this->checkLogIn();
        $Products = $this->model->GetProducts();
        $this->view->DisplayEditProductsId($Products);

        
    }
//----------------------INSERTA PRODUCTOS EN LA TABLA DE LA BASE DE DATOS Y LO MUESTRA EN EL SMARTY PRODUCT
public function InsertProduct(){
    $this->checkLogIn(); 
    $id_product= $_POST['id_product'];
    $description= $_POST['description'];
    $price= $_POST['price'];
    $stock= $_POST['stock'];
    $image= $_POST['image'];
    $id_category= $_POST ['id_category'];
    $this->model->InsertProduct($id_product,$description,$price,$stock,$image,$id_category);
    $Products = $this->model->GetProducts();
    $this->view->DisplayEditProductsId($Products);
    }

    public function SetId_categoriaProducts($id){
        $this->checkLogIn();
        $this->model->SetId_categoriaProducts($id);
        header("Location: " . BASE_URL);
    }
    public function SetDescripcionProducts($id){
        $this->checkLogIn();
        $this->model->SetDescripcionProducts($id);
        header("Location: " . BASE_URL);
    }
    public function SetPrecioProducts($id){
        $this->checkLogIn();
        $this->model->SetPrecioProducts($id);
        header("Location: " . BASE_URL);
    }
    public function SetStockProducts($id){
        $this->checkLogIn();
        $this->model->SetStockProducts($id);
        header("Location: " . BASE_URL);
    }
    public function SetImagenesProducts($id){
        $this->checkLogIn();
        $this->model->SetImagenesProducts($id);
        header("Location: " . BASE_URL);
    }
   
   
   //ESTO FUNCA PIOLI
    public function BorrarOneProduct($id_product){
        $this->checkLogIn();
        $this->model->BorrarOneProduct($id_product);
        $Products = $this->model->GetProducts();
        $this->view->DisplayEditProductsId($Products);

    }
    public function EditProducts($id_product){
        echo($id_product);
        $this->checkLogIn();
        $this->model->EditProducts($id_product);
        $Products = $this->model->GetProducts();
        $this->view->DisplayFormEditProduct($Products);
    }

    public function VerFormEditProduct(){
        $this->checkLogIn();

        //ACA FALTA PASARLE LOS DATOS DE LA TABLA EN EL VALUE DEL
        $this->view->VerFormEditProduct();
    }

    function UpdateProduct(){
        $this->model->UpdateProduct($id,$_POST['id_product'],$_POST['description'],$_POST['price'],$_POST['stock'],$_POST['image'],$_POST['id_category']);
        header("Location: " . URL_EDITPRODUCTS);

    }
  //EJERCICIO PARA QUE TE BUSQUE UN SOLO PRODUCTO POR ID  $team = $this->teamsModel->getTeam($id);

}

?>