<html>
<?php
 
 class InformacionContacto
 { 
  function MostrarInformacion($DatosAlmacenados)
  {
    foreach($DatosAlmacenados as $contacto)
   {
     echo '<p>Nombre</p>';
	 echo '<input type="text" name="txtNombre" Value="'.$contacto['Nombre'].'"/>';
	
	 echo '<p>Tel&eacutefono</p>';
	 echo '<input type="text" name="txtTelefono" Value="'.$contacto['Telefono'].'"/>';
	
	 echo '<p>Celular</p>';
     echo '<input type="text" name="txtCelular" Value="'.$contacto['Celular'].'"/>';
	
     echo '<p>Direcci&oacuten</p>';
	 echo '<input type="text" name="txtDireccion" Value="'.$contacto['Direccion'].'"/>';
	
	 echo '<p>Colonia</p>';
	 echo '<input type="text" name="txtColonia" Value="'.$contacto['Colonia'].'"/>';
	
	 echo '<p>C.P.</p>';
	 echo '<input type="text" name="txtCP" Value="'.$contacto['CP'].'"/>';
   }
  }
 }
?>
</html>