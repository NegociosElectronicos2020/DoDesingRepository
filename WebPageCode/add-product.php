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

    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Agregar Producto</h2>
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
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
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
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Categoria</label
                    >
                    <select
                      class="custom-select tm-select-accounts"
                      id="category"
                      name="category1"
                    >                  
                      <option>Seleccionar categoria</option>

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
                        '
                        <option value="'.$fila[0].'">'.$fila[1].'</option>  
                        ';
                        $fila=mysqli_fetch_array($ejecutarConsulta);
                      }
                    }
                  }
                  ?>                            
                  </select>
                  </div>
                  
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Categoria 2</label
                    >
                    <select
                      class="custom-select tm-select-accounts"
                      id="category"
                      name="category2"
                    >                  
                      <option>Seleccionar categoria</option>

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
                        '
                        <option value="'.$fila[0].'">'.$fila[1].'</option>  
                        ';
                        $fila=mysqli_fetch_array($ejecutarConsulta);
                      }
                    }
                  }
                  ?>                            
                  </select>
                  </div>
                  
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Categoria 3</label
                    >
                    <select
                      class="custom-select tm-select-accounts"
                      id="category"
                      name="category3"
                    >                  
                      <option>Seleccionar categoria</option>

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
                        '
                        <option value="'.$fila[0].'">'.$fila[1].'</option>  
                        ';
                        $fila=mysqli_fetch_array($ejecutarConsulta);
                      }
                    }
                  }
                  ?>                            
                  </select>
                  </div>

                  <div class="row">                     
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="price"
                            >Precio
                          </label>
                          <input
                            id="price"
                            name="price"
                            type="text"
                            class="form-control validate"
                            required
                          />
                        </div>
                  </div>
                  
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
              <div class="form-group mb-3">
                    <label
                      for="name"
                      >Imagen
                    </label>
                    <input
                      id="image"
                      name="image"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase" name="registrarProducto">Agregar producto</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <?php
      if(isset($_POST['registrarProducto']))
      {
        $name=$_POST["name"];
        $description=$_POST["description"];
        $category=$_POST["category1"];
        $category2=$_POST["category2"];
        $category3=$_POST["category3"];
        $price=$_POST["price"];
        $image=$_POST["image"];

        $insertarProducto="INSERT INTO producto (Nombre_Producto, Descr_Producto, Imagen_Producto, Vistas, Precio) 
                                                        VALUES 
                                                        ('$name'
                                                        , '$description'
                                                        , '$image'
                                                        , 0                                                        
                                                        , $price)";

        $ejecutarInsertar=mysqli_query($con, $insertarProducto);
        if(!$ejecutarInsertar)
        {
          echo "Error en insercion";
        }
        $idProducto="SELECT Id_Producto FROM producto WHERE Nombre_Producto='$name' AND Imagen_Producto='$image'";
        $ejecutarConsulta=mysqli_query($con,$idProducto);
        $verFilas=mysqli_num_rows($ejecutarConsulta);
        $fila=mysqli_fetch_array($ejecutarConsulta);
        $producto=$fila[0];
       


        $insertarCxP="INSERT INTO categoriaxproducto (Id_Categoria, Id_Producto) VALUES ($category, $producto), 
                                                                                        ($category2, $producto),
                                                                                        ($category3, $producto)";
        $ejecutarCategorias=mysqli_query($con, $insertarCxP);
        if(!$ejecutarCategorias)
        {
          echo "Error en categorias";
        }else{
          echo'<script type="text/javascript">
        alert("Producto agregado exitosamente");       
        </script>';
        }
      }
    ?> 
    <script src="admin/js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="admin/jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="admin/js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ --> 
    <script>
      $(function() {
        $("#expire_date").datepicker();
      });
    </script>

  </body>
</html>
