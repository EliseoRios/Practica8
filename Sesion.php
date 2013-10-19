<html>
  <?php
   session_start();
   Class Sesion
   {
	 function NombreSesion($nombre)
	 {
	  $Nombre = $nombre;
	  $_session['NombreUsuario'] = $Nombre;
	 }

	 function CerrarSesion()
	 {
	  session_destroy();
	 }
   }
  ?>
<html>