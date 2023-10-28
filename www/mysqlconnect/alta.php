<?php include_once "header.php";?>

<div class="container my-5">
    <div class="row">
        <div class="col text-center">
            <div class="card">
                <div class="card-header display-6">AÑADIR PRODUCTO</div>
                <form class="p-4" method="POST" action="registrar.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" required autofocus> 
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Descripcion</label>
                        <textarea class="form-control" name="descripcion" id="descripcion" required ></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Precio</label>
                        <input type="number" class="form-control" name="precio" id="precio" required > 
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Imagen</label>
                        <input type="file" class="form-control" name="imagen" id="imagen" accept="image/*" required > 
                    </div>
                    <div class="d-grid">
                        <input type="submit" class="btn btn-primary" value="Añadir a B.B.D.D." > 
                    </div>
                </form>
            </div>
        </div>
        <a href="index.php"><i class="bi-arrow-return-left px-3" style="font-size:4rem;color:black;"></i> </a>
    </div>



</div>


















<?php include_once "footer.php";?>

 