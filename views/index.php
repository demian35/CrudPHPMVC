<?php
include("./templates/header.php")
?>

<?php
include("../controllers/EmpleadoController.php");

$empleado=new EmpleadoController;
$resultados=$empleado->muestra();//mostramos los resultados


?>


    <style>
        .center-screen {
            text-align: center;
        }
        h1{
            text-align: center;
            color: white;
        }
    </style>


    <h1>Registra empleado</h1>
    <br>
    <div class="center-screen">
        <a class="btn btn-primary" href="agregar.php" role="button">Agregar</a>
    </div>

    <br>

    <div class="col-md-12 ">
        <div class="table-responsive table-bordered">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Matricula</th>
                        <th scope="col">Correo Electronico</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($resultados as $empleados) { ?>
                    <tr class="">
                        <td> <?php echo $empleados[0] ?></td>
                        <td scope="row"><?php echo $empleados[1] ?></td>
                        <td><?php echo $empleados[2] ?></td>
                        <td><?php echo $empleados[3] ?></td>
                        <td><?php echo $empleados[4] ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>




<?php
include("./templates/footer.php")
?>