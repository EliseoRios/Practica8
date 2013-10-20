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
	   echo "<th colspan='3'>Opciones</th>";
  	  echo "</tr>";
	  
     foreach($this->DatosGuardados as $contacto){
      echo '<tr>';
       echo '<td>'.$contacto['Id']. '</td>';
	   echo '<td>'.$contacto['Nombre']. '</td>';
	   echo '<td>'.$contacto['Telefono']. '</td>';
      echo '</tr>';
    }
    echo '</table>';
  }
 }
?>
</html>