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
    <title>Productos - Admin</title>
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
    <?php
    include("header_admin.php");
    ?>

    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>                   
                    <th scope="col">Nombre del producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Vistas</th>
                    <th scope="col">Calificacion</th>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $consulta="SELECT * FROM producto";
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
                        <td class="tm-product-name">'.$fila[1].'</td>
                        <td class="tm-product-precio">'.$fila[5].'</td>
                        <td class="tm-product-vistas">'.$fila[4].'</td>
                        <td class="tm-product-cal">5</td>
                        <td class="text-center">
                          <a href="edit-product.php?producto='.$fila[0].'" class="tm-product-delete-link">
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
            <!-- table container -->
            <a href="add-product.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Añadir Productos</a>            
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
            <h2 class="tm-block-title">Categorias de Productos</h2>
            <div class="tm-product-table-container">
              <table class="table tm-table-small tm-product-table">
                <tbody>                 

                  <?php
                  $consulta="SELECT * FROM categoria";
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
                        '<tr>
                        <td class="tm-product-name">'.$fila[1].'</td>
                        <td class="text-center">
                          <a href="edit-cat.php?cat='.$fila[0].'" class="tm-product-delete-link">
                            <i class="fas fas fa-edit tm-product-delete-icon"></i>
                          </a>                         
                        </td>
                        <td class="text-center">
                          <a href="delete-cat.php?cat='.$fila[0].'" class="tm-product-delete-link">
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
            <!-- table container -->
            <form action="add-cat.php" class="tm-edit-form" method="POST">
                  <div class="form-group mb-12">
                    <label
                      for="name"
                      >Nombre de categoria
                    </label>
                    <input
                      
                      name="name"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-12">
                    <label
                      for="description"
                      >Descripcion</label
                    >
                    <textarea
                      name="description"
                      class="form-control validate"
                      rows="3"
                      required
                    ></textarea>
                  </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase" name="registrarCat">Agregar Categoria</button>
              </div>
            </form>                      
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