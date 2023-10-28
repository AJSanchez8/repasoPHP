<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Agenda App</title>
    <link href="./style/style.css" rel="stylesheet">
</head>
<body>
    <div id="header">
        <h1>Agenda App</h1>
    </div>
    <div id="menu">
        <?php
            echo (
                "<a class='button' href='mostrar.php'>Mostrar amigos</a>
                <a class='button' href='insertar.php'>Insertar nuevo amigo</a>
                <a class='button' href='borrar.php'>Borrar/editar amigos</a>
                <a class='button' href='editar.php'>Editar amigos</a>"
            );
        ?>
        <hr>
    </div>
</body>
</html>
