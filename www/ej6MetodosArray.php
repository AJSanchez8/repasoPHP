<?php


    $miArrayString = ["Ajota","choco","Lucia","backend"];
    $miArrayNumeros = [5,7,4,6,9,45,7,4,3,2];


    // Array filter
    // Filtra elementos de un array y crea uno nuevo con el resultado
    function filtraImpares($array){
        return ($array % 2 !== 0); //Comprobamos que no sea par (resto de la division diferente de 0)
    }        

    $resultado1 = array_filter($miArrayNumeros,"filtraImpares");
    print_r($resultado1);

    // Array reduce
    // Reduce el array a solo un valor, u sando una función de callback
    // Ejmplo con Array de numeros
    function suma($a, $b){
        return $a+$b;
    }
    
    $resultado2 = array_reduce($miArrayNumeros, "suma");
    echo "<br>".$resultado2;

    // Ejemplo con Array de string
    function junta($v, $b){
        return $v."-".$b;
    }

    $resultado3 = array_reduce($miArrayString, "junta");
    echo "<br>".$resultado3;

?>