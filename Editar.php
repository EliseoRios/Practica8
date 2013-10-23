<html>
  <head>
    <link href="Cargar.css" rel="stylesheet" type="text/css"/>
  </head>
  
 <form method="POST" action="DatosNuevos.php">
  <body>
   <section>
    <h1>Ingresar nuevos datos:</h1>
    <?php
     require_once("Acciones.php");
     require_once("InformacionContacto.php");
	
<<<<<<< HEAD
    for($i=0;$i<6;$i++)
	{
	 echo "<label>".$Arreglo[$i]."</label></br>";
	 echo "<input type='text' value='".""."' name='txt".$Arreglo[$i]."'/></br>";
	}
   ?>
   <input type="submit" name="entrar"/>
  </section>
=======
     $acciones = new Acciones();
     $informacionContacto = new InformacionContacto();
 
     if(isset ($_GET['id']))
     {
       $Id  = $_GET['id'];
     }
	
     $DatosGuardados = $acciones->VerContacto($Id);
     $informacionContacto->MostrarInformacion($DatosGuardados);
    ?>
    </br>
    <input type="submit" name="entrar"/>
     </br><a href="Opciones.php">Regresar...</a><br>
     </br><a href="Directorio.php">P&aacutegina principal..</a>
   </section>
  </body>
>>>>>>> develop
 </form>
</html>