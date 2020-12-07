<?php
  include("conexion.php");
  $con=conectarBD();

  //echo "Se realizo la conexion exitosamente";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Cuentas - Admin </title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="admin/css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="admin/css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="admin/css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body id="reportsPage">
    <div class="" id="home">
        
      <?php
        include("header_admin.php");
      ?>

      <div class="container mt-5">
        <div class="row tm-content-row">
          <div class="col-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
              <h2 class="tm-block-title">List de cuentas</h2>
              <p class="text-white">Cuentas</p>
              <select class="custom-select">
                <option value="0">Tipo de cuentas</option>
                <option value="1">Administrador</option>
                <option value="2">Cliente</option>
              </select>
            </div>

            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>                   
                    <th scope="col">Usuario</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $consulta="SELECT * FROM usuario";
                  $ejecutarConsulta= mysqli_query($con, $consulta);
                  $verFilas=mysqli_num_rows($ejecutarConsulta);
                  $fila=mysqli_fetch_array($ejecutarConsulta);

                  if(!$ejecutarConsulta)
                  {
                    echo "Error en la consulta";
                  }
                  else{
                    if($verFilas<1)
                    {
                      echo "<tr><td>Sin registros</td></tr>";
                    }else{
                      for($i=0; $i<=$fila;$i++){
                        echo 
                        '                        
                        <tr>                       
                        <td class="tm-product-name">'.$fila[2].'</td>
                        <td class="tm-product-rol">'.$fila[1].'</td>
                        <td class="tm-product-correo">'.$fila[5].'</td>
                        <td class="tm-product-tel">'.$fila[4].'</td>
                        <td class="text-center">
                          <a href="" class="tm-product-delete-link">
                            <i class="fas fa-edit tm-product-delete-icon"></i>                            
                          </a>                         
                        </td>
                        <td class="text-center">
                        <a href="#" class="tm-product-delete-link">
                          <i class="far fa-trash-alt tm-product-delete-icon"></i>
                        </a>                         
                        </td>
                        </tr>  
                        
                        ';
                        $fila=mysqli_fetch_array($ejecutarConsulta);
                      }
                    }
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>       
        </div>
      </div>
    </div>

    <script src="admin/js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="admin/js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>
