<html>
 <head>
    <link href="Cargar.css" rel="stylesheet" type="text/css"/>
 </head>

 <body>
  <form>
   <?php
    require_once("Acciones.php");
    $acciones = new Acciones();

    if(isset($_GET['id']))
    {
     $Id = $_GET['id'];
    }
  
    $acciones->EliminarContacto($Id);
?>
  </form>
 </body>
<html>