<?php
require_once("./models/ProductsModel.php");
require_once("./api/controllers/ApiController.php");
require_once("./api/views/JSONView.php");

class ProductsApiController extends ApiController{
  
    public function GetProducts($params = null) {
        $products = $this->model->GetProducts();
        $this->view->response($products, 200);
    }

    /**
     * Obtiene una tarea dado un ID
     * 
     * $params arreglo asociativo con los parámetros del recurso
     */
    public function GetProduct($params = null) {
        // obtiene el parametro de la ruta
        $id = $params[':ID'];
        
        $product = $this->model->GetProductId($id);
        
        if ($product) {
            $this->view->response($product, 200);   
        } else {
            $this->view->response("No existe el producto con el id={$id}", 404);
        }
    }

    // TareasApiController.php
    public function DeleteProduct($params = []) {
        $id_product = $params[':ID'];
        $product = $this->model->GetProductId($id_product);

        if ($product) {
            $this->model->BorrarOneProduct($id_product);
            $this->view->response("Producto id=$id_product eliminado con éxito", 200);
        }
        else 
            $this->view->response("Task id=$id_product not found", 404);
    }

    // TareaApiController.php
   public function AddProduct($params = []) {     
        $product = $this->getData(); // la obtengo del body

        // inserta la tarea
        $id_product = $this->model->InsertProduct($product->titulo, $product->descripcion,$product->prioridad, 0);

        // obtengo la recien creada
        $new_product = $this->model->GetProduct($id_product);
        
        if ($new_product)
            $this->view->response($new_product, 200);
        else
            $this->view->response("Error al insertar producto", 500);

    }

    // TaskApiController.php
    public function UpdateProduct($params = []) {
        $id_product = $params[':ID'];
        $product = $this->model->GetProduct($id_product);

        if ($product) {
            $body = $this->getData();
            $name = $body->name;
            $descripcion = $body->descripcion;
            $stock = $body->stock;
            $image = $body->image;
            $id_category = $body->id_category;
            $id_product = $body->id_product;
            $tarea = $this->model->SaveEditProduct($name,$description,$price,$stock,$image,$id_category,$id_product);
            $this->view->response("Producto id=$id_product actualizado con éxito", 200);
        }
        else 
            $this->view->response("Producto id=$id_product not found", 404);
    }


}
