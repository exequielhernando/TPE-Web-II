<?php
require_once("./models/CategoryModel.php");
require_once("./api/ApiController.php");
require_once("./api/JSONView.php");

class CategoryApiController extends ApiController{
  
    public function GetCategoria($params = null) {
        $Category = $this->modelCategory->GetCategoria();
        $titulo = $Products->titulo;
        $this->view->response($Category, 200);
    }

    /**
     * Obtiene una tarea dado un ID
     * 
     * $params arreglo asociativo con los parámetros del recurso
     */
    public function getOneCategory($params = null) {
        // obtiene el parametro de la ruta
        $id = $params[':ID'];
        
        $category = $this->modelCategory->GetOneCategory($id);
        
        if ($category) {
            $this->view->response($category, 200);   
        } else {
            $this->view->response("No existe el product con el id={$id}", 404);
        }
    }

    // ProductsApiController.php
    public function BorrarOneCategory($params = []) {
        $category_id = $params[':ID'];
        $category = $this->modelCategory->BorrarOneCategory($category_id);
        $Category = $this->modelCategory->GetCategoria();
        if ($category) {
            $this->view->response("category id=$category_id eliminada con éxito", 200);
        }
        else 
            $this->view->response("category id=$category_id not found", 404);
    }

    // TareaApiController.php
   public function InsertCategory($params = []) {     
        $body = $this->getData();

        $name=  $body->name;
        $description= $body->description;
        $this->modelCategory->InsertCategory($name,$description,0);
        $Category = $this->modelCategory->GetCategoria();

    }

    // TaskApiController.php
    public function SaveEditCategory($params = []) {
        $category_id = $params[':ID'];
        $category = $this->modelCategory->SaveEditCategory($category_id);

        if ($category) {
            $body = $this->getData();

            $id_category = $body->id_category;
            $name= $body->name;
            $description= $body->description;
           
            $category = $this->model->SaveEditCategory($name,$description,$id_category);
            $this->view->response("category id=$category_id actualizada con éxito", 200);
        }
        else 
            $this->view->response("category id=$category_id not found", 404);
    }

}
