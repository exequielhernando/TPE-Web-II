<?php
    include ("conexion.php");
    if(!isset ($_SESSION)) {
        session_start();
    }
    $usuario= $_POST('usuario');
    $password= $_POST('password');
    
    $consulta= "SELECT * FROM ingreso WHERE usuario='" .$usuario.'"  AND ' password='" . $password ."'" ;
    $resultado = mysql_query($consulta,$conex) or die (mysql_error());
    $fila=mysql_fetch_array($resultado);

    if(!$fila[0]){
        echo '<script language = javascript>
        alert("usuario o password errados, por favor verifique.")
        self.location= "index.html"
        </script>';
    }
    else {
        $_SESSION['id_usuario'] = $fila ['id_usuario'];
        $_SESSION['nombres'] = $fila ['nombres'];
        header("Location: pagina_usuario.php");
    }
?>