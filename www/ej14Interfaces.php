<?php

    // Declaramos la interfaz y el método que debe implementar
interface Animal {
    public function sonido();
  }
    // Implementamos en la clase gato
  class Gato implements Animal {
    public function sonido() {
      echo "Miau";
    }
  }
  
  $animal = new Cat();
  $animal->sonido(); //  Es una especia de promesa, si tu implementas a una clase, te comprometes a usar su metodo e implementarlo