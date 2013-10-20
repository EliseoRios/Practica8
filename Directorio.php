<html>
 <head>
  <title>Directorio</title>
  <link href="Insertar.css" rel="stylesheet" type="text/css"/>
 </head>
 
 <body>
  <section>
  <form method="POST" action="CapturarDatos.php">
   <h1>Ingresar datos:</h1>
   <?php
    $Arreglo = array("Nombre","Telefono","Celular","Direccion","Colonia","CP");
	
    for($i=0;$i<6;$i++)
	{
	 echo "<label>".$Arreglo[$i]."</label></br>";
	 echo "<input type='text' name='txt".$Arreglo[$i]."'/></br>";
	}
   ?>
   <input type="submit" name="entrar"/>
  </section>
	
	<aside>
      <?php
	   require_once("Acciones.php");
	   require_once("CrearTabla.php");
	   $acciones = new Acciones();
	   $DatosGuardados = $acciones->MostrarTodos();
	   $creartabla = new CrearTabla();
	   $creartabla->DatosGuardados = $DatosGuardados;
	   $creartabla->Dibujarla();
	   
	   echo "<a href='Opciones.php'><button><img src='imagenes/Opciones.jpg' class='opciones'>OPCIONES</img></button></a>";
	  ?>
	</aside>
 </body>
</html>