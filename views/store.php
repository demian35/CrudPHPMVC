<?php
    include("agregar.php");
    include("./controllers/EmpleadoController.php");
    $empleado= new EmpleadoController();

    $empleado->guardar($_POST['nombre'],$_POST['apellidos'],$_POST['matricula'],$_POST['correo']);
    
?>