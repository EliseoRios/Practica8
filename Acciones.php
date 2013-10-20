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
  
  public function Insertar($Nombre,$Telefono,$Celular,$Direccion,$Colonia,$CP)
  {
   try
   {
    $conexion = new Conexion();
    if(!$conexion->Abrir())
    {
     throw new Exception ($conexion->getError());
    }
    else
    {
     $sql="INSERT INTO contacto (Nombre,Telefono,Celular,Direccion,Colonia,CP)VALUES ('".$Nombre."','".$Telefono."','".$Celular."','".$Direccion."','".$Colonia."','".$CP."');";

     $resultado = $conexion->mysql->query($sql);
	 $conexion->cerrar();
	 echo "<script>alert(\"Insercion exitosa\");</script>";
	 echo "<a href='Directorio.php'>REGRESAR...</a>";
	 return $resultado;
    }
   }
   catch (Exception $e)
   {
    return false;
   }
  }
 }
?>