<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Menu principal</title>
<style>
    a{
        text-decoration:none;
        font-size: large;
        border-radius:5px;
        background-color:lightblue;
        padding:5px;
        margin:20px;
        margin-bottom:10px;
    }
    a:hover{
    box-shadow: 0px 3px 3px 0px rgba(0, 0, 0, 0.2);
    }
    hr{
        width: 40%;
        margin-left: 0px;
        height: 2px;
        background:black;
    }
    

</style>
</head>

<body>
    
<?php
    // Hacemos que cada vez que se pinche en un enlace, ponga la variable eleccion al número que marca el enlace.
    // Son solo enlaces al archivo logicaMenu.php al que se le pasa la variable igualada al numero que se quiere para que en el otro archivo utilizarla en el switch
	echo(
        "<a href='logicaMenu.php?eleccion=1'>1. Comprobar usuario</a><hr/> 
        <a href='logicaMenu.php?eleccion=2'>2. Mostar menú de nuevo</a><hr/> 
        <a href='logicaMenu.php?eleccion=3'>3. Mostrar fichero ejecutado</a> <hr/> 
        <a href='logicaMenu.php?eleccion=4'>4. Recorrer Array</a><hr/> 
        <a href='logicaMenu.php?eleccion=5'>5. Monedas y Países ordenados</a><hr/> 
        <a href='logicaMenu.php?eleccion=6'>6. Calcular letra DNI</a><hr/>
        <a href='logicaMenu.php?eleccion=7'>7. Mostrar año</a><hr/>
        <a href='logicaMenu.php?eleccion=8'>8. Suma mediante dos números con un callback</a><hr/>"
    
        );
	echo "<p> </p>";
	
?>

</body>
</html>