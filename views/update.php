<?php
include("../controllers/EmpleadoController.php");
$empleado = new EmpleadoController;

//recibimos los datos del form de editar
$empleado->actualizaEmpleado($_POST['idEmpleado'],$_POST['nombre'],$_POST['apellidos'],$_POST['matricula'],$_POST['correo'])

?>