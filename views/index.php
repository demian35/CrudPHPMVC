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
                        <td> <?= $empleados['idEmpleados'] ?></td>
                        <td scope="row"><?= $empleados['nombre'] ?></td>
                        <td><?= $empleados['apellidos'] ?></td>
                        <td><?= $empleados['matricula'] ?></td>
                        <td><?= $empleados['correo'] ?></td>
                        <td>
                            <a class="btn btn-secondary" href="show.php?idEmpleados=<?= $empleados['idEmpleados']; ?>" role="button">Ver Empleado</a>
                            <a class="btn btn-success" href="editar.php?idEmpleados=<?= $empleados['idEmpleados']; ?>" role="button">Editar</a>
                            <a class="btn btn-danger"  id="delete-btn" href="#" role="button">Borrar</a>
                            <script>
                                document.getElementById("delete-btn").addEventListener("click", function(event) {
                                    event.preventDefault(); // Evitar que el enlace se ejecute de inmediato

                                    // Mostrar una alerta para confirmar la eliminación
                                    if (confirm("¿Estás seguro de que deseas eliminar a este empleado?")) {
                                        // Si el usuario confirma, redirige a la página o ejecuta la lógica para eliminar el registro

                                        window.location.href = "delete.php?idEmpleados=<?= $empleados['idEmpleados'] ?>";
                                    }
                                });
                            </script>
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