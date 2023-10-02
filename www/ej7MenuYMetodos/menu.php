<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
    // Hacemos que cada vez que se pinche en un enlace, ponga la variable eleccion al número que marca el enlace.
    // Son solo enlaces al archivo logicaMenu.php al que se le pasa la variable igualada al numero que se quiere para que en el otro archivo utilizarla en el switch
	echo(
        "<a href='logicaMenu.php?eleccion=1'>1. Comprobar usuario</a><br/> 
        <a href='logicaMenu.php?eleccion=2'>2. Mostar menú de nuevo</a><br/> 
        <a href='logicaMenu.php?eleccion=3'>3. Mostrar fichero ejecutado</a> <br/> 
        <a href='logicaMenu.php?eleccion=4'>4. Recorrer Array</a><br/> 
        <a href='logicaMenu.php?eleccion=5'>5. Monedas y Países ordenados</a><br/> 
        <a href='logicaMenu.php?eleccion=6'>6. Calcular letra DNI</a><br/>
        <a href='logicaMenu.php?eleccion=7'>7. Mostrar año</a><br/>");
	echo "<p> </p>";
	
?>

</body>
</html>