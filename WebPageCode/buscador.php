<?php
  include("conexion.php");
  $con=conectarBD();
  $buscar=$_POST['busqueda'];  
  //echo "Se realizo la conexion exitosamente";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DotDesign</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">


</head>

<body>
    <!--::header part start::-->
    <?php include('header.php'); ?>
    <!-- Header part end-->

     <!-- breadcrumb start-->
     <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Imagenes <span></span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <section class="ftco-section">
    	<div class="container">
      <div class="row align-items-center justify-content-center">
    <div class="col-lg-8">
    <form action="buscador.php" method="POST">
        <div class="form-group">
        <div class="input-group ">
        <input type="text" class="form-control" name="busqueda" placeholder='Buscar imagen'
            onfocus="this.placeholder = ''"
            onblur="this.placeholder = 'Buscar imagen'">
         <div class="input-group-append">
            <button class="button rounded-1 primary-bg text-white  btn_1"
            type="submit"> <i class="ti-search"></i> </button>
        </div>
        </div>
        </div>
    </form>
    </div>
    </div>
    		<div class="row">
    			

				<?php
                  $consulta="SELECT * FROM producto WHERE (Nombre_Producto LIKE '%".$buscar."%') 
                  OR (Descr_Producto LIKE '%".$buscar."%')";
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
						<div class="col-md-6 col-lg-3 ftco-animate">
    					<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="'.$fila[3].'" alt="Colorlib Template">    						
    					<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="image.php">'.$fila[1].'</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="price-sale">$'.$fila[6].'</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="car.php" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="wishlist.php" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>  
                        ';
                        $fila=mysqli_fetch_array($ejecutarConsulta);
                      }
                    }
                  }
                  ?>
          <div class="col text-center">
            <div class="block-27">
              <ul >
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li class=""><span>2</span></li>
                <li class=""><span>3</span></li>
                <li class=""><span>4</span></li>
                <li class=""><span>5</span></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
	    </div>
    </section>
 
				

    <!--::footer_part start::-->
    <?php include('footer.php'); ?>
    <!--::footer_part end::-->

    <?php include('librerias.php'); ?>
    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/jquery.filterizr.min.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>