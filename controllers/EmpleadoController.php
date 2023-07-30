<?php

class EmpleadoController{
    private $empleado;
    //metodo constructor para nuestro controlador
    public function __construct(){
        include("../model/Empleado.php");
        $this->empleado= new Empleado();//creamos un empleado
    }

    //metodo para guardar los datos en la base de datosS
    public function guardar($nombre,$apellidos,$matricula,$correo){
        $id=$this->empleado->insertar($nombre,$apellidos,$matricula,$correo);
        return ($id!=false)?header("Location:show.php?idEmpleados=".$id):header("Location:agregar.php");

    }

    public function muestra($id){
        return($this->empleado->muestraRegistros($id) !=false)?$this->empleado->muestraRegistros($id):header("Location:agregar.php");
    }
    
}

?>
