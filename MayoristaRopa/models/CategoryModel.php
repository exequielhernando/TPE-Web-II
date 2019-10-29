<?php
class CategoryModel {
    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=mayoristaropa;charset=utf8', 'root', '');
    }
	
    public function GetCategoria(){
        $sentencia = $this->db->prepare( "SELECT * from categoria");
        $sentencia->execute();
        $Category = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $Category;
    }	
    public function GetCategoriaId($id){
        $sentencia = $this->db->prepare( "SELECT * from categoria where id = ?");
        $sentencia->execute([$id]);
        $Category = $sentencia->fetch(PDO::FETCH_OBJ);
        return $Category;
    }
    public function BorrarOneCategory($id_category){
        $sentencia = $this->db->prepare("DELETE FROM categoria WHERE id_category=?");
        $sentencia->execute(array($id_category));
    }

    public function InsertCategory($name,$description){
        $sentencia = $this->db->prepare("INSERT INTO categoria(name,description) VALUES(?,?)");
        $sentencia->execute(array($name,$description));
    }
}
?>