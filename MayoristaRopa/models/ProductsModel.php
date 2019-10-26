<?php
class ProductsModel {
    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=mayoristaropa;charset=utf8', 'root', '');
    }
	public function GetProducts(){
        $sentencia = $this->db->prepare( "SELECT * from producto P join categoria C on P.id_category = C.id_category");
        $sentencia->execute();
        $Products = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $Products;
    }		

    public function GetProductsId($id){
        $sentencia = $this->db->prepare( "SELECT * from producto P join categoria C on P.id_category = C.id_category where P.id_producto=?");
        $sentencia->execute([$id]);
        $Products = $sentencia->fetch(PDO::FETCH_OBJ);
        return $Products;
    }
    public function InsertProduct($id_product,$description,$price,$stock,$image,$id_category){
        $sentencia = $this->db->prepare("INSERT INTO producto(id_product,description,price,stock,image,id_category) VALUES(?,?,?,?,?,?)");
        $sentencia->execute(array($id_product,$description,$price,$stock,$image,$id_category));
    }
    public function BorrarOneProduct($id_product){
        $sentencia = $this->db->prepare("DELETE FROM producto WHERE id_product=?");
        $sentencia->execute(array($id_product));
    }

    public function SetId_categoriaProducts($id){
        $sentencia =  $this->db->prepare("UPDATE producto SET id_category WHERE id=?");
        $sentencia->execute(array($id));
    }
    public function SetDescripcionProducts($id){
        $sentencia =  $this->db->prepare("UPDATE producto SET description WHERE id=?");
        $sentencia->execute(array($id));
    }
    public function SetPrecioProducts($id){
        $sentencia =  $this->db->prepare("UPDATE producto SET price WHERE id=?");
        $sentencia->execute(array($id));
    }
    public function SetStockProducts($id){
        $sentencia =  $this->db->prepare("UPDATE producto SET stock WHERE id=?");
        $sentencia->execute(array($id));
    }
    public function SetImagenesProducts($id){
        $sentencia =  $this->db->prepare("UPDATE producto SET image WHERE id=?");
        $sentencia->execute(array($id));
    }





    function EditProducts($id_product,$description,$price,$stock,$image,$id_category){
        $this->db->beginTransaction();
        $sentencia = $this->db->prepare("UPDATE producto SET (id_product,description,price,stock,image,id_category) VALUES(?,?,?,?,?,?)");
        $sentencia -> execute (array($id_product,$description,$price,$stock,$image,$id_category));
        $this-> db -> commit(); 
    }
//PROTOTIPO
    public function UpdateProduct($id,$id_product,$description,$price,$stock,$image,$id_category){
        $sentencia = $this->db->prepare("UPDATE PRODUCTO SET (id_product = ?, description = ?, price = ?, stock = ?, image = ?, id_category = ?) WHERE id=?");
        $sentencia->execute(array($id_product,$description,$price,$stock,$image,$id_category));
      }
}
?>