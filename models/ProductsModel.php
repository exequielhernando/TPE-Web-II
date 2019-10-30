<?php
class ProductsModel {
    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=mayoristaropa;charset=utf8', 'root', '');
    }
	public function GetProducts(){
        $sentencia = $this->db->prepare( "SELECT P.*, C.name as nameCat from producto P join categoria C on P.id_category = C.id_category");
        $sentencia->execute();
        $Products = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $Products;
    }		

    public function GetProductId($id){
        //ACA FALTA MODIFICAR POR QUE EL NAME NO ME LO MUESTRA BIEN EN LUGAR DE PONER LA CATEGORIA TAMBIEN.
        $sentencia = $this->db->prepare( "SELECT P.*, C.name as nameCat from producto P join categoria C on P.id_category = C.id_category WHERE id_product=?");
        $sentencia->execute(array($id));
        $Product = $sentencia->fetchAll(PDO::FETCH_OBJ);
        //var_dump($Product[0]->description); die;
        return $Product;
    }
    public function InsertProduct($name,$description,$price,$stock,$image,$id_category){
        $sentencia = $this->db->prepare("INSERT INTO producto(name,description,price,stock,image,id_category) VALUES(?,?,?,?,?,?)");
        $sentencia->execute(array($name,$description,$price,$stock,$image,$id_category));
    }
    public function BorrarOneProduct($id_product){
        $sentencia = $this->db->prepare("DELETE FROM producto WHERE id_product=?");
        $sentencia->execute(array($id_product));
    }

    // public function SetId_categoriaProducts($id){
    //     $sentencia =  $this->db->prepare("UPDATE producto SET id_category WHERE id=?");
    //     $sentencia->execute(array($id));
    // }
    // public function SetDescripcionProducts($id){
    //     $sentencia =  $this->db->prepare("UPDATE producto SET description WHERE id=?");
    //     $sentencia->execute(array($id));
    // }
    // public function SetPrecioProducts($id){
    //     $sentencia =  $this->db->prepare("UPDATE producto SET price WHERE id=?");
    //     $sentencia->execute(array($id));
    // }
    // public function SetStockProducts($id){
    //     $sentencia =  $this->db->prepare("UPDATE producto SET stock WHERE id=?");
    //     $sentencia->execute(array($id));
    // }
    // public function SetImagenesProducts($id){
    //     $sentencia =  $this->db->prepare("UPDATE producto SET image WHERE id=?");
    //     $sentencia->execute(array($id));
    // }

    function EditProduct($name,$description,$price,$stock,$image,$nameCat,$id_product){
        $sentencia = $this->db->prepare("UPDATE producto SET name = ?, description = ?, price = ?, stock = ?, image = ?, nameCat = ?, where id_product = ?");
        $sentencia -> execute(array($name,$description,$price,$stock,$image,$nameCat,$id_product));
    }
//PROTOTIPO
    // public function UpdateProduct($id,$id_product,$description,$price,$stock,$image,$id_category){
    //     $sentencia = $this->db->prepare("UPDATE PRODUCTO SET (id_product = ?, description = ?, price = ?, stock = ?, image = ?, id_category = ?) WHERE id=?");
    //     $sentencia->execute(array($id_product,$description,$price,$stock,$image,$id_category));
    //   }
}
?>