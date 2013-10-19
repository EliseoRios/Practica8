<html>
 <head>
  <title>Directorio</title>
  <link href="" rel="stylesheet" type="text/css"/>
 </head>
 
 <body>
 <a href="InicioSesion.php">
  <button>
   <img src="imagenes/CerrarSesion.png" width="70" height="70"/>
    <?php
    require_once("Sesion.php");
    $IrSesion = new Sesion();
    $IrSesion->CerrarSesion();
   ?>
  </button>
 </a>
 <br/>
  
   <center>
    <a href="imagenes/save.ico">
    <button>
     <img src="nuevo.jpg" width="500" height="350"/>
    </button>
    </a>
	<a href="imagenes/preview.ico">
	 <button>
	  <image src="Mostrar.jpg" width="500" height="350">
	 </button>
	</a>
	
   </center>
 </body>
</html>