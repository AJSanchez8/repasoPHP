<?php
include_once 'conexion.php';
include_once "header.php";

?>

<div class="container my-5">
    <div class="row">
        <div class="col text-center">
            <div class="card">
                <div class="card-header display-6">MOSTRAR</div>
                <div class="p-4">  
                    <?php
                    $resultado = $objetoBD->getDB("productos")?> 
                    <div class="table-responsive">
                        <table class="table table-primary">
                            <thead>
                                <tr>
                                
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Imagen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($resultado as $registro){?>
                                <tr class="align_middle">
                                    <td scope="row"><?php echo $registro['nombre'];?></td>
                                    <td scope="row"><?php echo $registro['descripcion'];?></td>
                                    <td scope="row"><?php echo $registro['precio'];?></td>
                                    <td scope="row"><?php echo '<img alt="imagen del producto" width="100px" height="100px" src="img/'.$registro['fotografia'].'">';?></td>
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

 