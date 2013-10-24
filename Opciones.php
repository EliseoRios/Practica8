<html>
<head>
 <link href="Opciones.css" rel="stylesheet" type="text/css"/>
</head>
 <form>
 <body>
   <h1>SELECCIONE LAS TAREAS QUE DESEA REALIZAR</h1>
  <?php
	   require_once("Acciones.php");
	   require_once("CrearTabla.php");
	   
	   $acciones = new Acciones();
	   $DatosGuardados = $acciones->MostrarTodos();
	   
	   $creartabla = new CrearTabla();
	   $creartabla->DatosGuardados = $DatosGuardados;
	   $creartabla->Dibujarla();
	   
	   echo '</br><a href="Directorio.php">NUEVO</a><br>';
	   echo '</br><a href="InicioSesion.php">Cerrar Sesi&oacuten</a><br>';
  ?>
  </body>
 <form>
</html>