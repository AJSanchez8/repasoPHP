<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repaso casa</title>
</head>
<body>
    <?php
        echo "<h1> Primera prueba </h1>";
        $declarada = "Falso";
        //isset para ver si se ha declarado una variable o no.
        if(isset($noDeclarada) == false){
            echo "No declarado <br>";
        }
        
        if(isset($declarada)){
            echo "Declarado";
            if(is_string($declarada)){
                echo " ademas es string";
            }
        }
        
        
    ?>    


</body>
</html>