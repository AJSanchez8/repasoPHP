<?php
    //Empezamos la session (guardar cosas en cookies)
    session_start();

    $_SESSION["listaNombre"][]="";

    if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["nombre"])){

        $nombreGuardado = $_POST["nombre"];
        $_SESSION["listaNombre"][] = $nombreGuardado;
        header("Location ".$_SERVER["PHP_SELF"]);
    }

    
    


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios session</title>

</head>
<body>

    <form method="post" action="ej2Sessions.php">
        <label> Introduce tu nombre</label>
        <input name="nombre" id="nombre">
        <button type="submit">añadir nombre</button>
    </form>

    <ul>
        <?php 
        foreach($_SESSION["listaNombre"] as $value){
            echo "<li> Usuario con nombre: ".$value. " </li>";
        }
        ?>
    </ul>

</body>
</html>