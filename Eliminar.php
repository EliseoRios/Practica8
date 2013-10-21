<?php
 require_once("Acciones.php");
 $acciones = new Acciones();

  if(isset($_GET['id']))
  {
   $Id = $_GET['id'];
  }
  
  $acciones->EliminarContacto($Id);
?>