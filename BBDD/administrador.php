<?php
if(isset($_POST['categoria'],$_POST['producto'],$_POST['descripcion'],$_POST['nombre'],$_POST['precio'],$_POST['stock'])){ 
    $categoria = $_POST['categoria'];
    $producto = $_POST['producto'];  
    $descripcion = $_POST['descripcion'];      
    $nombre = $_POST['nombre']; 
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    echo "Categoria:" . $categoria . "<br/>"; 
    echo "Producto:" . $producto . "<br/>"; 
    echo "Descripcion: " . $descripcion . "<br/>"; 
    echo "Nombre: " . $nombre . "<br/>"; 
    echo "Precio: " . $precio . "<br/>"; 
    echo "Stock: " . $stock .  "<br/>"; 
}
?>