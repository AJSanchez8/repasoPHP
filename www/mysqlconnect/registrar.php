<?php
include_once 'conexion.php';
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$directorioSubida = "img/";
$max_file_size= "5120000";
$extensionesValidas=["jpg","png","gif"];

    if(isset($_FILES['imagen']['name'])){
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

        $queryInsertar = "INSERT productos(nombre, descripcion, precio, fotografia) VALUES ('$nombre', '$descripcion', $precio, '$nombreArchivo')";
        $conexion->query($queryInsertar);
        header("Location: index.php");
    }


?>