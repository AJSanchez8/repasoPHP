<?php

    // Creamos la variables para la conexion
    $con = 'mysql';
    $user = 'root';
    $pswd = 'password123';
    $bd = 'entornoServidor';

    // Creamos la conexion
    $conexion = new mysqli($con,$user,$pswd,$bd);

    // Comprobamos si se ha realizado la conexión
    if($conexion->connect_error){
        die("La conexión ha fallado ${$conexion->cconnect_error}");
    }


?>