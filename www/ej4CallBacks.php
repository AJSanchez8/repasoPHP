<?php

    //Para hacerlo con una funcion

    function callBack(){
        echo "Funcion de callback <br>";
    }

    call_user_func("callBack");

    //Para acceder a la función de una clase, por ejemplo accedo a MyClass y luego a la función de esta.
    class MyClass{
        static function metodoCallback(){
            echo "Este es mi metodo callback<br>";
        }
    }

    // Puedes poner con la funcion array o entre [], o tambien se puede en PHP mas moderno con "::"
    // ESTAR ATENTO A LAS COMILLAS, COMAS Y PARENTESIS/CORCHETES 
    call_user_func(array("MyClass","metodoCallback"));
    call_user_func(['MyClass','metodoCallback']);
    call_user_func('MyClass::metodoCallback');

    //Tambien podemos crear un objeto de esa clase, instanciarlo y meterlo como la primera forma

    $obj = new MyClass();
    call_user_func(array($obj, "metodoCallback"));







?>