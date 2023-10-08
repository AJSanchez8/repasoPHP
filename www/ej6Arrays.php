<?php


    $miArrayString = ["Ajota","choco","Lucia","backend"];
    $miArrayNumeros = [5,7,4,6,9,45,7,4,3,2];
    // Creo dos nuevos arrays para no sobreescribir los primeros.
    $miArrayNumerosOrdenar = [5,7,4,6,9,45,7,4,3,2,88];
    $miArrayStringOrdenar = ["Ajota","choco","Lucia","backend"];


    //Array SORT -> Metodo para ordernar un array de forma númerica o letras por orden de código ASCII
    sort($miArrayNumerosOrdenar);
    echo "<strong>Array 1 ordenado <br></strong>";
    print_r($miArrayNumerosOrdenar);
    echo "<br>";

    // Añado valores a un array en la última posición
    array_push($miArrayNumerosOrdenar,1312);
    echo "<strong>Array 1 valor añadido <br></strong>";
    print_r($miArrayNumerosOrdenar);
    echo "<br>";

    // Saco el último valor añadido y se puede almacenar en una variable
    $numeroBorrado = array_pop($miArrayNumerosOrdenar);
    echo "<strong>Array 1 valor sacado <br></strong>";
    print_r($miArrayNumerosOrdenar);
    echo " <br><strong> Hemos borrado el numero ".$numeroBorrado."</strong><br>";

    // Array filter
    // Filtra elementos de un array y crea uno nuevo con el resultado
    function filtraImpares($array){
        return ($array % 2 !== 0); //Comprobamos que no sea par (resto de la division diferente de 0)
    }        

    $resultado1 = array_filter($miArrayNumeros,"filtraImpares");
    print_r($resultado1);

    // Array reduce
    // Reduce el array a solo un valor, usando una función de callback
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

    // Array unset, el indice no cambia, ([0] => a[2] => c) -> Tras borrar se queda el huevo del 1
    unset($miArrayString[1]);

    // Array_splice, si reordena los indices -> [0] => a [1] => c -> Se sustituye el indice 2 y se asigna el 1.
    // Recibe el array y 2 valores numericos, el primero el indice que quiere borrar, y el segundo cuantos elementos quiere borrar, en este caso borraremos 2, empezaremos en el 5 y borraremos 2 (incluyendo el 5).
    array_splice($miArrayNumeros, 5,2);
?>