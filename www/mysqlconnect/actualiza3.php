<?php

include_once 'conexion.php';
$idModifica = $_GET['id'];
$nombreAntiguo=$_GET['nombreImagen'];

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$directorioSubida = "img/";
$max_file_size= "5120000";
$extensionesValidas=["jpg","png","gif"];

    if($_FILES['imagen']['name']!=""){
        $errores=0;
        $nombreArchivo=$_FILES['imagen']['name'];
        $file_size=$_FILES['imagen']['size'];
        $directirioTemporal=$_FILES['imagen']['tmp_name'];
        $tipoArchivo=$_FILES['imagen']['type'];
        $arrayArchivo=pathinfo($nombreArchivo);
        $extension=$arrayArchivo['extension'];

        if(!in_array($extension,$extensionesValidas)){
            echo "Extension no válida!!!";
            $errores=1;
        }
        if($file_size>$max_file_size){
            echo "Imagen demasiado grande!!!";
            $errores=1;
        }
        if($errores==0){
            $nombreCompleto= $directorioSubida.$nombreArchivo;
            move_uploaded_file($directirioTemporal,$nombreCompleto);
        }

    }
    if($_FILES['imagen']['name'] !=""){
        $insert = "UPDATE productos SET id_producto=$idModifica, nombre='$nombre', descripcion='$descripcion', precio=$precio, fotografia='$nombreArchivo' WHERE id_producto=$idModifica";
    } else{
        $insert = "UPDATE productos SET id_producto=$idModifica, nombre='$nombre', descripcion='$descripcion', precio=$precio, fotografia='$nombreAntiguo' WHERE id_producto=$idModifica";
    }
    $conexion->query($insert);
    header("Location: index.php");


?>