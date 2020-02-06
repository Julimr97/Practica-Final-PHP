<?php

        error_reporting(E_ERROR);
        $dni = $_POST['username'];
        $contraseña = $_POST['password'];
        
        
        include('./paginaPuente.php');
        $mysqli = conectaBBDD();
        echo $dni;
        echo $contraseña;
        
        $consulta = $mysqli -> query("SELECT contraseña FROM usuarios WHERE usuario = '".$dni."';");

                
        while($fila = mysqli_fetch_assoc($consulta)){
            echo $fila['contraseña'];
            if($fila['contraseña'] == $contraseña){
                $usuario = $dni;
                header("Location: inicio.php?usuario=$usuario");
            }else{
                header("Location: login.php?usuario=incorrecto");
            }
        } 
?>

