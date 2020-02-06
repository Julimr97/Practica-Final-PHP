<?php

    function conectaBBDD(){
    require('configuracion.php');
    $conexion_mysql = new mysqli($servidor, $usuario_mysql, $clave_mysql, $bd);
    $conexion_mysql -> query("SET NAMES UTF8");
    return $conexion_mysql;
    }
    
    //En las páginas para hacer la conexcion hay que llamar a:
    // include('./funciones.php');
    // $mysqli = conectaBBDD();

?>

