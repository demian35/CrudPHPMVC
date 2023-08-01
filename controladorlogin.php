


<?php

//si se presiona el boton de iniciar sesion
if(!empty($_POST['btningresar']))
    if(empty($_POST['usuario']) and empty($_POST['contrasena']) ){//si los campos estan vacios mandamos la alerta
        $notificacion= "Por favor rellena los campos";
    }else{

    }
?>