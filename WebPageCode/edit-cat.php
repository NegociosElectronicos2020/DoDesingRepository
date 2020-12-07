<?php
  include("conexion.php");
  $con=conectarBD();
  $cat=$_GET['cat'];	
  //echo "Se realizo la conexion exitosamente";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Editar Producto - Admin</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="admin/css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="admin/jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="admin/css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="admin/css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body>
    <?php
      include("header_admin.php");
    ?>

<?php
                  $consulta="SELECT * FROM categoria WHERE Id_Categoria='$cat'";
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
                        $id=$fila[0];
                        $nombre=$fila[1];
                        $descripcion=$fila[2];                                          
                        $fila=mysqli_fetch_array($ejecutarConsulta);
                      }
                    }
                  }
                  ?>

<div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Editar Categoria</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="" class="tm-edit-product-form" method="POST">
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Nombre del producto
                    </label>
                    <input
                      id="name"
                      name="name"
                      type="text"
                      class="form-control validate"                                        
                      value="<?php echo $nombre?>">
                    </div>
              
              <div class="form-group mb-3">
                    <label
                      for="description"
                      >Descripcion</label>
                    <textarea
                      name="description"
                      class="form-control validate"
                      rows="3"
                                         
                    > <?php echo $descripcion?>  </textarea>
                </div>
              
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase" name="editarCat">Actualizar Categoria</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="admin/js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="admin/jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="admin/js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    
  </body>
</html>
