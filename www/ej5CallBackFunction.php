<?php

    //Creamos una funcion, por ejemplo de suma
    function suma($a,$b){
        return $a+$b;
    }
    function resta($a,$b){
        return $a-$b;
    }

    //Creamos una funcion que por parametros reciba otra funcion
    function operar($num1,$num2, $funcionCallback){
        $resultado = $funcionCallback($num1,$num2);
        return $resultado;
    }
    // Llamamos a la funcion y metemos la otra funcion dentro (por eso callback)
    $resultado1 = operar(8,8,'suma');
    $resultado2 = operar(8,8,"resta");

    echo "El primer resultado de la operacion de callback es: ".$resultado1."<br>";
    echo "El segundo resultado de la operacion de callback es: ".$resultado2."<br>";
    



    // EJEMPLO DE W3SCHOOLS

    // Creamos funcion que dice el length de los string
    function myCallback($objeto){
        return strlen($objeto);
    }
    // Creamos el arra para meterselo a la función
    $strigns =  ["casa", "ajota","AJ","Lucia"];

    $longitudStrings = array_map("myCallback", $strigns);
    print_r($longitudStrings);



?>