<?php
    function conectarBD()
    {
        $user="root";
        $pass="";
        $server="localhost";
        $db="dotDesign";
        $conection=mysqli_connect($server, $user, $pass, $db) or die ("Error en la conexión ".mysql_error());        

        return $conection;
    }
?>