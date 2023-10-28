<?php
include_once('conexion.php');
include('Amigo.php');

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
                <a class='button' href='borrar.php'>Borrar amigo</a>
                <a class='button' href='editar.php'>Editar amigo</a>"
            );
        ?>
        <div id="add-friend-form">
        <h2>Amigo a EDITAR:</h2>
            <form action="editarForm.php" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            <input type="submit" class='botonEditar' value="EDITAR">
            </form>
        </div>
    </div>
    <?php 
        
        // Hacemos consulta para ver todos los amigos de la agenda
        $queryMostrar = 'SELECT * FROM agenda';

        // Lo metemos con el objeto conexion para ejecutar consulta
        $resultadoMostrar = $conexion->query($queryMostrar);

        // Mostramos los resultados que nos ha dado la consulta
        echo "<ul>";
        while($row = $resultadoMostrar->fetch_assoc()){
            echo "<li> 👥: $row[nombre]  <span class='movIzq'>📱$row[numero]</span></li>";
        }
        echo "</ul>";
       
        ?>
</body>
</html>
