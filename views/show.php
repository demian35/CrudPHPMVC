<?php
include("./templates/header.php")
?>

<?php
include("../controllers/EmpleadoController.php");
$empleado = new EmpleadoController;

$resultado = $empleado->muestraRegistro($_GET['idEmpleados']);

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

<h1 class="text-center">Empleado</h1>
<div class="center-screen">
    <a class="btn btn-primary" href="index.php" role="button">Regresar a inicio</a>
    <a class="btn btn-info" href="editar.php?idEmpleados=<?php $resultado[0] ?>" role="button">Editar</a>
    <a class="btn btn-danger" id="delete-btn" href="#" role="button">Borrar</a>
    <script>
        document.getElementById("delete-btn").addEventListener("click", function(event) {
            event.preventDefault(); // Evitar que el enlace se ejecute de inmediato

            // Mostrar una alerta para confirmar la eliminación
            if (confirm("¿Estás seguro de que deseas eliminar a este empleado?")) {
                // Si el usuario confirma, redirige a la página o ejecuta la lógica para eliminar el registro
                
                window.location.href = "delete.php?idEmpleados=<?= $resultado[0] ?>";
            }
        });
    </script>






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

                    <tr class="">
                        <td> <?= $resultado[0] ?></td>
                        <td scope="row"><?= $resultado[1] ?></td>
                        <td><?=$resultado[2] ?></td>
                        <td><?=$resultado[3] ?></td>
                        <td><?=$resultado[4] ?></td>
                        <td>

                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>



    <?php
    include("./templates/footer.php")
    ?>