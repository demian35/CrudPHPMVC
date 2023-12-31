<?php

class Empleado{

    private $bd; //variable para guardar la conexion con la bd
    //metodo constructor para crear una conexcion con la base de datos
    public function __construct()
    {
        include("../config/conexionBD.php");
        $conexion = new conexionbd();
        $this->bd = $conexion->conexion(); //creamos la conexion con la bd y la guardamos en la varable bd
    }

    //funcion para insertar en la base de datos
    public function insertar($nombre, $apellidos, $matricula, $correo)
    {
        $sentencia = $this->bd->prepare("INSERT INTO empleados(idEmpleados, nombre, apellidos, matricula, correo) VALUES(NULL,:nombre,:apellidos,:matricula,:correo)");
        //le pasamos el nombre
        $sentencia->bindParam(':nombre', $nombre);

        //le pasamos los apellidos
        $sentencia->bindParam(':apellidos', $apellidos);

        //le pasamos la matricula
        $sentencia->bindParam(':matricula', $matricula);


        //le pasamos el correo electronico
        $sentencia->bindParam(':correo', $correo);
        
        //ejecutamos la sentencia y regresamos el ultimo id insertado
        return($sentencia->execute())? $this->bd->lastInsertId(): false;
    }
    //funcion para seleccionar solo un registro de la bd
    public function selcionaRegistro($id){
        $consulta=$this->bd->prepare("SELECT * FROM empleados WHERE idEmpleados= :id LIMIT 1");
        $consulta->bindParam(':id',$id);
        return($consulta->execute())?$consulta->fetch():false;
    }


    //funcion que nos muestra todos los registros de la base de datos
    public function consulta($sql){
        $consulta=$this->bd->prepare($sql);//preparamos la consulta
        $consulta->execute();//ejecutamos la consulta
        return $consulta->fetchAll();//regresamos todos los elementos que estan en la bd
    }

    //funcion que actualiza un registro 
    public function actualiza($id,$nombre, $apellidos, $matricula, $correo){
        $sentencia=$this->bd->prepare("UPDATE empleados SET nombre= :nombre , apellidos= :apellidos , matricula= :matricula , correo= :correo WHERE idEmpleados = :id");
        
        //le pasamos el nombre
        $sentencia->bindParam(':id', $id);

        
        //le pasamos el nombre
        $sentencia->bindParam(':nombre', $nombre);

        //le pasamos los apellidos
        $sentencia->bindParam(':apellidos', $apellidos);

        //le pasamos la matricula
        $sentencia->bindParam(':matricula', $matricula);


        //le pasamos el correo electronico
        $sentencia->bindParam(':correo', $correo);
        
        return($sentencia->execute())?$id: false;
    }

    public function borra($id){
        $sentencia=$this->bd->prepare("DELETE FROM empleados WHERE idEmpleados= :id");
        $sentencia->bindParam(':id', $id);
        return($sentencia->execute())? true: false;
    }
}
