<?php
class mayoristaropaModel {
    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=mayoristaropa;charset=utf8', 'root', '');
    }
	public function Getmayoristaropa(){
        $sentencia = $this->db->prepare( "select * from producto");
        $sentencia->execute();
        $mayoristaropa = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $mayoristaropa;
    }	
    public function Insertarmayoristaropa($id_categoria,$descripcion,$precio,$stock,$imagenes){
        $sentencia = $this->db->prepare("INSERT INTO producto(id_categoria,descripcion,precio,stock,imagenes) VALUES(?,?,?,?,?)");
        $sentencia->execute(array($id_categoria,$descripcion,$precio,$stock,$imagenes));
    }
    public function SetId_categoria($id){
        $sentencia =  $this->db->prepare("UPDATE producto SET id_categoria WHERE id=?");
        $sentencia->execute(array($id));
    }
    public function SetDescripcionmayoristaropa($id){
        $sentencia =  $this->db->prepare("UPDATE producto SET descripcion WHERE id=?");
        $sentencia->execute(array($id));
    }
    public function SetPreciomayoristaropa($id){
        $sentencia =  $this->db->prepare("UPDATE producto SET precio WHERE id=?");
        $sentencia->execute(array($id));
    }
    public function SetStockmayoristaropa($id){
        $sentencia =  $this->db->prepare("UPDATE producto SET stock WHERE id=?");
        $sentencia->execute(array($id));
    }
    public function SetImagenesmayoristaropa($id){
        $sentencia =  $this->db->prepare("UPDATE producto SET imagenes WHERE id=?");
        $sentencia->execute(array($id));
    }
    public function BorrarProductomayoristaropa($id){
        $sentencia = $this->db->prepare("DELETE FROM producto WHERE id=?");
        $sentencia->execute(array($id));
    }
}
?>