<?php

class mayoristaropaModel {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=mayoristaropa;charset=utf8', 'root', '');
    }

	public function GetTareas(){
        $sentencia = $this->db->prepare( "select * from producto");
        $sentencia->execute();
        $mayoristaropa = $sentencia->fetchAll(PDO::FETCH_OBJ);
        
        return $mayoristaropa;
    }	

    public function InsertarTarea($id_categoria,$descripcion,$precio,$stock,$imagenes ){

        $sentencia = $this->db->prepare("INSERT INTO producto(id_categoria,descripcion,precio,stock,imagenes) VALUES(?,?,?,?,?)");
        $sentencia->execute(array($id_categoria,$descripcion,$precio,$stock,$imagenes));
    }

    public function FinalizarTarea($id){
        $sentencia =  $this->db->prepare("UPDATE producto SET stock=99 WHERE id=?");
        $sentencia->execute(array($id));
    }

    public function BorrarTarea($id){
        $sentencia = $this->db->prepare("DELETE FROM producto WHERE id=?");
        $sentencia->execute(array($id));
    }
}

?>