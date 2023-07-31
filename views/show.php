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
               
                    <tr class="">
                        <td> <?php echo $resultado[0] ?></td>
                        <td scope="row"><?php echo $resultado[1] ?></td>
                        <td><?php echo $resultado[2] ?></td>
                        <td><?php echo $resultado[3] ?></td>
                        <td><?php echo $resultado[4] ?></td>
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