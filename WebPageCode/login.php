<?php
  include("conexion.php");
  $con=conectarBD();

  //echo "Se realizo la conexion exitosamente";
  session_start();
    if (isset($_SESSION['usuario'])) {
	header('Location: profile.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de Sesion</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="ingreso/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="ingreso/css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="ingreso/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="signup.php" class="signup-image-link">Crear cuenta</a>
                        <a href="index.php" class="signup-image-link">Regresar a la pagina principal</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Iniciar Sesion</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="usuario" id="your_name" placeholder="Nombre de usuario"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Contraseña"/>
                            </div>
                          
                            <div class="form-group form-button">
                                <input type="submit" name="login" id="login" class="form-submit" value="Entrar"/>
                            </div>
                           
                        </form>                       
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php
      if(isset($_POST['login']))
      {
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $pass = hash('sha512', $password);       

        $inicio="SELECT * FROM usuario WHERE Nombre_Usuario='$usuario' AND Contraseña='$pass')";

        $ejecutarInicio=mysqli_query($con, $inicio);
        $verFilas=mysqli_num_rows($ejecutarInicio);
        $fila=mysqli_fetch_array($ejecutarInicio);

        if($verFilas=1)
        {
            $_SESSION['usuario'] = $usuario;

            if($fila[1]=="Cliente"){
                header('Location: index.php');
            }else{
                header('Location: admin.php');
            }
        }    else
        {
            echo'<script type="text/javascript">
        alert("Contraseña o usuario incorrecto");       
        </script>';
        }
       
      }
    ?>

    <!-- JS -->
    <script src="ingreso/vendor/jquery/jquery.min.js"></script>
    <script src="ingreso/js/main.js"></script>
</body>
</html>