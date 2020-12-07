<?php
include("conexion.php");
$con=conectarBD();
session_start();
session_unset();
session_destroy();

  if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
  }
?>  