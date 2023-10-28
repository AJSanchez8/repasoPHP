<?php

    // Creamos conexion
    $conexion = new mysqli('mysql', 'root','password123', 'productos');

    // Comprobamos conexion
    if($conexion->connect_error)
        die("La conexión ha fallado por ".$conexion->connect_error);
    


?>