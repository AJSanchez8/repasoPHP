<?php include_once "conexion.php"; ?>
<?php include_once "header.php";?>

<div class="container my-5">
    <div class="row">
        <div class="col text-center">
            <div class="card">
                <div class="card-header display-6">Acciones sobre las B.B.D.D.</div>
                <div class="p-4">
                    <div class="table-responsive">
                        <table class="table table-primary">
                            <thead>
                                <tr>
                                    <th scope="col">Añadir producto</th>
                                    <th scope="col">Eliminar producto</th>
                                    <th scope="col">Actualizar producto</th>
                                    <th scope="col">Mostrar productos</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td scope="row"><a href="alta.php"><i class="bi bi-database-add" style="font-size: 4rem; color:peru;"></i></a></td>
                                    <td><a href="baja.php"><i class="bi bi-database-dash" style="font-size: 4rem; color:peru;"></i></a></td>
                                    <td><a href="actualiza.php"><i class="bi bi-database-check" style="font-size: 4rem; color:peru;"></i></a></td>
                                    <td><a href="mostrar.php"><i class="bi bi-database-down" style="font-size: 4rem; color:peru;"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>



</div>


















<?php include_once "footer.php";?>

 