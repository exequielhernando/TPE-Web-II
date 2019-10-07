<?php
class UserModel {
    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=mayoristaropa;charset=utf8', 'root', '');
    }
    public function GetPassword($user){
        $sentencia = $this->db->prepare( "SELECT * FROM registry WHERE email = ?");   //CREAR TABBLA EN BASE DE DATOS SOBRE EL REGISTRO DE USUARIO
        $sentencia->execute(array($user));
        $password = $sentencia->fetch(PDO::FETCH_OBJ);
        return $password;
    }
}
?>