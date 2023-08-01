<?php
include("../controllers/EmpleadoController.php");
$empleado = new EmpleadoController;

//recibimos los datos del form de editar
$empleado->borraRegistro($_GET['idEmpleados']);
?>