<?php
    // OOP -> Programacion orientada a objetos.

    class Fruta{
        public $nombre;
        public $color;

        function __construct($a,$b){
            $this->nombre = $a;
            $this->color = $b;
        }

        function describe(){
            echo "La fruta es {$this->nombre} y es de color {$this->color} <hr>";
        }
    }

    // Hereda de fruta, por lo que puedo usar su constructor y sus funciones o metodos
    class Fresa extends Fruta{
        function queSoy(){
            echo "Soy una fresita roja";
        }
    }

    $f1 = new Fresa("Fresa","roja");
    $f1->describe();
    $f1 -> queSoy();

    // PROTECTED FUNCTION ... el modificador de acceso protected en PHP permite que las propiedades y métodos sean accesibles dentro de la clase que los define y en las clases derivadas, pero no pueden ser accedidos directamente desde fuera de la clase. Esto es útil cuando deseas encapsular cierta funcionalidad y permitir que las clases derivadas la utilicen sin exponerla al mundo exterior.






