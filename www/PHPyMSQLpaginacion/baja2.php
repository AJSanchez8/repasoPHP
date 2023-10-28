<?php
include_once 'conexion.php';

$productoBorrar= $_GET["id"];



$objetoBD->deleteDB('productos',$productoBorrar);

header("Location: baja.php");
?>
