<html>
 <form>
  <head>
   <link href="Cargar.css" rel="stylesheet" type="text/css"/>
  </head>
  
  <body>
   <?php
    require_once("Acciones.php");
	
    /*if(isset ($_GET['id']))
    {
      $IdContacto  = $_GET['id'];
    }*/
   
   $Nombre=$_POST["txtNombre"];
   $Telefono=$_POST["txtTelefono"];
   $Celular=$_POST["txtCelular"];
   $Direccion=$_POST["txtDireccion"];
   $Colonia=$_POST["txtColonia"];
   $CP=$_POST["txtCP"];
 
   if(empty($Nombre) || empty($Telefono) || empty($Celular) || empty ($Direccion) || empty($Colonia) || empty($CP))
   {
     echo "<script>alert(\"Llene TODOS los espacios.\");</script>";
     echo "<a href='Editar.php'>REGRESAR...</a>";
   }
   else
   {
    $acciones = new Acciones();
    $acciones->EditarContacto($IdContacto,$Nombre,$Telefono,$Celular,$Direccion,$Colonia,$CP);
   }
  ?>
  </body>
 </form>
</html>