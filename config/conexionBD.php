<?php

class conexionBD{
      //Atributos de clase datos del servidor,user y password de la BD
      private $servidor="localhost";   
      private $basedatos="modelovistacontrolador";
      private $usuario="root";
      private $password="root";
  
  
      //metodo para conectarnos a la base de datos
      public function conexion(){
          try{
              $conexion= new PDO("mysql:host=$this->servidor;dbname=$this->basedatos",$this->usuario,$this->password);
              $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
              return $conexion;
          }catch(PDOException $error){
              echo "Fallo en la conexion".$error->getMessage();
          }
      }
    
}

?>
