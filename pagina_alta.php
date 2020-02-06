<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        error_reporting(E_ERROR);
        
        $nombre = $_POST['name'];
        $correo = $_POST['correo'];
        $direccion = $_POST['direccion'];
        $codpostal = $_POST['codpostal'];
        $telefono = $_POST['telefono'];
        $password = $_POST['password'];
        
        include('./paginaPuente.php');
        $mysqli = conectaBBDD();
        
         $consulta = $mysqli -> query("INSERT INTO `usuarios`(`usuario`, `correo`, `direccion`, `cod_postal`, `telefono`, `contraseña`) VALUES ('".$nombre."', '".$correo."', '".$direccion."', '".$codpostal."', '".$telefono."', '".$password."');");
        
        if (mysqli_connect_errno()){
            echo "Imposible conectarse a la base de datos: " .
            mysqli_connect_error();
        } else {
            header("Location: login.php");
        } 
        
        ?>
        
    </body>
</html>


