<?php
include("./templates/header.php")
?>

<?php
include("../controllers/EmpleadoController.php");

$empleado = new EmpleadoController;
$resultados = $empleado->muestra(); //mostramos los resultados

?>


<style>
    .center-screen {
        text-align: center;
    }

    h1 {
        text-align: center;
        color: white;
    }
</style>


<h1>Registra empleado</h1>
<br>
<div class="center-screen">
    <a class="btn btn-primary" href="agregar.php" role="button">Agregar</a>
</div>




<div class="col-md-12 ">
    <br>
    <div class="table-responsive table-bordered">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Matricula</th>
                    <th scope="col">Correo Electronico</th>
                    <th scope="col">acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultados as $empleados) { ?>
                    <tr class="">
                        <td> <?=$empleados['idEmpleados'] ?></td>
                        <td scope="row"><?= $empleados['nombre'] ?></td>
                        <td><?= $empleados['apellidos'] ?></td>
                        <td><?= $empleados['matricula'] ?></td>
                        <td><?= $empleados['correo'] ?></td>
                        <td>
                            <a class="btn btn-info" href="show.php?idEmpleados=<?= $empleados['idEmpleados']; ?>" role="button">Ver Empleado</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>




<?php
include("./templates/footer.php")
?>