<html>
 <form method="POST" action="DatosNuevos.php">
  <section>
   <h1>Ingresar datos:</h1>
   <?php
   
  if(isset($_GET['id']))
  {
   $Id = $_GET['id'];
  }
   
   class Editar
  {
   public $Id;
  }
    $Arreglo = array("Nombre","Telefono","Celular","Direccion","Colonia","CP");
	
    for($i=0;$i<6;$i++)
	{
	 echo "<label>".$Arreglo[$i]."</label></br>";
	 echo "<input type='text' name='txt".$Arreglo[$i]."'/></br>";
	}
   ?>
   <input type="submit" name="entrar"/>
  </section>
 </form>
</html>