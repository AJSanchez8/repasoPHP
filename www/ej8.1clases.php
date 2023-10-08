<?php

    // Como en Java se pueden crear clases para la encapsulación
class Fruit{

    // Propiedades
    public $name;
    public $color;

    // Constructor

    function __construct($nombre="manzana", $color ="rojo"){ // Creamos constructor para hacer un objeto de este tipo
        $this->name = $nombre; // This-> name hace referencia al objeto y nombre al argumento que entra en la el constructor
        $this->color = $color; // Repasar esto no entiendo
    }
}
$fruta1 = new Fruit("Pera", "verde"); // hemos creado una fruta
$fruta2 = new Fruit(color:"verde"); // Así podemos poner el segundo argumento en vez de el primero

print_r($fruta1);
 echo "La fruta es una ".$fruta1->name." y es de color ".$fruta1->color; // La fruta se puede separar asi o acceder a cada propiedad




?>