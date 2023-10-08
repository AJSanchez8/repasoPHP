<?php
    // Declaramos el trait y dentro de el hacemos funciones que van a poder ser usadas, siempre y cuando se utilice el "use" dentro de la clase
    trait mensaje1{
        function msj1(){
            echo "Este es el mensaje dentro del trait.<br>";
        }
    }

    // En la clase bienvenida hacemos el uso del trait con USE.
    class Bienvenida1{
        use mensaje1;
    }

    // Creamos un objeto de tipo Bienvenida y podemos utilizar metodos del trait

    $obj = new Bienvenida1();
    $obj ->msj1();

    // Creamos otro Trait para hacer la prueba de multiples traits

    trait mensaje2{
        function msj2(){
            echo "Este es el segundo mensaje dentro del trait, para el uso de multiples traits.<br>";
        }
    }

    class Bienvenida2{
        use mensaje1,mensaje2;
    }

    $objetoMultiple = new Bienvenida2();
    $objetoMultiple->msj1();
    $objetoMultiple->msj2();
    
















?>