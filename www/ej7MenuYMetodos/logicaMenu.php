<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte Switch</title>
</head>
<body>
    <?php
    
    // Hardcodeamos algunas variables
    const NOMBRE = "admin";
    $password = 123456;
    $temario = ["Repaso", "Sessions","Funciones","Callbacks","callbackFunction","Metodos Arrays","ZZZ pruebas"];

    function calcularDni($dni){
        $letras = ["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E","T"];
        // Resto de la division del dni entre 23 para que de la posicion del array con la letra
        $posicion = ($dni%23);
        // Mostramos la posicion del array
        echo "Tu letra de DNI es <strong>".$letras[$posicion]."</strong>";
        echo "<p></p>";
    }

    // Creo funcion para callback
    function suma($num1,$num2){
        return $num1+$num2;
    }
    // Meto funcion callback
    function operacion($numero1, $numero2, $callBackFunc){
        $resultado = $callBackFunc($numero1,$numero2);
        echo "El resultado de sumar".$numero1." + ".$numero2." es <strong>".$resultado."</strong><br>";
    }

    // Hacemos el switch que recibirá la $eleccion por medio del metodo GET

    switch($_GET['eleccion']){

        // Sencilla anidación de ifs else para comprobar los datos hardcodeados
        case 1: 
            if (NOMBRE == "admin"){
                echo "Usuario correcto <br>";
                if($password == 123456){
                    echo "Contraseña correcta <br>";
                } elseif ($password == 0000){
                    echo "Modifica tu contraseña cenutrio <br>";
                }
            } else {
                echo "Usuario incorrecto <br>";
            }
        break;

        // Vuelves al menu.
        case 2:
            include 'menu.php';
            break;
        
        // Dices cual es el archivo que se está ejecutando con la variable $_SERVER['PHP_SELF']
        case 3:
            echo "Se está ejecutando el fichero: ".$_SERVER['PHP_SELF']."<br>";
            break;

        // Recorremos el array "temario" que hemos introducido anterior mente y borras el ultimo elemento.
        case 4:
            // Mostramos primero sin borrar nada
            $elementos = count($temario);
            echo "<h1>El temario completo es </h1>";
            $i = 0;
            while($i<$elementos){
                echo $temario[$i]."<br>";
                $i++;
            }
            echo "<p></p>";

            // Borramos y guardamos el elemento borrado en la variable
            $borrado = array_pop($temario); // POP borra el último elemento.
            echo "<h1> El temario sin <strong>".$borrado."</strong>, que ha sido el último eliminado.<br></h1>";
            $elementos = count($temario);
            $j = 0;
			while ($j < $elementos){
				echo $temario[$j] ."<br />";
				$j++;
			}
			echo "<p> </p>";
            break;
        
        case 5:
            // Creamos un array, que en cada posicion tiene un array con indices -> ('pais'), ('moneda') con los indices, lo otro el contenido.
            $monedaPais = array(
                array('pais'=>'España','moneda'=>'Euro'),
                array('pais'=>'Reino Unido','moneda'=>'Libra'),
                array('pais'=>'EEUU','moneda'=>'Dolar'),
                array('pais'=>'Francia','moneda'=>'Euro'),
                array('pais'=>'Portugal','moneda'=>'Euro'),
            );
            // Ordenamos el array
            sort($monedaPais);
            // Recorremos con un foreach
            foreach ($monedaPais as $x){
                if ($x['moneda'] != 'Dolar'){
                    var_dump($x);
                }
            }
            break;
        
        case 6:
            calcularDni(77160497);
            break;
        
        case 7:
            // Funcion que devuelve el año
            echo date("Y")."<br>";
            break;
        
        case 8:

            operacion(13,12,'suma');
            break;

        default:
            echo "<h1>VALOR NO VALIDO, INTENTELO DE NUEVO</h1>";
    }

    ?>

    <!-- Enlace para que se pueda volver a la pagina del menu cuando se quiera-->
    <a href="menu.php">Volver al menú</a>

</body>
</html>