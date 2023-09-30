<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ Funciones</title>
</head>
<body>
    
    <?php

        //Funcion basica como js etc
        $arrayBasico = ["Casa", "Puerta", "Perro"];
        function añade($arrayEntra){
            echo "Array ".$arrayEntra[0]." ".$arrayEntra[1]." ".$arrayEntra[2];
        }
        // añade($arrayBasico);

        //Funcion de argumento por referencia, pasa la referencia, por lo que el valor de la variable cambia una vez ejecutada la función
        
        $cadena1="Cadena primero";

        function añadePorArgumento(&$string){
            $string .= ", añado esto";
        }
        echo "Cadena antes de la funcion <strong>".$cadena1."</strong> <br>";
        añadePorArgumento($cadena1);
        echo "Cadena despues de la funcion <strong>".$cadena1."</strong> <br>";

        //Se pueden usar valores predeterminados por si no le quieres meter ninguno

        function valorPredeterminado($tipo ="PHP"){
            return "Para programar me encanta <strong>".$tipo."</strong><br>";
        }

        echo valorPredeterminado();
        echo valorPredeterminado(null);
        echo valorPredeterminado("JavaScipt y no tocar PHP :D");

?>

</body>
</html>