<html>
 <form>
  <head>
   <link href="Cargar.css" rel="stylesheet" type="text/css"/>
  </head>
  
  <body>
   <?php
   require_once("Acciones.php");

   function ids()
   {
    $id = ID;
   }
   
   $Nombre=$_POST["txtNombre"];
   $Telefono=$_POST["txtTelefono"];
   $Celular=$_POST["txtCelular"];
   $Direccion=$_POST["txtDireccion"];
   $Colonia=$_POST["txtColonia"];
   $CP=$_POST["txtCP"];
 
   if(empty($Nombre) || empty($Telefono) || empty($Celular) || empty ($Direccion) || empty($Colonia) || empty($CP))
   {
     echo "<script>alert(\"Llene TODOS los espacios.\");</script>";
     echo "<a href='Directorio.php'>REGRESAR...</a>";
   }
   else
   {
    $acciones = new Acciones();
    $acciones->EditarContacto($Nombre,$Telefono,$Celular,$Direccion,$Colonia,$CP);
   }
  ?>
  </body>
 </form>
</html>