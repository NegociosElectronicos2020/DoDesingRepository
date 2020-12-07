<?php
    include("conexion.php");
    $con=conectarBD();
    
    if(isset($_POST['registrarCat']))
    {
    $name=$_POST["name"];
    $description=$_POST["description"];
 
    $insertarCat="INSERT INTO categoria (Nombre_Categoria, Descripcion_Categoria) 
                                                  VALUES 
                                                  ('$name'
                                                  , '$description')";

    $ejecutarInsertar=mysqli_query($con, $insertarCat);
        if(!$ejecutarInsertar)
        {
            echo "Error en insercion";
        }                        
       else
        {
            header('Location: products.php');
        }
    }      
?>
