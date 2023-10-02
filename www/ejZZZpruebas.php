<?php

    function operar($a, $b, $callback){
        $operacion = $callback($a,$b);

        return $operacion;
    }

    function multiplicar($a,$b){
        return $a*$b;
    }

    $arrayNum = [3,6];

    $funcionCallback = "multiplicar";

    //  No se puede hacer o no e encontrado la manera de hacer un callback con un spread.
    // $resultado = operar(...$arrayNum,"multiplicar"); Da error
    // $resultado = operar(...$arrayNum, $funcionCallback);

    echo $resultado."<br>"







?>