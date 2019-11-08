<?php
require_once("./models/ProductsModel.php");
require_once("./api/ApiController.php");
require_once("./api/JSONView.php");

class TareasApiController extends ApiController{
  
    public function getProducts($params = null) {
        $Products = $this->modelProducts->GetProducts();
        $titulo = $Products->titulo;
        $this->view->response($Products, 200);
    }

    public function GetProductsByOrder($params = null) {
        $Products = $this->modelProducts->GetProductsByOrderCategory();
        $titulo = $Products->titulo;
        $this->view->response($Products, 200);
    }

    public function DetailsProduct($params = null) {
        // obtiene el parametro de la ruta
        $id = $params[':ID'];
        
        $product = $this->modelProducts->GetProductId($id);
        
        if ($product) {
            $this->view->response($product, 200);   
        } else {
            $this->view->response("No existe el product con el id={$id}", 404);
        }
    }

    public function GetProductsAdmin($params = null) {
        $Products = $this->modelProducts->GetProducts();
        $Category = $this->modelCategory->GetCategoria();
        $this->view->response($Products,$Category, 200);
    }

    public function BorrarOneProduct($params = []) {
        $product_id = $params[':ID'];
        $product = $this->modelProducts->GetProductId($product_id);

        if ($product) {
            $this->modelProducts->BorrarOneProduct($product_id);
            $this->view->response("product id=$product_id eliminada con éxito", 200);
        }
        else 
            $this->view->response("product id=$product_id not found", 404);
    }

   public function InsertProduct($params = []) {     
        $body = $this->getData();
        $name=$body->name;
        $description=$body->description;
        $price=$body->price;
        $stock=$body->stock;
        $image=$body->image;
        $id_category=$body->id_category;
        $Product = $this->modelProducts->InsertProduct($name,$description,$price,$stock,$image,$id_category,0 );
    }

    // TaskApiController.php
    public function GetEditProducts($params = []) {
        $id_product = $params[':ID'];
        $Products = $this->modelProducts->DetailsProduct($product_id);

        if ($Products) {
            $body = $this->getData();
            $id_product = $body->id_product;
            $name= $body->name;
            $description= $body->description;
            $price=$body->price;
            $stock= $body->stock;
            $image= $body->image;
            $id_category =$body->id_category;
         
           $this->modelProducts->SaveEditProduct($name,$description,$price,$stock,$image,$id_category,$id_product);
           $Products = $this->modelProducts->GetProducts();
           $Category = $this->modelCategory->GetCategoria();
            $this->view->response("product id=$id_product actualizada con éxito", 200);
   
        }
        else 
            $this->view->response("product id=$id_product not found", 404);
    }

    
    public function VerFormEditProduct($params = null) {
        // obtiene el parametro de la ruta
        $id = $params[':ID'];
        
        $product = $this->modelProducts->GetProductId($id);
        $category = $this->modelCategory->GetCategoria();
        if ($product) {
            $this->view->response($product,$category, 200);   
        } else {
            $this->view->response("No existe el product con el id={$id}", 404);
        }
    }

}
