<?php
include("conexion.php");
$con=conectarBD();
    $cat=$_GET['cat'];
    $consulta="DELETE FROM categoria WHERE Id_Categoria='$cat'";
    $ejecutarConsulta= mysqli_query($con, $consulta);
        if(!$ejecutarConsulta)
        {
            echo "Error en la consulta";
        } else
        {
            header('Location: products.php');
        }      
?>  