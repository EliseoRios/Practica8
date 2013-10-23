<html>
 <form method="POST" action="DatosNuevos.php">
  <section>
   <h1>Ingresar nuevos datos:</h1>
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
	
   ?>
   </br>
   <input type="submit" name="entrar"/>
    </br><a href="Opciones.php">Regresar...</a><br>
    </br><a href="Directorio.php">P&aacutegina principal..</a>
  </section>
 </form>
</html>