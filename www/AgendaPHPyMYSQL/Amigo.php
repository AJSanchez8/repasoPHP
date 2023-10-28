<?php
class Amigo {
    private $nombre;
    private $numero;


    function __construct($nombre, $numero) {
        $this->nombre = $nombre;
        $this->numero = $numero;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getNumero() {
        return $this->numero;
    }
}



    function eliminarAmigo(&$lista, $nombre) {
        foreach ($lista as $indice => $amigo) { // Se agrega la flecha => para obtener el índice y el objeto
            if ($amigo->getNombre() == $nombre) {
                unset($lista[$indice]); // Se utiliza $indice para eliminar el elemento correcto
            }
        }
    }

    

?>