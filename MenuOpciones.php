<html>
<head>
 <link href="Opciones.css" rel="stylesheet" type="text/css"/>
</head>
 <form >
 <body>
   <h1>QUE TAREA DESEA HACER?</h1>
  <?php
	 $Id = $_POST['txtId'];
	   
	  if (empty($Id))
	  {
	   header("Location:Opciones.php");
	  }
	  echo "ID: ".$Id;
	  
   echo "<div id='abajo'>";
   echo "<a href='Ver.php?id='".$Id."'><input type='button' name='btnVer' value='Ver' id='boton'/></a>";
   echo "<a href='Editar.php'?id='".$Id."'><input type='button' name='btnEditar' value='Editar' id='boton'/></a>";
   echo "<a href='Eliminar.php'?id='".$Id."'><input type='button' name='btnEliminar' value='Eliminar' id='boton'/></a>";
   echo "<div>";
  ?>
  </body>
 <form>
</html>