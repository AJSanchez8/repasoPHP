<?php
    // Creamos constante con un string por ejemplo
    class Camion{
        const sonido = "brum brum<br>";
    }

    // Hacemos una variable con el nombre de la clase, y con el operador :: podemos acceder a sus constantes o métodos.
    $nombreDeClase = 'Camion';
    echo $nombreDeClase::sonido;

    //Tambien podemos acceder directamente usando el nombre de la clase
    echo Camion::sonido;

    class Cerdo{
        public static $propiedadEstatica = "Soy una propiedad estática<br>";

        public static function metodoEstatico(){
            echo "Soy un método estático<br>";
        }
        function metodoPublico(){
            echo "Soy un método publico<br>";
        }
    }

    echo Cerdo::$propiedadEstatica;
    Cerdo::metodoEstatico();
    // Cerdo::metodoPublico(); NO SE PUEDE

    $obj = new Cerdo();
    $obj->metodoPublico();
    $obj->metodoEstatico();

    class Scania extends Camion{
        public static $estaticaHija = "Soy una estatica SCANIA";

        public static function dobleInfo(){
            echo parent::sonido."<br>"; // Aqui como la clase Scania hereda de camión podemos utilizar su variable estática "sonido" usando PARENT ::
            echo self::$estaticaHija."<br>"; // Y aqui accdemos a su propia constante usando SELF ::
        }
    }

    Scania::dobleInfo();
?>