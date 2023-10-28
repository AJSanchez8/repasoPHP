<?php
include_once 'conexion.php';
include_once "header.php";

?>

<div class="container my-5">
    <div class="row">
        <div class="col text-center">
            <div class="card">
                <div class="card-header display-6">ACTUALIZAR ARTICULO</div>
                <div class="p-4">  
                    <?php
                    
                    $queryMostrar ="SELECT * FROM productos";
                    $resultado = $conexion->query($queryMostrar);?> 
                    <div class="table-responsive">
                        <table class="table table-primary">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Imagen</th>
                                    <th scope="col">Borrar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($registro=mysqli_fetch_row($resultado)){?>
                                <tr class="align_middle">
                                    <td scope="row"><?php echo $registro[1];?></td>
                                    <td scope="row"><?php echo $registro[2];?></td>
                                    <td scope="row"><?php echo $registro[3];?></td>
                                    <td scope="row"><?php echo '<img alt="imagen del producto" width="100px" height="100px" src="img/'.$registro[4].'">';?></td>
                                    <td><a href="actualiza2.php?id=<?php echo $registro[0];?>"><i class="bi-pencil px-1" style="font-size: 3rem; color:green;"> </i></a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>          
                </div>
            </div>
        </div>
        <a href="index.php"><i class="bi-arrow-return-left px-3" style="font-size:4rem;color:black;"></i> </a>
    </div>



</div>


















<?php include_once "footer.php";?>

 