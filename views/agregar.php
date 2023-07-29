<?php
include("./templates/header.php")
?>

<style>
    .card{
        color: white;
    }
</style>

<div class="col-md-12">
    <div class="card ">
        <div class="card-header">
            Registra Empleado
        </div>
        <div class="card-body">
            <form action="store.php" method="POST">

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input required type="text" class="form-control" name="nombre" value="" id="nombre" placeholder="Nombre">
                </div>

                <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input required type="text" class="form-control" name="apellidos" value="" id="apellidos" placeholder="Apellidos">
                </div>

                <div class="form-group">
                    <label for="matricula">Matricula</label>
                    <input required type="text" class="form-control" name="matricula" value="" id="matricula" placeholder="Matricula">
                </div>

                <div class="form-group">
                    <label for="correo">Correo Electronico</label>
                    <input required type="text" class="form-control" name="correo" value="" id="correo" placeholder="Correo Electronico">
                </div>

                <br>


                <br>
                    <button type="submit" class="btn btn-info">Aceptar</button>
                    <a class="btn btn-danger" href="../crud/index.php">Cancelar</a>
            </form>




<?php
include("./templates/footer.php")
?>