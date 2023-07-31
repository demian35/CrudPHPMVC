<?php
include("./templates/header.php")
?>

<?php
include("../controllers/EmpleadoController.php");
$empleado=new EmpleadoController;

print_r($empleado->muestraRegistro($_GET['idEmpleados']));

?>

<h1 class="text-center">Empleado</h1>


<?php
include("./templates/footer.php")
?>