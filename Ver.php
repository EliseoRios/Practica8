<html>
 <head>
    <link href="Cargar.css" rel="stylesheet" type="text/css"/>
 </head>

 <body>
  <form>
  <?php
   require_once("Acciones.php");
   require_once("InformacionContacto.php");
   $acciones = new Acciones();
   $informacionContacto = new InformacionContacto();
 
    if(isset ($_GET['id']))
    {
      $Id  = $_GET['id'];
    }
  
    $DatosGuardados = $acciones->VerContacto($Id);
    $informacionContacto->MostrarInformacion($DatosGuardados);
    echo '</br><a href="Opciones.php">Regresar...</a><br>';
    echo '</br><a href="InicioSesion.php">Cerrar Sesi&oacuten</a>';
  ?>
  </form>
 </body>
<html>