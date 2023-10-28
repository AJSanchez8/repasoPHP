<?php
// Añadimos la conexion
include_once('conexion.php');
error_reporting(0);

include('Amigo.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $numero = $_POST["numero"];
    
    // Query para aregar amigo con nombre y número en SQL
    $query = "INSERT INTO agenda (nombre, numero) VALUES ('$nombre', '$numero')";

    // Añadimos al objeto conexion para ejecutar la isntruccion
    $resultadoInsertar = $conexion->query($query);

    // Comprobamos si se ha insertado con exito

    if (!$resultadoInsertar) {
        die("<p class='vacia'>Algo ha fallado</p>");
    }

}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Agenda App</title>
    <link href="./style/style2.css" rel="stylesheet">
</head>
<body>
<div id="header">
        <img src='./resources/php.png'>
        <h1>Agenda</h1>
        <a href="https://github.com/AJSanchez8/agendaPHP" target=_blank><img src='./resources/github2.png' alt='Enlace gitHub'></a>
    </div>
    <div id="menu">
        <?php

echo (
    "<a class='button' href='mostrar.php'>Mostrar amigos</a>
    <a class='button' href='insertar.php'>Insertar nuevo amigo</a>
    <a class='button' href='borrar.php'>Borrar amigos</a>
    <a class='button' href='editar.php'>Editar amigos</a>"
);
            
        ?>
        
        <div id="add-friend-form">
        <h2>Añade amigo:</h2>
            <form action="insertar.php" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="numero">Teléfono:</label>
                <input type="number" min="100000000" max="999999999" id="numero" name="numero" required>
            <input type="submit" value="Añadir Amigo">
            </form>
        </div>
        <?php
        if ($resultadoInsertar) {
            echo "<p class='exito'>AÑADIDO CON EXITO ve a mostrar o pincha en el <a href='mostrar.php'>ENLACE</a> para mostrar</p>";
        }
    
        ?>
    </div>

</body>
</html>
