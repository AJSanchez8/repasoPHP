<?php

    abstract class Coche{  // Clase abstracta DEBE tener un método abstracto
    public $nombre;

    public function __construct($n) {
        $this->nombre = $n;
      }

    abstract public function intro():string; // Los :string quiere decir el valor del retorno del método (Debe devolver un string)

 }

 // Para todas estas clases es OBLIGATORIO implementar(darle funcionalidad) el metodo abstracto de la clase que heredan o clase padre
 class Audi extends Coche{
     public function intro():string{ // Ahora debemos implementar la función y nos debe de devolver un string
        return "Calidad Alemana a precio de ORO -->$this->nombre";
     }
 }
 class Volvo extends Coche{
    public function intro():string{ // Ahora debemos implementar la función y nos debe de devolver un string
       return "Seguridad sueca -->$this->nombre";
    }
}
class Citroen extends Coche {
    public function intro() : string {
      return "¡Extravagancia franchute! --> $this->nombre!";
    }
  }

// Creamos objetos de las clases hijas para comprobar que esto funciona
$audi = new Audi("Audi");
echo $audi->intro()."<br>";
$volvo = new Volvo("Volvo");
echo $volvo->intro()."<br>";
$citroen = new Citroen("Citroen");
echo $citroen->intro()."<br>";