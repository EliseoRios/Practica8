<?php
 require_once("Conexion.php");
 
 class Acciones
 {
   public function MostrarTodos()
  {
   try
   {
     $conexion = new Conexion();
     $Almacenados=array();
     
     if(!$conexion->Abrir())
     {
       throw new Exception ($conexion->getError());
     }
     else
     {
       $sql = "SELECT * FROM contacto;";
	
	   if ($resultado = $conexion->mysql->query($sql))
       {
        if ($resultado->num_rows > 0) 
        {
	     while($fila = $resultado->fetch_assoc())
         {
          $Almacenados[] = $fila;
         }
        }
       }
     }
	 $conexion->Cerrar();
	 return $Almacenados;
    }
	catch (Exception $e)
	{
	 return array();//cambio
	}
  }
  
  public function Insertar()
  {
  }
 }
?>