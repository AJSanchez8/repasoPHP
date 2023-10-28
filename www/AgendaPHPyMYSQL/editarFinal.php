<?php
include_once('conexion.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST["nombre"];
    $numero = $_POST['numero'];
    $query = "UPDATE agenda SET nombre = '$nombre', numero = '$numero' WHERE nombre = '$nombre' OR numero='$numero'" ;
    $resultadoEditarFinal = $conexion->query($query);
}



    header('Location: mostrar.php');


?>


