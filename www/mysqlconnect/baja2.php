<?php
include_once 'conexion.php';

$productoBorrar= $_GET["id"];

$queryBorrar = "DELETE FROM productos WHERE id_producto='$productoBorrar' ";

$conexion->query($queryBorrar);

header("Location: index.php");
?>
