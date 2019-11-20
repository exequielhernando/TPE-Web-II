<?php
require_once("./models/ProductsModel.php");
require_once("./models/CategoryModel.php");
require_once("./models/UserModel.php");
require_once("./api/controllers/ApiController.php");
require_once("./api/views/JSONView.php");

class CategoriesApiController extends ApiController{
  
    public function GetCategories($params = null) {
        $categories = $this->categoryModel->GetCategoria();
        $this->view->response($categories, 200);
    }

    /**
     * Obtiene una tarea dado un ID
     * 
     * $params arreglo asociativo con los parámetros del recurso
     */
    public function GetCategory($params = null) {
        // obtiene el parametro de la ruta
        $id = $params[':ID'];
        
        $category = $this->categoryModel->GetCategoriaId($id);
        
        if ($category) {
            $this->view->response($category, 200);   
        } else {
            $this->view->response("No existe el producto con el id={$id}", 404);
        }
    }

    // TareasApiController.php
    public function DeleteCategory($params = []) {
        $id_category = $params[':ID'];
        $category = $this->categoryModel->GetProductId($id_category);

        if ($category) {
            $this->categoryModel->BorrarOneCategory($id_category);
            $this->view->response("Producto id=$id_category eliminado con éxito", 200);
        }
        else 
            $this->view->response("Task id=$id_category not found", 404);
    }

    // TareaApiController.php
   public function AddCategory($params = []) {     
        $category = $this->getData(); // la obtengo del body

        // inserta el producto
        $id_category = $this->categoryModel->InsertCategory($category->name, $category->description);

        // obtengo la recien creada
        $new_category = $this->categoryModel->GetCategoriaId($id_category);
        
        if ($new_category)
            $this->view->response($new_category, 200);
        else
            $this->view->response("Error al insertar producto", 500);

    }

    // TaskApiController.php
    public function UpdateCategory($params = []) {
        $id_category = $params[':ID'];
        $category = $this->categoryModel->GetCategoriaId($id_category);

        if ($category) {
            $body = $this->getData();
            $name = $body->name;
            $descripcion = $body->description;
            $id_category = $body->id_category;
            $tarea = $this->categoryModel->SaveEditCategory($name,$description,$id_category);
            $this->view->response("Category id=$id_category actualizado con éxito", 200);
        }
        else 
            $this->view->response("Category id=$id_category not found", 404);
    }


}
