<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
      <div class="formulario">
            <h2>Pagos con Paypal</h2>
            <?php
            include("conexion.php");
            $con=conectarBD();
          
            //echo "Se realizo la conexion exitosamente";
            session_start();
              if (!isset($_SESSION['usuario'])) {
            header('Location: login.php');
                $resultado = (bool) $_GET['exito'];
                $paymentId = $_GET['paymentId'];
    
              }
                if($resultado == true) {
                  header('Location: index.php');   
                }   
             ?>
        </div>
  </body>  
</html>