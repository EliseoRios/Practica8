<html>
<head>
 <link href="Opciones.css" rel="stylesheet" type="text/css"/>
</head>
 <form method="POST" action="MandarId.php">
 <body>
   <h1>INTRODUZCA EL ID DEL DEL CONTACTO PARA CONTINUAR</h1>
   <p>Introduzca el texto y lo que desea hacer</p>
  <?php
	   require_once("Acciones.php");
	   require_once("CrearTabla.php");
	   $acciones = new Acciones();
	   $DatosGuardados = $acciones->MostrarTodos();
	   $creartabla = new CrearTabla();
	   $creartabla->DatosGuardados = $DatosGuardados;
	   $creartabla->Dibujarla();
  ?>
  <div id="abajo">
  </br>ID:
  <input type="text" name="txtId"/></br>
  </br>
   Opci&oacuten
   <select name="txtAccion">
    <option>Ver</option>
    <option>Eliminar</option>
    <option selected>Editar</option>
   </select></br>
  <input type="submit" name="Enviar" value="Realizar tarea"/>
  <div>
  </body>
 <form>
</html>