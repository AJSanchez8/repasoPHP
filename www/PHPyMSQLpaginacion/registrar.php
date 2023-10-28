<?php
include_once 'conexion.php';
include_once 'database.php';
$registro['nombre']=$_POST['nombre'];
$registro['descripcion'] = $_POST['descripcion'];
$registro['precio'] = $_POST['precio'];
$directorioSubida = "img/";
$max_file_size= "5120000";
$extensionesValidas=["jpg","png","gif"];

    if(isset($_FILES['imagen']['name'])){
        $errores=0;
        $registro['fotografia']=$_FILES['imagen']['name'];
        $file_size=$_FILES['imagen']['size'];
        $directirioTemporal=$_FILES['imagen']['tmp_name'];
        $tipoArchivo=$_FILES['imagen']['type'];
        $arrayArchivo=pathinfo($registro['fotografia']);
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
            $nombreCompleto= $directorioSubida.$registro['fotografia'];
            move_uploaded_file($directirioTemporal,$nombreCompleto);
        }

       $objetoBD->insertDB('productos', $registro);
        header("Location: index.php");
    }


?>