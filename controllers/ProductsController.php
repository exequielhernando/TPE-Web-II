<?php
require_once "./Models/ProductsModel.php";
require_once "./Views/ProductsView.php";
require_once "./Models/ProductsModel.php";
require_once "./Models/ImagesModel.php";


class ProductsController {

    private $model;
    private $view;
    private $modelcate;
    private $viewcate;
    private $modelimages;
    private $viewimages;

	function __construct(){
        
        $this->model = new ProductsModel();
        $this->view = new ProductsView();
        $this->modelcate = new CategoryModel();
        $this->viewcate = new CategoryView();
        $this->modelimages = new ImagesModel();
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
        $Images = $this->modelimages->GetImages($id);
        $this->view->DisplayOnlyProductId($Product,$Images);
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
        $image= null;
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
        $id_category =$_POST['id_category'];
        $image=null;
        //if ($_FILES['image']['name'] == null){
        //    header('Location: ' . URL_PRODUCTSADM . "/" . $id);
        //}else{
            //if ($_FILES['image']['name']) {
             //   if ($_FILES['image']['type'] == "image/jpeg" || $_FILES['image']['type'] == "image/jpg" || $_FILES['image']['type'] == "image/png") {
                  //  $this->model->InsertProduct($name,$description,$price,$stock,$_FILES['image'],$id_category);
              $this->model->InsertProduct($name,$description,$price,$stock,$image,$id_category);
                //por parametro al model $_FILES['image']
            //    }
            //}
        //}
        header('Location: ' . URL_PRODUCTSADM . "/" . $id);        
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
        $images = $this->modelimages->GetImages($id_product);

        $this->view->VerFormEditProduct($product,$category,$images);
    }


 //   public function insertImages($id){
  //      $this->checkLogIn(); 
   //     if ($_FILES['img']['name'] == null){
    //        header('Location: ' . URL_PRODUCT . "/" . $id);}
     //       else {
      //          if ($_FILES['img']['name']) {
       //             if ($_FILES['img']['type'] == "image/jpeg" || $_FILES['img']['type'] == "image/jpg" || $_FILES['img']['type'] == "image/png") {
        //                $this->modelimages->insertImages($id,$_FILES['img']); 
         //           }
          //      }
           //     else {
            //        $this->modelimages->insertImages($id,$_FILES['img']);  
             //   }
           // }
           // header('Location: ' . URL_PRODUCT . "/" . $id);
       // }

} 
?>
