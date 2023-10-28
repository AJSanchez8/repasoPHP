<?php
include_once("header.php");
include_once("conexion.php");

$productoActualizar = $_GET["id"];
$registros = $objetoBD->getDB("productos", ["id_producto" => $productoActualizar]);
$registroUnico = $registros[0];

?>

<div class="container my-5">
    <div class="row">
        <div class="col text-center">
            <div class="card">
                <div class="card-header display-6">Actualización Producto</div>
                <form class="p-4" method="POST" action="actualiza3.php?id=<?php echo $productoActualizar;?>&nombreImagen=<?php echo $registroUnico['fotografia'];?>" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" required autofocus <?php echo 'value="' . htmlspecialchars($registroUnico["nombre"]) . '"'; ?>>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Descripción</label>
                        <textarea class="form-control" name="descripcion" id="descripcion" required ><?php echo $registroUnico['descripcion'];?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Precio</label>
                        <input type="number" class="form-control" name="precio" id="precio" required <?php echo 'value="' . htmlspecialchars($registroUnico["precio"]) . '"'; ?>>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label"><strong>Foto antigüa : </strong></label>
                        <?php   echo '<img width="100px" height="100px" src="img/'.$registroUnico['fotografia'].'">';   ?>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Introduce foto nueva</label>
                        <input type="file" class="form-control" name="imagen" id="imagen" accept="image/*" > 
                    </div>
                    <div class="d-grid">
                        <input type="submit" class="btn btn-primary" value="Guardar"> 
                    </div>
                </form>
            </div>
        </div>
        <a href="actualiza.php"><i class="bi-arrow-return-left px-3" style="font-size:4rem;color:black;"></i> </a>
    </div>
</div>
<?php include_once "footer.php";?>