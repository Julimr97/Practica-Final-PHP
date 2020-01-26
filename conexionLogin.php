<?php

        error_reporting(E_ERROR);
        $dni = $_POST['username'];
        $contraseña = $_POST['password'];
        
        
        include('./paginaPuente.php');
        $mysqli = conectaBBDD();
        
        $consulta = $mysqli -> query("SELECT password FROM usuarios WHERE DNI = '".$dni."';");
        
        
        while($fila = mysqli_fetch_assoc($consulta)){
            echo $fila['password'];
            if($fila['password'] == $contraseña){
                $usuario = $dni;
                header("Location: index.php?usuario=$usuario");
            }else{
                header("Location: registro.php?usuario=incorrecto");
            }
        } 
        
         
?>

