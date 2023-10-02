# Funciones en PHP (ej3Funciones.php)

## 3 TIPOS:

En php hay 3 tipos de __Funcions__:

La 1º es como las de JavaScript, se les mete un parametro y se ejecuta la función.

La 2º es por referencia, entra la referencia, por lo cual la salida es la misma variable pero _"sobreescrita"_

La 3º es com valor predeterminado, se puede poner un valor predeterminado, asi si no entra ningun argumento a la función, saldría el valor predeterminado que hemos seleccionado.

### Operador "..."

Se utiliza para desempaquetar (spread) un array o iterable, en una lista de argumentos para una funcion.

# Callbacks en PHP (ej4CallBacks.php)

## VARIAS FORMAS DE HACERLO

Callback de una sola funcion (Llama a la función)

Callback de una funcion de dentro de una clase. 4 formas, mejor mirar para entenderlo bien ej4CallBacks.php

# Funciones callback

Puedes crear una función, y crear otra función, y poner como parametro de entrada de la segunda función la primera función. (ej5.CallBackFunction.php se queda más claro)

## DIFERENCIAS ENTRE ARRAY_FILTER() Y ARRAY_REDUCE()

Array filter, devuelve un array más pequeño (filtrado), con la función que le hayas metido de callback

Array reduce, crea una sola variable (ya no seria un array), con la función de callback que le hayas introducido

_(PARA AMBOS CASOS MIRAR EL ej6MetodosArray)_

## Ejercicio practico. [SOLUCIÓN](./www/ej7MenuYMetodos).

Crear un menú con enlaces (pasamos la variable del switch en cada uno de los enlaces).

1º. Comprobacion de usuario y contraseña __HARDCOREADOS__.
2º. Muestra nuevamente el menú.
3º. Muestra que fichero se está ejecutando.
4º. Recorre y muestra un array con asignaturas dentro, borra el ultimo elemento y vuelve a recorrerlo para mostrarlo.
5º. Crea un array con arrays dentro. El array padre será $monedasPais, tendrá un array dentro con indices 'pais' y 'moneda' y un valor para cada una. MINIMO introducir 4 valores y __SOLO MOSTRAR LOS QUE SU MONEDA SEA EURO__.
6º. Ejercicio tipico de mostrar letra de tu DNI.
7º. Muestra el año con la funcion date("Y").