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
<<<<<<< HEAD
	   echo "<th>Opciones</th>";
=======
	   echo "<th colspan='3'>Opciones</th>";
>>>>>>> develop
  	  echo "</tr>";
	  
     foreach($this->DatosGuardados as $contacto){
      echo '<tr>';
       echo '<td>'.$contacto['Id']. '</td>';
	   echo '<td>'.$contacto['Nombre']. '</td>';
	   echo '<td>'.$contacto['Telefono']. '</td>';
	   echo '<td>';
		echo '<a href="Ver.php?id='.$contacto['Id'].'">Ver</a>';
		echo '<a href="Editar.php?id='.$contacto['Id'].'">Editar</a>';
		echo '<a href="Eliminar.php?id='.$contacto['Id'].'">Eliminar</a>';
		echo '</td>';
      echo '</tr>';
    }
    echo '</table>';
  }
 }
?>
</html>