<?php



class Animal

{

    // Magic method -> 

    public function __construct()

    {
        // AÑADIR array sum a los metodos de array
        // PONER .PHP_EOL AL FINAL DE LOS ECHOS PARA SALTAR DE LINEA SIN TENER QUE PONER EL BR
        $arguments = func_get_args(); // entender

        $numberOfArguments = func_num_args(); // entender

        $function = '__construct'.$numberOfArguments; // Concatenamos el nombre __construc con los argumentos que recibe la funcion

        if (method_exists($this,$function)) {  // This se refiere al propio objeto, y $function entra lo de arriba

            call_user_func_array(array($this, $function), $arguments) ;

        }

    }

   

    public function __construct1($a1){
        echo('__construct with 1 param called: '.$a1.PHP_EOL);

    }

    public function __construct2($a1, $a2){
     echo('__construct with 2 params called: '.$a1.','.$a2.PHP_EOL);
    }

   

    public function __construct3($a1, $a2, $a3){
    echo('__construct with 3 params called: '.$a1.','.$a2.','.$a3.PHP_EOL);

    }

}

$o1 = new Animal('sheep');

$o2 = new Animal('sheep','cat'); // Aqui podemos crear el objeto animal que queramos con 1, 2 o 3 argumentos ya que pilla los diferentes numeros de argumentos

$o3 = new Animal('sheep','cat','dog');

?>