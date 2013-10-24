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
	</br>
	<a href='InicioSesion.php'>Cerrar Sesi&oacuten</a>
   </section>
	
	<aside>
	 <a href='Opciones.php'><img src='imagenes/contactos.png' class='opciones'/></a>
	 </br>
	</aside> 
 </body>
</html>