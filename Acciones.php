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
  
  public function VerContacto()
  {
    try
    {
      throw new Exception ($conexion->getError());
    }
	catch (Exception $e)
	{
	 return array();
	}
  }
  
  public function EliminarContacto($IdContacto)
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
     $sql="DELETE FROM contacto WHERE Id='".$IdContacto."';";
     
     $resultado = $conexion->mysql->query($sql);
	 $conexion->cerrar();
	 echo "<script>alert(\"Eliminacion exitosa\");</script>";
	 echo "<a href='Directorio.php'>REGRESAR...</a>";
	 return $resultado;
    }
   }
   catch (Exception $e)
   {
    return false;
   }
   
  }
  
  public function EditarContacto($Nombre,$Telefono,$Celular,$Direccion,$Colonia,$CP)
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
     $sql="UPDATE contacto SET(Nombre='".$Nombre."',Telefono='".$Telefono."',Celular='".$Celular."',Direccion='".$Direccion."',Colonia='".$Colonia."',CP='".$CP."')WHERE Id='".$Id."';";

     $resultado = $conexion->mysql->query($sql);
	 $conexion->cerrar();
	 echo "<script>alert(\"Edicion exitosa\");</script>";
	 echo "<a href='Directorio.php'>REGRESAR...</a>";
	 return $resultado;
    }
	
   echo "<script>alert(\"Edicion exitosa\");</script>";
   }
   catch (Exception $e)
   {
    return false;
   }
  }
 }
?>