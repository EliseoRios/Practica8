<html>
<head>
 <link href="Opciones.css" rel="stylesheet" type="text/css"/>
</head>
 <form>
 <body>
   <h1>INTRODUZCA EL ID DEL DEL CONTACTO PARA CONTINUAR</h1>
  <?php
	   require_once("Acciones.php");
	   require_once("CrearTabla.php");
	   $acciones = new Acciones();
	   $DatosGuardados = $acciones->MostrarTodos();
	   $creartabla = new CrearTabla();
	   $creartabla->DatosGuardados = $DatosGuardados;
	   $creartabla->Dibujarla();
  ?>
  </body>
 <form>
</html>