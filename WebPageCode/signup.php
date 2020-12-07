<?php
include("conexion.php");
$con = conectarBD();

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
    <title>Sign Up </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="ingreso/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="ingreso/css/style.css">
</head>

<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Registro</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Nombre de usuario" required />
                            </div>
                            <div class="form-group">
                                <label for="address"><i class="zmdi zmdi-home"></i></label>
                                <input type="text" name="address" id="address" placeholder="Direccion" required />
                            </div>
                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="phone" id="phone" placeholder="Telefono" required />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="E-mail  Ej. user@ejemplo.com" required />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Contraseña" required />
                            </div>

                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Registrar" />
                            </div>
                        </form>
                    </div>

                    <?php
                    if (isset($_POST['signup'])) {
                        $name = $_POST["name"];
                        $address = $_POST["address"];
                        $phone = $_POST["phone"];
                        $email = $_POST["email"];
                        $pass = $_POST["pass"];
                        $password = hash('sha512', $pass);

                        $insertarUsuario = "INSERT INTO usuario (Rol, Nombre_Usuario, Direccion, Telefono, Emaill, Contraseña) 
                                        VALUES 
                                        ('Cliente', '$name'
                                        , '$address'
                                        , '$phone'
                                        , '$email'
                                        , '$password')";

                        $ejecutarInsertar = mysqli_query($con, $insertarUsuario);
                        if (!$ejecutarInsertar) {
                            echo "Error en insercion";
                        }else
                        {
                            header('Location: login.php');
                        }
                    }
                    ?>

                    <div class="signup-image">
                        <figure><img src="ingreso/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">Ya me encuentro registrado</a>
                        <a href="index.php" class="signup-image-link">Regresar a la pagina inicial</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="ingreso/vendor/jquery/jquery.min.js"></script>
    <script src="ingreso/js/main.js"></script>
</body>

</html>