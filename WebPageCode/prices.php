<?php
  include("conexion.php");
  $con=conectarBD();

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
                            <h2>Servicios & Tarifas<span></span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::our_service part start::-->
    <section class="our_service padding_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section_tittle">
                        <p>Nuestros servicios</p>
                        <h2>¿Que ofrecemos?</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_offer_text text-center wedding">
                    <i class="fas fa-images fa-4x"></i>
                    <br>
                        <h4>Fotografías</h4>
                        <p>DotDesign ofrece la mejor calidad en imagenes y fotos 
                            para cualquier aplicacion. </p>                        
                    </div>
                    <div class="single_offer_img d-none d-md-block">
                        <img src="img/banner_img.png" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="single_offer_img d-none d-md-block">
                        <img src="img/gallery/gallery_item_2.png" alt="">
                    </div>
                    <div class="single_offer_text text-center nature">
                    <i class="fas fa-vector-square fa-3x"></i><br>
                        <h4>Vectores e ilustraciones</h4>
                        <p>Podra contar con nosotros cuando necesite la imagen ideal para su sitio web o blog</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::our_service part end::-->

    <!--::pricing part start::-->
   <section class="pricing_part section_padding home_page_pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section_tittle">
                        <p>Tabla de precios</p>
                        <h2>Tarifa por plan</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyLjAzNSA1MTIuMDM1IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIuMDM1IDUxMi4wMzU7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIHN0eWxlPSJmaWxsOiMyMTk2RjM7IiBkPSJNNDg4LjUwMiwyNTYuMDM1bDIyLjQ2NC01OC41OTJjMi40NjQtNi40NjQsMC41NDQtMTMuNzkyLTQuODY0LTE4LjE3NmwtNDguNzA0LTM5LjQ4OGwtOS44NTYtNjEuOTg0DQoJYy0xLjA4OC02Ljg0OC02LjQ2NC0xMi4xOTItMTMuMzEyLTEzLjI4bC02MS45ODQtOS44NTZMMzMyLjc5LDUuOTIzYy00LjM1Mi01LjQwOC0xMS44NC03LjMyOC0xOC4xNDQtNC44NjRsLTU4LjYyNCwyMi40OTYNCglMMTk3LjQzLDEuMDkxYy02LjQ5Ni0yLjQ5Ni0xMy43Ni0wLjUxMi0xOC4xNDQsNC44NjRsLTM5LjQ4OCw0OC43MzZsLTYxLjk4NCw5Ljg1NmMtNi44MTYsMS4wODgtMTIuMTkyLDYuNDY0LTEzLjI4LDEzLjI4DQoJbC05Ljg1Niw2MS45ODRMNS45NDIsMTc5LjI5OWMtNS4zNzYsNC4zNTItNy4zMjgsMTEuNjgtNC44NjQsMTguMTQ0bDIyLjQ2NCw1OC41OTJMMS4wNzgsMzE0LjYyNw0KCWMtMi40OTYsNi40NjQtMC41MTIsMTMuNzkyLDQuODY0LDE4LjE0NGw0OC43MzYsMzkuNDU2bDkuODU2LDYxLjk4NGMxLjA4OCw2Ljg0OCw2LjQzMiwxMi4yMjQsMTMuMjgsMTMuMzEybDYxLjk4NCw5Ljg1Ng0KCWwzOS40ODgsNDguNzA0YzQuMzg0LDUuNDQsMTEuNzEyLDcuMzYsMTguMTc2LDQuODY0bDU4LjU2LTIyLjQzMmw1OC41OTIsMjIuNDY0YzEuODU2LDAuNzA0LDMuNzc2LDEuMDU2LDUuNzI4LDEuMDU2DQoJYzQuNzA0LDAsOS4zNDQtMi4wOCwxMi40NDgtNS45NTJsMzkuNDU2LTQ4LjcwNGw2MS45ODQtOS44NTZjNi44NDgtMS4wODgsMTIuMjI0LTYuNDY0LDEzLjMxMi0xMy4zMTJsOS44NTYtNjEuOTg0bDQ4LjcwNC0zOS40NTYNCgljNS40MDgtNC4zODQsNy4zMjgtMTEuNjgsNC44NjQtMTguMTQ0TDQ4OC41MDIsMjU2LjAzNXoiLz4NCjxnPg0KCTxwYXRoIHN0eWxlPSJmaWxsOiNGQUZBRkE7IiBkPSJNMTEyLjAyMiwyMDguMDM1YzguODMyLDAsMTYtNy4xNjgsMTYtMTZzLTcuMTY4LTE2LTE2LTE2aC0zMmMtOC44MzIsMC0xNiw3LjE2OC0xNiwxNnYxMjgNCgkJYzAsOC44MzIsNy4xNjgsMTYsMTYsMTZzMTYtNy4xNjgsMTYtMTZ2LTQ4aDE2YzguODMyLDAsMTYtNy4xNjgsMTYtMTZzLTcuMTY4LTE2LTE2LTE2aC0xNnYtMzJIMTEyLjAyMnoiLz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojRkFGQUZBOyIgZD0iTTMzNi4wMjIsMjA4LjAzNWM4LjgzMiwwLDE2LTcuMTY4LDE2LTE2cy03LjE2OC0xNi0xNi0xNmgtMzJjLTguODMyLDAtMTYsNy4xNjgtMTYsMTZ2MTI4DQoJCWMwLDguODMyLDcuMTY4LDE2LDE2LDE2aDMyYzguODMyLDAsMTYtNy4xNjgsMTYtMTZzLTcuMTY4LTE2LTE2LTE2aC0xNnYtMzJoMTZjOC44MzIsMCwxNi03LjE2OCwxNi0xNnMtNy4xNjgtMTYtMTYtMTZoLTE2di0zMg0KCQlIMzM2LjAyMnoiLz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojRkFGQUZBOyIgZD0iTTQzMi4wMjIsMjcyLjAzNWM4LjgzMiwwLDE2LTcuMTY4LDE2LTE2cy03LjE2OC0xNi0xNi0xNmgtMTZ2LTMyaDE2YzguODMyLDAsMTYtNy4xNjgsMTYtMTYNCgkJcy03LjE2OC0xNi0xNi0xNmgtMzJjLTguODMyLDAtMTYsNy4xNjgtMTYsMTZ2MTI4YzAsOC44MzIsNy4xNjgsMTYsMTYsMTZoMzJjOC44MzIsMCwxNi03LjE2OCwxNi0xNnMtNy4xNjgtMTYtMTYtMTZoLTE2di0zMg0KCQlINDMyLjAyMnoiLz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojRkFGQUZBOyIgZD0iTTI1Ni4wMjIsMjI0LjAzNWMwLTI2LjQ2NC0yMS41MzYtNDgtNDgtNDhoLTMyYy04LjgzMiwwLTE2LDcuMTY4LTE2LDE2djEyOGMwLDguODMyLDcuMTY4LDE2LDE2LDE2DQoJCXMxNi03LjE2OCwxNi0xNnYtMzcuMzQ0bDM1LjIsNDYuOTQ0YzMuMTM2LDQuMTkyLDcuOTM2LDYuNCwxMi44LDYuNGMzLjMyOCwwLDYuNjg4LTEuMDI0LDkuNTY4LTMuMg0KCQljNy4wNzItNS4zMTIsOC41MTItMTUuMzI4LDMuMi0yMi40bC0zMC41Ni00MC44QzI0MS43MTgsMjYzLjU1NSwyNTYuMDIyLDI0NS41MzksMjU2LjAyMiwyMjQuMDM1eiBNMjA4LjAyMiwyNDAuMDM1aC0xNnYtMzJoMTYNCgkJYzguODMyLDAsMTYsNy4xNjgsMTYsMTZTMjE2Ljg1NCwyNDAuMDM1LDIwOC4wMjIsMjQwLjAzNXoiLz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" />    
                        <p>Sin costo</p>
                        </div>
                        <div class="pricing_content">
                            <h3>$0.00 </h3>
                            <ul>
                                <li>Contenido Gratuito</li>                                                            
                                <li>Soporte 24/7</li>
                            </ul>
                            <a href="Shop.php" class="btn_2">Mas...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                       <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBhdGggc3R5bGU9ImZpbGw6IzQ4OTlEMjsiIGQ9Ik00MjMuMDk3LDI5Mi43NjFjMzguMS0yNy44OSw0Ni4zNzItODEuMzc5LDE4LjQ4Mi0xMTkuNDc5UzM2MC4yLDEyNi45MSwzMjIuMSwxNTQuOA0KCXMtNDYuMzcyLDgxLjM3OS0xOC40ODIsMTE5LjQ3OWM1LjE3OSw3LjA3MiwxMS40MTEsMTMuMzAzLDE4LjQ4MiwxOC40ODJjLTE0LjkxOSw1Ljg1My0yOC43MiwxNC4yMjYtNDAuODA1LDI0Ljc0MQ0KCWM3LjE4Miw3LjY5OSwxMy41NTIsMTYuMTEsMTkuMDE4LDI1LjExMWM0NC4wODItMzkuOTY1LDExMi4yMTMtMzYuNjIzLDE1Mi4xNzgsNy40NTljMTQuNTg2LDE2LjA5MSwyMy45NjYsMzYuMjA3LDI2LjkyLDU3LjcxOA0KCUgzMjIuNDdjMCw0LjgwMSwwLjczOSw5LjIzMiwwLjczOSwxNC40OTR2MS4yOTJIMjMzLjI5YzAsOC43MTUsNy4wNjIsMTUuNzg3LDE1Ljc4NywxNS43ODdjMC4wNjUsMCwwLjEyLDAsMC4xODUsMGgyNDYuOTUzDQoJYzguNzE1LDAsMTUuNzg3LTcuMDcyLDE1Ljc4Ny0xNS43ODd2LTEuMDE2QzUxMS45MTcsMzY1LjExMSw0NzYuNjMzLDMxMy41ODgsNDIzLjA5NywyOTIuNzYxeiBNMzcyLjU5OSwxNjkuOTc3DQoJYzI5Ljc3MywwLDUzLjkxNCwyNC4xNDEsNTMuOTE0LDUzLjkxNHMtMjQuMTQxLDUzLjkxNC01My45MTQsNTMuOTE0cy01My45MTQtMjQuMTQxLTUzLjkxNC01My45MTRsMCwwDQoJQzMxOC43NCwxOTQuMTM3LDM0Mi44NDQsMTcwLjAyMywzNzIuNTk5LDE2OS45Nzd6Ii8+DQo8cGF0aCBzdHlsZT0iZmlsbDojMjkzQzdEOyIgZD0iTTIyMy41MDQsMjYxLjkyN2M0Ny45NDEtMzAuMDc3LDYyLjQxNy05My4zMjUsMzIuMzMtMTQxLjI2NnMtOTMuMzI1LTYyLjQxNy0xNDEuMjY2LTMyLjMzOQ0KCXMtNjIuNDE3LDkzLjMzNC0zMi4zMywxNDEuMjc1YzguMjA3LDEzLjA3MiwxOS4yNTgsMjQuMTIzLDMyLjMzLDMyLjMzQzQ2LjA2NywyODUuNDUsMC4wNTUsMzQ5Ljg2LDAsNDIyLjI4NHYxLjI5Mg0KCWMwLDguNzE1LDcuMDcyLDE1Ljc4NiwxNS43ODcsMTUuNzg2aDMwNy4zMjljOC43MTUsMCwxNS43ODYtNy4wNzIsMTUuNzg2LTE1Ljc4NnYtMS4yOTINCglDMzM4LjcyNywzNDkuNjM5LDI5Mi4zMjcsMjg1LjE2MywyMjMuNTA0LDI2MS45Mjd6IE0xNjkuMDM2LDEwNC4zMzljMzkuMjA4LDAsNzAuOTkzLDMxLjc4NSw3MC45OTMsNzAuOTkzDQoJcy0zMS43ODUsNzAuOTkzLTcwLjk5Myw3MC45OTNzLTcwLjk5My0zMS43ODUtNzAuOTkzLTcwLjk5M2MwLTAuMDI4LDAtMC4wNjUsMC0wLjA5Mg0KCUM5OC4wOTgsMTM2LjA2OSwxMjkuODY1LDEwNC4zMzksMTY5LjAzNiwxMDQuMzM5eiBNMzEuODUsNDA3Ljc5YzcuODc1LTc1Ljc2Niw3NS42NzQtMTMwLjgwNiwxNTEuNDQtMTIyLjkzMg0KCWM2NC45LDYuNzM5LDExNi4xOTIsNTguMDMyLDEyMi45MzIsMTIyLjkzMkgzMS44NXoiLz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" />
                            <p>Usuarios con cuenta</p>
                        </div>
                        <div class="pricing_content">
                            <h3>$0.00 <span>/mo</span></h3>
                            <ul>
                                <li>Contenido Free</li>
                                <li>Descargas limitadas</li>
                                <li>Compra de imagenes individuales</li>                                                               
                                <li>Soporte 24/7</li>
                            </ul>
                            <a href="login.php" class="btn_2">Mas..</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                       <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBhdGggc3R5bGU9ImZpbGw6I0ZFREY2MzsiIGQ9Ik00NTMuMywyMjQuODhjLTUuNDMtNS40OS0xMi45Ny04Ljg4LTIxLjMtOC44OGMtMTYuNTcsMC0zMCwxMy40My0zMCwzMA0KCWMwLDE4LjA4NSwxNS44MTMsMzEuODUsMzMuNCwyOS44MWwtMTMuMDMsMTUuNjhDNDA5LjQ2LDMwNy4wMiwzODcuMzIsMzE2LDM2Ny4xMywzMTZjLTE4LjEyMiwwLTM4LjM1My03LjIyMy01MS4wMi0xOS44OUwyOTYsMjc2DQoJaDEwYzE2LjU3LDAsMzAtMTMuNDMsMzAtMzBzLTEzLjQzLTMwLTMwLTMwaC0xNS4zNWM0Ljg2LTguNCw2Ljc1LTE4Ljc0LDQuMjQtMjkuNTdjLTMuNC0xNC42NC0xNS42Ny0yNi41Mi0zMC4zOS0yOS41NQ0KCUMyMzguNjksMTUxLjU3LDIxNiwxNzEuMTMsMjE2LDE5NmMwLDcuMjksMS45NSwxNC4xMiw1LjM1LDIwSDIwNmMtMTYuNTcsMC0zMCwxMy40My0zMCwzMHMxMy40MywzMCwzMCwzMGgxMGwtMjAuMTEsMjAuMTENCglDMTgzLjE2LDMwOC44NCwxNjIuODgsMzE2LDE0NC44NywzMTZjLTIwLjQzNiwwLTQyLjQ5My05LjE1NC01NS4yNC0yNC41MUw3Ni42LDI3NS44MUM5NC4yMDksMjc3Ljg1MiwxMTAsMjY0LjA2LDExMCwyNDYNCgljMC0xNi41Ny0xMy40My0zMC0zMC0zMGMtOC4zMywwLTE1Ljg3LDMuMzktMjEuMyw4Ljg4QzQ5LjEsMjA3LjMsMzAuNTQsMTk2LDEwLDE5Nmw2NiwyMjBjMCw3LjMyMSwwLDU5LjEzMiwwLDY2DQoJYzAsMTEuMDUsOC45NSwyMCwyMCwyMGgzMjBjMTEuMDUsMCwyMC04Ljk1LDIwLTIwYzAtNi44NjgsMC01OC42NzcsMC02Nmw2Ni0yMjBDNDgxLjQ2LDE5Niw0NjIuOSwyMDcuMyw0NTMuMywyMjQuODh6Ii8+DQo8Y2lyY2xlIHN0eWxlPSJmaWxsOiNGRDdGQTk7IiBjeD0iMjU2IiBjeT0iMzQ2IiByPSIzMCIvPg0KPHBhdGggZD0iTTI1Niw0NjljNS41MiwwLDEwLTQuNDgsMTAtMTBzLTQuNDgtMTAtMTAtMTBzLTEwLDQuNDgtMTAsMTBTMjUwLjQ4LDQ2OSwyNTYsNDY5eiIvPg0KPHBhdGggZD0iTTI0NiwxMHY2NmMwLDUuNTIyLDQuNDc4LDEwLDEwLDEwYzUuNTIyLDAsMTAtNC40NzgsMTAtMTBWMTBjMC01LjUyMi00LjQ3OC0xMC0xMC0xMEMyNTAuNDc3LDAsMjQ2LDQuNDc4LDI0NiwxMHoiLz4NCjxwYXRoIGQ9Ik00My45MjksOTMuOTI5Yy0zLjkwNSwzLjkwNS0zLjkwNSwxMC4yMzcsMCwxNC4xNDNsNTYuNTEsNTYuNTFjMy45MDYsMy45MDUsMTAuMjM3LDMuOTA1LDE0LjE0MywwDQoJYzMuOTA1LTMuOTA1LDMuOTA1LTEwLjIzNywwLTE0LjE0M2wtNTYuNTEtNTYuNTFDNTQuMTY2LDkwLjAyNCw0Ny44MzQsOTAuMDI0LDQzLjkyOSw5My45Mjl6Ii8+DQo8cGF0aCBkPSJNNDUzLjk4OCw5My44NjlsLTU2LjU2OSw1Ni41NjljLTMuOTA1LDMuOTA1LTMuOTA1LDEwLjIzNywwLDE0LjE0M2MzLjkwNywzLjkwNSwxMC4yMzYsMy45MDQsMTQuMTQzLDBsNTYuNTY5LTU2LjU2OQ0KCWMzLjkwNS0zLjkwNSwzLjkwNS0xMC4yMzcsMC0xNC4xNDNDNDY0LjIyNSw4OS45NjUsNDU3Ljg5NSw4OS45NjUsNDUzLjk4OCw5My44Njl6Ii8+DQo8cGF0aCBkPSJNNTAyLDE4NmMtMjAuMTQ5LDAtMzguOTIzLDkuMjI5LTUxLjIxNiwyNC42NTlDNDQ1LjA3NiwyMDcuNjE0LDQzOC42NjcsMjA2LDQzMiwyMDZjLTIyLjA1NiwwLTQwLDE3Ljk0NC00MCw0MA0KCWMwLDE2LjU3LDEwLjEzLDMwLjgyLDI0LjUyMSwzNi44ODRsLTEuODQsMi4yMTRDNDA0LjI4NiwyOTcuNiwzODUuMTc4LDMwNiwzNjcuMTMsMzA2Yy0xNS4zMTQsMC0zMy4wODQtNi4wOTctNDMuOTQ4LTE2Ljk2MQ0KCWwtNC45NTEtNC45NTFDMzM0LjMyMywyNzguOTA5LDM0NiwyNjMuNzkzLDM0NiwyNDZjMC0yMi4wNTYtMTcuOTQ0LTQwLTQwLTQwaC0xLjAxNGMxLjQzNi03LjA5MiwxLjMzOS0xNC41MjEtMC4zNTUtMjEuODMyDQoJYy00LjI2NS0xOC4zNjUtMTkuNTgyLTMzLjI2OC0zOC4xMTYtMzcuMDgzQzIzNC43MTgsMTQwLjUzNiwyMDYsMTY0LjU4OCwyMDYsMTk2YzAsMy4zNzEsMC4zNDEsNi43MjMsMS4wMDgsMTBIMjA2DQoJYy0yMi4wNTYsMC00MCwxNy45NDQtNDAsNDBjMCwxNy43OTMsMTEuNjc3LDMyLjkwOSwyNy43NywzOC4wODhsLTQuOTUxLDQuOTUxQzE3OC41MTYsMjk5LjM0MywxNjEuMjY1LDMwNiwxNDQuODcsMzA2DQoJYy0xNy40NTYsMC0zNi43MTEtNy44NDUtNDcuNTQ5LTIwLjlsLTEuODQxLTIuMjE2QzEwOS44NzEsMjc2LjgyLDEyMCwyNjIuNTcsMTIwLDI0NmMwLTIyLjA1Ni0xNy45NDQtNDAtNDAtNDANCgljLTYuNjY3LDAtMTMuMDc2LDEuNjE0LTE4Ljc4NCw0LjY1OUM0OC45MjMsMTk1LjIyOSwzMC4xNSwxODYsMTAsMTg2Yy0zLjE2MSwwLTYuMTM2LDEuNDk0LTguMDIzLDQuMDNzLTIuNDYzLDUuODE1LTEuNTU1LDguODQzDQoJTDYyLjU2LDQwNkg1NmMtNS41MjMsMC0xMCw0LjQ3OC0xMCwxMHM0LjQ3NywxMCwxMCwxMGgxMHY1NmMwLDE2LjU0MiwxMy40NTgsMzAsMzAsMzBoMzIwYzE2LjU0MiwwLDMwLTEzLjQ1OCwzMC0zMHYtNTZoMTANCgljNS41MjIsMCwxMC00LjQ3OCwxMC0xMHMtNC40NzgtMTAtMTAtMTBoLTYuNTZsNjIuMTM4LTIwNy4xMjdjMC45MDgtMy4wMjcsMC4zMzItNi4zMDctMS41NTYtOC44NDMNCglDNTA4LjEzNiwxODcuNDk0LDUwNS4xNjEsMTg2LDUwMiwxODZ6IE00MjYsNDQ5SDI5NmMtNS41MjIsMC0xMCw0LjQ3OC0xMCwxMHM0LjQ3OCwxMCwxMCwxMGgxMzB2MTNjMCw1LjUxNC00LjQ4NiwxMC0xMCwxMEg5Ng0KCWMtNS41MTQsMC0xMC00LjQ4Ni0xMC0xMHYtMTNoMTMwYzUuNTIzLDAsMTAtNC40NzgsMTAtMTBzLTQuNDc3LTEwLTEwLTEwSDg2di0yM2gzNDBWNDQ5eiBNNDI4LjU2LDQwNkg4My40NEwyNC4xMTIsMjA4LjIzOA0KCWMxMC44NjEsMy41NCwyMC4xNjksMTEuMTAzLDI1LjgxMiwyMS40MzVjMy4yMTgsNS44OTEsMTEuMTk4LDYuOTc5LDE1Ljg4NywyLjIzOEM2OS41ODEsMjI4LjEsNzQuNjIsMjI2LDgwLDIyNg0KCWMxMS4wMjgsMCwyMCw4Ljk3MiwyMCwyMGMwLDEyLjA3Ni0xMC42MywyMS4yMzgtMjIuMjQsMTkuODc3Yy00LjA2My0wLjQ2OC04LjAwMiwxLjU3MS05Ljk1MSw1LjE2Ng0KCWMtMS45NDksMy41OTQtMS41MTQsOC4wMTMsMS4wOTksMTEuMTU3bDEzLjAyNywxNS42NzhDOTYuNzcsMzE1Ljc0NiwxMjEuNzU5LDMyNiwxNDQuODcsMzI2YzIxLjc1NiwwLDQ0LjAxNi04Ljc0Myw1OC4wOTEtMjIuODE4DQoJbDIwLjExLTIwLjExYzIuODYtMi44NiwzLjcxNS03LjE2MSwyLjE2Ny0xMC44OThDMjIzLjY5MSwyNjguNDM3LDIyMC4wNDQsMjY2LDIxNiwyNjZoLTEwYy0xMS4wMjgsMC0yMC04Ljk3Mi0yMC0yMHM4Ljk3Mi0yMCwyMC0yMA0KCWgxNS4zNWMzLjU3NCwwLDYuODc2LTEuOTA3LDguNjYyLTUuMDAzYzEuNzg2LTMuMDk2LDEuNzg0LTYuOTA5LTAuMDA1LTEwLjAwM0MyMjcuMzg2LDIwNi40NjEsMjI2LDIwMS4yNzUsMjI2LDE5Ng0KCWMwLTE4LjQ2NCwxNi43NzUtMzMuMzgyLDM2LjQ4My0yOS4zMjVjMTAuODU0LDIuMjM0LDIwLjE3NCwxMS4yODgsMjIuNjY1LDIyLjAxNGMyLjMwNSw5Ljk0My0wLjQ0MywxNy42MTctMy4xNTQsMjIuMzA1DQoJYy0xLjc4OSwzLjA5NC0xLjc5Miw2LjkwNy0wLjAwNiwxMC4wMDNjMS43ODUsMy4wOTcsNS4wODgsNS4wMDQsOC42NjIsNS4wMDRIMzA2YzExLjAyOCwwLDIwLDguOTcyLDIwLDIwcy04Ljk3MiwyMC0yMCwyMGgtMTANCgljLTQuMDQ1LDAtNy42OTEsMi40MzctOS4yMzksNi4xNzNjLTEuNTQ4LDMuNzM3LTAuNjkxLDguMDM4LDIuMTY4LDEwLjg5OGwyMC4xMSwyMC4xMUMzMjMuNjg3LDMxNy44MjksMzQ2LjUsMzI2LDM2Ny4xMywzMjYNCgljMjQuMDI5LDAsNDguNzMtMTEuMDM2LDYyLjkzMi0yOC4xMTlsMTMuMDMtMTUuNjhjMi42MTMtMy4xNDYsMy4wNDktNy41NjQsMS4xLTExLjE1OGMtMS45NS0zLjU5NS01Ljg5Mi01LjY0MS05Ljk1MS01LjE2Ng0KCUM0MzMuNTMyLDI2NS45Niw0MzIuOCwyNjYsNDMyLDI2NmMtMTEuMDI4LDAtMjAtOC45NzItMjAtMjBzOC45NzItMjAsMjAtMjBjNS4zOCwwLDEwLjQyLDIuMSwxNC4xODksNS45MTENCgljMi4yMjMsMi4yNDgsNS4zNzgsMy4zMTMsOC41MDYsMi44NzFjMy4xMy0wLjQ0MSw1Ljg2Ni0yLjMzNiw3LjM4MS01LjEwOWM1LjY0My0xMC4zMzIsMTQuOTUxLTE3Ljg5NSwyNS44MTItMjEuNDM1TDQyOC41Niw0MDZ6Ii8+DQo8cGF0aCBkPSJNMjU2LDMwNmMtMjIuMDU2LDAtNDAsMTcuOTQ0LTQwLDQwczE3Ljk0NCw0MCw0MCw0MHM0MC0xNy45NDQsNDAtNDBTMjc4LjA1NiwzMDYsMjU2LDMwNnogTTI1NiwzNjYNCgljLTExLjAyOCwwLTIwLTguOTcyLTIwLTIwczguOTcyLTIwLDIwLTIwYzExLjAyOCwwLDIwLDguOTcyLDIwLDIwUzI2Ny4wMjgsMzY2LDI1NiwzNjZ6Ii8+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />
                            <p>Premium</p>
                        </div>
                        <div class="pricing_content">
                            <h3>$150.00 <span>MXN/ mo</span></h3>
                            <ul>                                
                                <li>Descargas ilimitadas</li>  
                                <li>Acceso a todo contenido</li>                             
                                <li>Soporte 24/7</li>
                            </ul>
                            <a href="pagar.php?producto=Suscripcion premium & precio=150" class="btn_2">Mas..</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--::pricing part end::-->

    <!--::footer_part start::-->
    <?php include('footer.php'); ?>
    <!--::footer_part end::-->

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