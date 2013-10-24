<html>
 <head>
  <title> Validando... </title>
  <link href="Inicio.css" rel="stylesheet" type="text/css"/>
 </head>
 
 <body>
  <?php
     $codigo = $_POST['txtCodigo'];
     $contrasenia = $_POST['txtContrasenia'];
	 
    if(trim($codigo)!= null and trim($contrasenia)!= null)
    {
     if(($codigo=="100" && $contrasenia=="udg")||($codigo=="110" && $contrasenia="tonala")||($codigo=="1" && $contrasenia=="root"))
     {
	   require_once("Sesion.php"); //si no accede cierra pagina.
       $IrSesion = new Sesion();
	   $IrSesion->NombreSesion($codigo);
	   	
	   header('Location:Opciones.php');
	   unset($_POST['txtCodigo']);
	   unset($_POST['txtContrasenia']);
  	 }
	 else
	 {
	  echo "<script>alert(\"VERIFICA QUE SEAN CORRECTOS\");</script>";
      regresar();
	 }
    }
    else
    {
       echo "<script>alert(\"FAVOR DE LLENAR LOS CAMPOS\");</script>";
       regresar();
    }
	
	function regresar()
	{
	  echo "<a href='InicioSesion.php'>REGRESAR...</a>";
	}
  ?>
 </body>
<html>