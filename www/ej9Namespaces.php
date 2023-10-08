<?php
    // Siempre debe ser los primero que se nombre, llame o cree.
    // Puedo crear namespace (Grupos) de "Clases", ya que por ejemplo si tenemos una clase que llame Tabla para las tablas de html y otra que se llame Tabla para bricolaje podriamos confundirnos. Con los namespaces tendriamos html/Tabla y bricolaje/Tabla

    namespace Html;
    // Todo lo que declare aqui dentro pertenecera al namespace "Html"

    class Tabla {
        public $titulo = "";
        public $numeroColumnas = 0;
        public function mensaje() {
          echo "<p>Tabla '{$this->titulo}' tiene {$this->columnas} columnas.</p>";
        }
      }
    $table = new Tabla();
    $table->titulo = "Horario";
    $table->numeroColumnas = 5;
      // Si estás fuera del namespace o deseas evitar ambigüedades, puedes usar el calificador completo del namespace, como:
        $table = new Html\Tabla();

    // Tambien puedes ponerle un alias a ese namespace Ej.:
    use Html as H;

    // Ademas puedes utilizar y poner un alias a una clase específica Ej.:
    use Html\Tabla as HT; 
    $table2 = new HT();
      

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namespaces</title>
</head>
<body>
<?php
$table->mensaje();
?>
</body>
</html>










