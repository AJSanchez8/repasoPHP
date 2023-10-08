## Funciones en PHP [VER ej3Funciones.php](./www/ej3Funciones.php).

### 3 TIPOS:

En php hay 3 tipos de __Funcions__:

La 1º es como las de JavaScript, se les mete un parametro y se ejecuta la función.

La 2º es por referencia, entra la referencia, por lo cual la salida es la misma variable pero _"sobreescrita"_

La 3º es com valor predeterminado, se puede poner un valor predeterminado, asi si no entra ningun argumento a la función, saldría el valor predeterminado que hemos seleccionado.

#### Operador "..."

Se utiliza para desempaquetar (spread) un array o iterable, en una lista de argumentos para una funcion.

## Callbacks en PHP [VER ej4CallBacks.php](./www/ej4CallBacks.php).

### VARIAS FORMAS DE HACERLO

Callback de una sola funcion (Llama a la función)

Callback de una funcion de dentro de una clase. 4 formas, mejor mirar para entenderlo bien ej4CallBacks.php

## Funciones callback [VER ej5CallBackFunction.php](./www/ej5CallBackFunction.php).

Puedes crear una función, y crear otra función, y poner como parametro de entrada de la segunda función la primera función. (ej5.CallBackFunction.php se queda más claro)

### Algunos metodos simples de array, SORT, POP, PUSH. [VER ej6MetodosArray.php](./www/ej6MetodosArray.php).

Array pop (array_pop()): Borra el último valor del array. Ej.: ```php array_pop($MiArray);```

Array push (array_push()): Añade un valor al final del array, como parametros debes meter primero el nombre del array y luego el valor. Ej.: ```php array_push($MiArray,1312);```

Array sort (sort()): Ordena de orden ascendente tanto numeros como strings, string por orden ASCII. Ej.:```php sort($MiArray);```

Array unset (unset()): Elimina el valor elegido, necesita como argumentos el indice que quieres borrar.__NO REAJUSTA LOS INDICES__. Ej.: ```unset($miArrayString[1]);```

Array splice (array_splice()):Elimina un valor o conjunto de valores elegidos, necesita como argumentos, el nombre del array, la posicion que quieres borrar y la cantidad de valores que quieres borrar. __REAJUSTA LOS INDICES__. Ej.(Borramos desde puesto 5, 2 valores): ```array_splice($miArrayNumeros, 5,2);```

### DIFERENCIAS ENTRE ARRAY_FILTER() Y ARRAY_REDUCE() [VER ej6MetodosArray.php](./www/ej6MetodosArray.php).

Array filter, devuelve un array más pequeño (filtrado), con la función que le hayas metido de callback

Array reduce, crea una sola variable (ya no seria un array), con la función de callback que le hayas introducido

_PARA AMBOS CASOS MIRAR [ENLACE](./www/ej6MetodosArray.php)_


### Clases en PHP [CLASES 1](./www/ej8.1clases.php), [CLASES 2](./www/ej8.2clases2.php), [CLASES 3](./www/ej8.3clases3.php).

### Namespaces en PHP [VER ej9Namespaces.php](./www/ej9Namespaces.php).

### Herencia en PHP [VER ej10Herencia.php](./www/ej10Herencia.php).

### Traits en PHP [VER ej11Traits.php](./www/ej11Traits.php).

Mientras que una clase solo puede __HEREDAR__ de otra clase, los traits hacen que se pueda superar ese límite y hacer una herencia múltiple. Pueden compartir metodos y propiedades sin que sea necesarias relaciones jerarquicas de herencia

### Ejercicio practico. [VER SOLUCIÓN](./www/ej7MenuYMetodos).

Crear un menú con enlaces (pasamos la variable del switch en cada uno de los enlaces).

1º. Comprobacion de usuario y contraseña __HARDCOREADOS__.
2º. Muestra nuevamente el menú.
3º. Muestra que fichero se está ejecutando.
4º. Recorre y muestra un array con asignaturas dentro, borra el ultimo elemento y vuelve a recorrerlo para mostrarlo.
5º. Crea un array con arrays dentro. El array padre será $monedasPais, tendrá un array dentro con indices 'pais' y 'moneda' y un valor para cada una. MINIMO introducir 4 valores y __SOLO MOSTRAR LOS QUE SU MONEDA SEA EURO__.
6º. Ejercicio tipico de mostrar letra de tu DNI.
7º. Muestra el año con la funcion date("Y").

### Ejercicio agenda, sesiones [VER EJERCICIO](./www/AgendaPHP/index.php).

