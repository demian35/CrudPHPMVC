


<?php

include_once("../config/conexionBD.php");
$bd=new conexionBD;

if(!empty($_POST['btningresar']))
if(empty($_POST['usuario']) and empty($_POST['contrasena']) ){//si los campos estan vacios mandamos la alerta
    $notificacion= "Por favor rellena los campos";
}else{
    $usuario=$_POST['usuario'];
    $contrasena=$_POST['contrasena'];
    
    //verificamos que los datos que mande el usuario esten e registrados
    $conexion=$bd->conexion();
    $consulta=$conexion->prepare("SELECT * FROM usuarios WHERE usuario=:usuario AND contrasena=:contrasena ");
    $consulta->bindParam(':usuario',$usuario);
    $consulta->bindParam(':contrasena',$contrasena);
    $consulta->execute();
    session_start();//iniciamos la sesion
    if($datos=$consulta->fetchObject()){
        header("Location: /views/index.php");
    }else{
        $mensaje="Datos incorrectos";
    }
    
}