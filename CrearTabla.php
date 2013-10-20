<html>
<?php
 
 class CrearTabla
 { 
  public $DatosGuardados;
  
  function Dibujarla()
  {
    echo "<table  border='1'>";
	  echo "<tr>";
	   echo "<th>Id</th>";
	   echo "<th>Nombre</th>";
	   echo "<th>Tel&eacutefono</th>";
	   //echo "<th colspan='3'>Opciones</th>";
  	  echo "</tr>";
	  
	 //$btnEditar = "<a href='Update.php'><input type='button' name='btnEditar' value='Editar' /></a>";
     //$btnEliminar = "<a href='Delete.php'><input type='button' name='Eliminar' value='Eliminar' /></a>";
     //$btnVer = "<a href='See.php'><input type='button' name='btnVer' value='Ver'/></a>";
	  
     foreach($this->DatosGuardados as $contacto){
      echo '<tr>';
       echo '<td>'.$contacto['Id']. '</td>';
	   echo '<td>'.$contacto['Nombre']. '</td>';
	   echo '<td>'.$contacto['Telefono']. '</td>';
	   //echo '<td>'.$btnEditar. '</td>';
	   //echo '<td>'.$btnEliminar. '</td>';
	   //echo '<td>'.$btnVer. '</td>';
      echo '</tr>';
    }
    echo '</table>';
  }
 }
?>
</html>