<html>
 <head>
  <title>Directorio</title>
  <link href="Insertar.css" rel="stylesheet" type="text/css"/>
 </head>
 
 <body>
  <section>
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
	  ?>
	</aside>
 </body>
</html>