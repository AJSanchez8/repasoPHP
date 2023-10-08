<?php
 // Añadir objetos de una clase a un array

 class Moto{
    public $nombre;
    public $modelo;
 }

 // Creamos el primer objeto

 $moto1 = new Moto();
 $moto1->nombre = "Kymco"; // Asi podemos asignar nombre
 $moto1->modelo = "Grand Dink 125"; // Asi podemos asignar el modelo
 $moto2 = new Moto();
 $moto2->nombre = "Yamaha";
 $moto2->modelo = "IZF 125r";

 $arrayMotos = array($moto1, $moto2);
 
 print_r($arrayMotos);

 // Creamos otra clase para hacer una pequeña prueba ahora haciendo con constructores etc.

 class Coche{
    private $color;
    private $caballos;

    function __construct($color, $cv){
        $this->color = $color;
        $this->caballos = $cv;
    }

    // Hacemos los setters para asignar las propiedades
    function set_color($c){
        $this->color = $c;
    }
    function set_caballos($cv){
        $this->caballos = $cv;
    }

    // Getters para poder acceder a las propiedades
    function get_color(){
        return $this->color;
    }
    function get_caballos(){
        return $this->caballos;
    }
 }

  // Creamos el array de coches

  $arrayCoches = [];
  $coche = new Coche("Rojo","94");
  array_push($arrayCoches,$coche);
  $coche = new Coche("Azul","145");
  array_push($arrayCoches,$coche);
  
  // Mostramos los objetos con un for each, vamos recorriendo los objetos y guardandolos en la variable coche, por eso al llamarlos los "descomponemos" con la variable coche.get_color o get_caballos.
  // IMPORTANTE, PARA ACCEDER A LOS METODOS SE HACE CON UNA FLECHITA -> NO CON PUNTO COMO EN JAVA

  foreach ($arrayCoches as $c) {
    echo "<hr><strong>Color:</strong> ".$c->get_color()." <strong>Cv: </strong>".$c->get_caballos()." <hr>";
  }

 ?>