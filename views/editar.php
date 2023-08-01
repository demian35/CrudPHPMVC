<?php
include("./templates/header.php")
?>


<?php
include("../controllers/EmpleadoController.php");
$empleado = new EmpleadoController;

$usuario = $empleado->muestraRegistro($_GET['idEmpleados']);

?>



<style>
    .card {
        color: white;
    }
</style>

<div class="col-md-12">
    <div class="card ">
        <div class="card-header">
            <h2>Modifica Empleado</h2>
        </div>
        <div class="card-body">
            <form action="update.php" method="POST">

            <div class="form-group">
                    <label for="idEmpleado">ID</label>
                    <input type="text" readonly class="form-control" name="idEmpleado" value="<?= $usuario[0] ?>" id="idEmpleado">
                </div>

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
                <a class="btn btn-danger" href="show.php?idEmpleados=<?= $usuario[0]?>">Cancelar</a>
            </form>




            <?php
            include("./templates/footer.php")
            ?>