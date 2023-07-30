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
        return ($id!=false)?header("Location:index.php?idEmpleados=".$id):header("Location:agregar.php");

    }

    //funcion para mostrar los registros de la base de datos 
    public function muestra(){
        $consulta=$this->empleado->consulta("SELECT * FROM modelovistacontrolador.empleados;");
        return $consulta;
    }
    
}

?>
