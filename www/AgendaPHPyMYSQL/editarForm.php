<?php
include_once('conexion.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = $_POST["nombre"];
    $query = "SELECT nombre,numero FROM agenda WHERE nombre = '$nombre'";
    $resultadoEditar = $conexion->query($query);


    if ($resultadoEditar->num_rows == 1) {
        $fila = $resultadoEditar->fetch_assoc();
        $nombre = $fila['nombre'];
        $numero = $fila['numero'];
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
                "<a class='button' href='mostrar.php'>Mostrar amigos</a>"
            );
        ?>
        <div id="add-friend-form">
        <h2>Amigo a EDITAR:</h2>
            <form action="editarFinal.php" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" <?php echo "value='$nombre'"?>required>

                <label for="numero">Teléfono:</label>
                <input type="number" min="100000000" max="999999999" id="numero" name="numero"<?php echo "value='$numero'"?> required>
            <input type="submit" value="EDITAR">
            </form>
        </div>
        <?php 
                // Hacemos consulta para ver todos los amigos de la agenda
                $queryMostrar = 'SELECT * FROM agenda';

                // Lo metemos con el objeto conexion para ejecutar consulta
                $resultadoMostrar = $conexion->query($queryMostrar);
        
                // Mostramos los resultados que nos ha dado la consulta
                echo "<ul>";
                while($row = $resultadoMostrar->fetch_assoc()){
                    echo "<li> 👥: $row[nombre] 📱 $row[numero]</li>";
                }
                echo "</ul>";
        
        ?>
    </div>
</body>
</html>

