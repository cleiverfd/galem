<?php include("../template/header.php"); ?>


<div class="col-md-5">

    <div class="card">
        <div class="card-header bg-primary text-light">
            <h4 class="text-center">Datos del Libro</h4>
        </div>

        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="txtid">ID</label>
                    <input type="text" class="form-control" id="txtid" aria-describedby="emailHelp" name="txtid" placeholder="Enter ID">
                </div>
                <div class="form-group">
                    <label for="txtnombre">Nombre del libro</label>
                    <input type="text" class="form-control" id="txtnombre" name="txtnombre" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="txtfile">Imagen del libro</label>
                    <input type="file"  id="txtfile" name="txtfile">
                </div>
                <div class="" role="group" aria-label="">
                    <button type="button" class="btn btn-success ">Agregar</button>
                    <button type="button" class="btn btn-warning ">Modificar</button>
                    <button type="button" class="btn btn-danger ">Cancelar</button>
                </div>
            </form>
        </div>

    
    </div>




</div>
<div class="col-md-7">

</div>

<?php include("../template/footer.php"); ?>